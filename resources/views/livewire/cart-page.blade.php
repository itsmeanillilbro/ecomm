<div>
    <!-- cart start -->
    <section class="cart-page section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">



                        <div class="cart-area">
                            <div class="cart-details">
                                <div class="cart-item">
                                    <span class="cart-head">My cart:</span>
                                    <span class="c-items">{{$total_count}}
                                    @if($total_count==1)
                                    item
                                    @else
                                    items
                                    @endif
                                        </span>
                                </div>
                                @foreach ($cart_items as $items)
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                           <img src="{{url('storage', $items['image'])}}"
                                                    class="img-fluid h-16 w-16 mr-4" alt="image">
                                        </div>
                                        <div class="pro-details">
                                            <h4>{{$items['name']}}</h4>

                                            <span class="cart-pro-price">{{Number::currency($items['unit_amount'], 'NPR')}}</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                            <button    wire:click='decreaseQty({{$items['product_id']}})' class="border rounded-md py-2 px-4 mr-2"
                                               >-</button>
                                                <span class="text-center w-8">{{$items['quantity']}}</span>
                                                <button  wire:click="increaseQty({{$items['product_id']}})" class="border rounded-md py-2 px-4 ml-2"
                                                   >+</button>
                                            </div>
                                            <a href="#" class="pro-remove " wire:click='removeItem({{$items['product_id']}})'>Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span>{{Number::currency($items['total_amount'], 'NPR')}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                </div>
                <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-lg font-semibold mb-4">Summary</h2>
                        <div class="flex justify-between mb-2">
                            <span>Subtotal</span>
                            <span>{{Number::currency($grand_total, 'NPR')}}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Taxes</span>
                            <span>{{Number::currency(0, 'NPR')}}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Shipping</span>
                            <span>{{Number::currency(0, 'NPR')}}</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">{{Number::currency($grand_total, 'NPR')}}</span>
                        </div>

                        @if($cart_items)
                            <a href="/checkout" class=" block text-center btn-style2  text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart end -->
</div>
