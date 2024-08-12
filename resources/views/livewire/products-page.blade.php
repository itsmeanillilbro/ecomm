<div>
    <!-- grid-list start -->
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <!-- Categories Filter -->
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link">
                                <span>Categories </span><i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="all-option" id="category-filter">
                                @foreach($categories as $category)
                                    <li class="grid-list-option">
                                        <input type="checkbox" wire:model.live="categories_select"
                                            value="{{ $category->id }}">
                                        <a href="javascript:void(0)">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Brands Filter -->
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Brands</h4>
                            <a href="#brand-filter" data-bs-toggle="collapse" class="filter-link">
                                <span>Brands </span><i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="all-option " id="brand-filter">
                                @foreach($brands as $brand)
                                    <li class="grid-list-option">
                                        <input type="checkbox" wire:model.live="brands_select" value="{{ $brand->id }}">
                                        <a href="javascript:void(0)">{{ $brand->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Price Filter -->
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link">
                                <span>Filter by price </span><i class="fa fa-angle-down"></i>
                            </a>
                            <div>
                                <div class="font-semibold mb-2">{{Number::currency($pricee, 'NPR')}}
                                </div>
                                <input type="range" wire:model.live="pricee"
                                    class="w-full h-1 mb-4 rounded cursor-pointer"
                                    max="500000" value="100000" step="10000">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-area">
                        <!-- Sort By -->
                        <div class="grid-list-select">
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Sort by</label>
                                    <select wire:model.live="sort">
                                        <option value="latest">Latest</option>
                                        <option value="price">Price</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <!-- Products Grid -->
                        <div class="grid-pro ">
                            <ul class="grid-product ">
                                @foreach($products as $product)
                                    <li class="grid-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="{{ route('product.show', $product->slug) }}">
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/' . $product->images[0])}}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="pro-icn my-2">
                                            <a href="javascript:void(0)" wire:click="addToCart({{ $product->id }})"
                                                class="btn-add-to-cart">
                                                <i class="fa fa-shopping-bag"></i> <span wire:loading.remove
                                                    wire:target="addToCart({{ $product->id }})"
                                                    class="loading-text">Add To Cart</span>
                                                <span wire:loading wire:target="addToCart({{ $product->id }})"
                                                    class="loading-text">Adding...</span>
                                            </a>
                                        </div>
                                        <div class="caption">
                                            <h3><a
                                                    href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                            </h3>
                                            <div class="rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa fa-star{{ $i < $product->rating ? ' c-star' : '-o' }}"></i>
                                                @endfor
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">NPR {{ number_format($product->price, 2) }}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-center">
                                {{ $products->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grid-list end -->
</div>
