<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'fab-product-hunt';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')->schema([
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            })
                            ->maxLength(255),

                        TextInput::make('slug')
                            // ->required()
                            ->maxLength(255)
                            // ->disabled()
                            // ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('products')
                    ])->columns(2),



                    Section::make('Images Information')->schema([
                        FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->maxFiles(4)
                            ->directory('uploads/products')
                            ->columnSpan(2)
                            ->enableReordering()

                        ,
                    ])->columns(2)
                ])->columnSpan(2),



                Group::make()->schema([
                    Section::make('Price Information')->schema([
                        TextInput::make('price')
                            ->prefix("NPR")
                            ->required(),
                    ]),

                    Section::make('Association')->schema([
                        // Select::make('category_id')
                        //     ->required()
                        //     ->searchable()
                        //     ->preload()
                        //     ->relationship('category', 'name'),
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->required()
                            ->afterStateUpdated(function (callable $get, callable $set) {
                                $categoryId = $get('category_id');
                                $set('subcategory_id', null);
                            }),
                        Select::make('subcategory_id')
                            ->label('Subcategory')
                            ->required()
                            ->options(function (callable $get) {
                                $categoryId = $get('category_id');
                                $subcategories = SubCategory::where('category_id', $categoryId)->pluck('name', 'id');
                                return $subcategories;
                            })
                            ->searchable()
                            ->preload(),
                    ]),

                    Section::make('Brands')->schema([
                        Select::make('brand_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('brand', 'name')
                    ]),


                    Section::make('Status')->schema([
                        Toggle::make('is_active')
                            ->required()
                            ->default(true),

                        Toggle::make('is_stock')
                            ->required()
                            ->default(true),

                        // Toggle::make('is_featured')
                        //     ->required(),


                        Toggle::make('is_trending')
                            ->required(),

                        Toggle::make('is_freeshipping')
                            ->label('Free Shipping?')
                            ->required()

                    ])


                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->limit(80)
                    ->searchable(),

                // TextColumn::make('category.name')
                //     ->searchable()
                //     ->sortable(),

                TextColumn::make('subcategory.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('images.0')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('price')
                    ->money("NPR")
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([

            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),

                ])

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),

                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }


}
