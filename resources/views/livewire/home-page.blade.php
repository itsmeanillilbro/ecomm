<div>
    <!--home page slider start-->
    <section class="home-slider-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu-slider">
                        <div class="vegamenu-content">
                            <a href="#vega-menu" data-bs-toggle="collapse" class="vegamenu-title">
                                <span class="menu-icon"><i class="ion-navicon"></i></span>
                                <span class="menu-cat-title">Browse category</span>
                                <span class="menu-down-icon"><i class="ion-ios-arrow-down"></i></span>
                            </a>
                            <div class="main-wrap collapse" id="vega-menu">
                                <ul class="vega-menu">
                                    <li class="menu-link parent">
                                        <a href="javascript:void(0)" class="link-title">
                                            <img src="image/menu-img/image01.jpg" alt="menu-image" />
                                            <span>Fresh fruits</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#fresh-fruits" data-bs-toggle="collapse" class="left-mega-menu-xl">
                                            <img src="image/menu-img/image01.jpg" alt="menu-image" />
                                            <span>Fresh fruits</span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-submenu collapse" id="fresh-fruits">
                                            <li class="submenu-li parant">
                                                <h6>Organic staples</h6>
                                                <a href="#left-menu-b" data-bs-toggle="collapse"
                                                    class="left-mega-menu-xl">
                                                    <span>Organic staples</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu-megamenu-link collapse" id="left-menu-b">
                                                    <li>
                                                        <a href="product-style-2.html">Blackberry 100%Organic</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Fresh & healthi food</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Other flowers</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Roses popular</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Searches flowers</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Flowers banana</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li parant">
                                                <h6>Herbs & seasonings</h6>
                                                <a href="#left-menu-c" data-bs-toggle="collapse"
                                                    class="left-mega-menu-xl">
                                                    <span>Herbs & seasonings</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu-megamenu-link collapse" id="left-menu-c">
                                                    <li>
                                                        <a href="product-style-2.html">Fresh fruits exotic</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Fruits & veggies</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Organic fruist & vegetables</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Cuts & sprouts</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Flower bouquets</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-style-2.html">Bunches marigold</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="left-menu-link left-menu-image">
                                                <img src="image/menu-img/drop-image.jpg" alt="drop-image" />
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-link">
                                        <a href="product-style-2.html" class="link-title">
                                            <img src="image/menu-img/image06.jpg" alt="manu-image" />
                                            <span>Blackberry 100%organic</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="home-slider-2">
                            <div class="home-slider2 owl-carousel owl-theme">
                                @foreach ($banner as $ban)
                                    <div class="items"  >
                                        <div class="img-back"
                                            style="background-image: url({{asset('storage/' . $ban->image)}})">
                                            <div class="slide-c-3 h-s-content">
                                                <span>{{ $ban->title }}</span>
                                                <h1 class="text-light" >{{ $ban->caption }}</h1>
                                                <a href="grid-list-2.html" class="btn btn-style1">Shop now</a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home page slider end-->


</div>
