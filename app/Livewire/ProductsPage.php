<?php
namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Header;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - Prakriti Store')]
class ProductsPage extends Component
{
    use LivewireAlert;
    use WithPagination;

    #[Url]
    public $categories_select = [];
    #[Url]
    public $brands_select = [];
    #[Url]
    public $sort = 'latest';
    public $pricee = 100000;


    protected $updatesQueryString = [
        'categories_select',
        'brands_select',
        'sort',
        'min_price',
        'max_price',
    ];

    public function updated($propertyName)
    {
        $this->resetPage();
    }

    public function addToCart($product_id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $total_count = CartManagement::addItemsToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Header::class);
        $this->alert('success', 'Product added successfully', [
            'position' => 'top-start',
            'toast' => true,
            'timerProgressBar' => true,
            'timer' => 3000,
        ]);
    }

    public function render()
    {
        $products = Product::query()->where('is_active', 1);

        if (!empty($this->categories_select)) {
            $products->whereIn('subcategory_id', $this->categories_select);
        }

        if (!empty($this->brands_select)) {
            $products->whereIn('brand_id', $this->brands_select);
        }

        if (!empty($this->pricee)) {
            $products->whereBetween('price', [0, $this->pricee]);
        }

        if ($this->sort == 'latest') {
            $products->latest();
        }

        if ($this->sort == 'price') {
            $products->orderBy('price');
        }

        return view('livewire.products-page', [
            'products' => $products->paginate(6),
            'brands' => Brand::where('is_active', 1)->take(12)->get(['id', 'name', 'slug']),
            'categories' => SubCategory::where('is_active', 1)->take(12)->get(['id', 'name', 'slug']),
        ]);
    }
}
