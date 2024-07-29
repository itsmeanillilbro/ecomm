<div>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{asset('image/fevicon.png')}}" />
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/simple-line-icons.css')}}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}" />
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}" />
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}" />
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}" />
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive2.css')}}" />
    </head>

    <body>
        <!-- top notificationbar start -->
        <section class="top-2" style="background-image: url(image/top-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="top-home">
                            <li class="top-home-li t-content">
                                <!-- offer text start -->
                                <div class="top-content">
                                    <p class="top-slogn">
                                        <span class="top-c">Free shipping</span> orders from all
                                        item
                                    </p>
                                </div>
                                <!-- offer text end -->
                            </li>
                            <li class="top-home-li">
                                <!-- login start -->
                                <div class="currency">
                                    <div class="currency-drop">
                                        <ul class="cry">
                                            <li class="eur-head">
                                                <span class="eur">account <i class="fa fa-angle-down"></i></span>
                                                <ul class="all-currency account-details">
                                                    <li><a href="register.html">register / log in</a></li>
                                                    <li><a href="checkout-2.html">checkout</a></li>
                                                    <li><a href="wishlist.html">my wishlist</a></li>
                                                    <li><a href="tracking.html">order history</a></li>
                                                    <li><a href="cart-2.html">my cart</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- login end -->

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- top notificationbar start -->
        <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="{{route('index')}}">
                                        <img src="{{asset('image/logo2.png')}}" alt="logo-image" class="img-fluid" />
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- main menu start -->
                                <div class="header-element megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">

                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Men</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu mega-menu collapse"
                                                    id="collapse-top-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-sub-mega-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fruit & nut</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-fruits-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Oranges</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas & plantains</h2>
                                                        <a href="#collapse-top-banana-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas & plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-banana-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fresh gala</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-top-apple-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-apple-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Pears produce</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Women</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu mega-menu collapse"
                                                    id="collapse-top-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-sub-mega-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fruit & nut</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-fruits-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Oranges</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas & plantains</h2>
                                                        <a href="#collapse-top-banana-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas & plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-banana-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fresh gala</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-top-apple-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-apple-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Pears produce</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Kids</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu mega-menu collapse"
                                                    id="collapse-top-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-sub-mega-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fruit & nut</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-fruits-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Oranges</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas & plantains</h2>
                                                        <a href="#collapse-top-banana-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas & plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-banana-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fresh gala</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-top-apple-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-apple-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Pears produce</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title" style="white-space: nowrap;" >
                                                    <span class="sp-link-title">Home and Living</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu mega-menu collapse"
                                                    id="collapse-top-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-sub-mega-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fruit & nut</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-fruits-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Oranges</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas & plantains</h2>
                                                        <a href="#collapse-top-banana-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas & plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-banana-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fresh gala</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-top-apple-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-apple-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Pears produce</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Beauty</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu mega-menu collapse"
                                                    id="collapse-top-mega-menu">
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Fresh food</h2>
                                                        <a href="#collapse-top-sub-mega-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Fresh food</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-sub-mega-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fruit & nut</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Mixedfruits</h2>
                                                        <a href="#collapse-top-fruits-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Mixedfruits</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-fruits-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Oranges</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Bananas & plantains</h2>
                                                        <a href="#collapse-top-banana-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Bananas & plantains</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-banana-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Fresh gala</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="megamenu-li parent">
                                                        <h2 class="sublink-title">Apples berries</h2>
                                                        <a href="#collapse-top-apple-menu" data-bs-toggle="collapse"
                                                            class="sublink-title sublink-title-lg">
                                                            <span>Apples berries</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-supmenu collapse"
                                                            id="collapse-top-apple-menu">
                                                            <li class="supmenu-li">
                                                                <a href="product-style-6.html">Pears produce</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link parent">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>

                                                <ul class="dropdown-submenu banner-menu collapse"
                                                    id="collapse-top-banner-menu">
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner01.jpg" alt="menu-image"
                                                                class="img-fluid" /></a>
                                                        <a href="grid-list.html"
                                                            class="menu-banner-title"><span>Bestseller</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner02.jpg" alt="menu-image"
                                                                class="img-fluid" /></a>
                                                        <a href="grid-list.html" class="menu-banner-title"><span>Special
                                                                product</span></a>
                                                    </li>
                                                    <li class="menu-banner">
                                                        <a href="grid-list.html" class="menu-banner-img"><img
                                                                src="image/menu-banner03.jpg" alt="mneu image"
                                                                class="img-fluid" /></a>
                                                        <a href="grid-list.html"
                                                            class="menu-banner-title"><span>Featured product</span></a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <!-- main menu end -->
                                <!-- header icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarContent">
                                                <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap search-wrap">
                                            <div class="search-rap">
                                                <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i
                                                        class="ion-ios-search-strong"></i></a>
                                            </div>
                                        </li>
                                        <li class="side-wrap wishlist-wrap">
                                            <a href="wishlist-empty.html" class="header-wishlist">
                                                <span class="wishlist-icon"><i class="icon-heart"></i></span>
                                                <span class="wishlist-counter">0</span>
                                            </a>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon"><i class="icon-handbag"></i></span>
                                                            <span id="cart-total" class="bigcounter">0</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                                <!-- header icon end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button">
                                            <i class="ion-close-round"></i>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse" id="navbarContent">
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">

                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Men</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Men</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse"
                                                            id="collapse-mega-menu">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fruit & nut</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-fruits-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Oranges</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">
                                                                    Bananas & plantains
                                                                </h2>
                                                                <a href="#collapse-banana-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-banana-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fresh gala</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-apple-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Pears produce</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Women</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu1" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Women</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse"
                                                            id="collapse-mega-menu1">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fruit & nut</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-fruits-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Oranges</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">
                                                                    Bananas & plantains
                                                                </h2>
                                                                <a href="#collapse-banana-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-banana-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fresh gala</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-apple-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Pears produce</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Kids</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu2" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Kids</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse"
                                                            id="collapse-mega-menu2">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fruit & nut</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-fruits-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Oranges</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">
                                                                    Bananas & plantains
                                                                </h2>
                                                                <a href="#collapse-banana-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-banana-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fresh gala</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-apple-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Pears produce</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Home & Living</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu3" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Men</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse"
                                                            id="collapse-mega-menu3">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fruit & nut</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-fruits-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Oranges</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">
                                                                    Bananas & plantains
                                                                </h2>
                                                                <a href="#collapse-banana-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-banana-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fresh gala</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-apple-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Pears produce</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Beauty</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu4" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Beauty</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu mega-menu collapse"
                                                            id="collapse-mega-menu4">
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Fresh food</h2>
                                                                <a href="#collapse-sub-mega-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Fresh food</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-sub-mega-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fruit & nut</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Mixedfruits</h2>
                                                                <a href="#collapse-fruits-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Mixedfruits</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-fruits-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Oranges</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">
                                                                    Bananas & plantains
                                                                </h2>
                                                                <a href="#collapse-banana-menu"
                                                                    data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Bananas & plantains</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-banana-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Fresh gala</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-li parent">
                                                                <h2 class="sublink-title">Apples berries</h2>
                                                                <a href="#collapse-apple-menu" data-bs-toggle="collapse"
                                                                    class="sublink-title sublink-title-lg">
                                                                    <span>Apples berries</span>
                                                                    <i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-supmenu collapse"
                                                                    id="collapse-apple-menu">
                                                                    <li class="supmenu-li">
                                                                        <a href="product-style-6.html">Pears produce</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Collection</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-banner-menu" data-bs-toggle="collapse"
                                                            class="link-title link-title-lg">
                                                            <span class="sp-link-title">Collection</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu banner-menu collapse"
                                                            id="collapse-banner-menu">
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img
                                                                        src="image/menu-banner01.jpg" alt="menu-image"
                                                                        class="img-fluid" /></a>
                                                                <a href="grid-list.html"
                                                                    class="menu-banner-title"><span>Bestseller</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img
                                                                        src="image/menu-banner02.jpg" alt="menu-image"
                                                                        class="img-fluid" /></a>
                                                                <a href="grid-list.html"
                                                                    class="menu-banner-title"><span>Special
                                                                        product</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="grid-list.html" class="menu-banner-img"><img
                                                                        src="image/menu-banner03.jpg" alt="mneu image"
                                                                        class="img-fluid" /></a>
                                                                <a href="grid-list.html"
                                                                    class="menu-banner-title"><span>Featured
                                                                        product</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile menu end -->

            <!-- search start -->
            <div class="modal fade" id="search-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="search-content">
                                            <div class="search-engine">
                                                <input type="text" name="search"
                                                    placeholder="Search products,brands or advice" />
                                                <a href="search.html" class="search-btn"><i
                                                        class="ion-ios-search-strong"></i></a>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i class="ion-close-round"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- search end -->
        </header>
</div>
