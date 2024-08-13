<div>
    <!--home page slider start-->
    <section class="home-slider-2">
        <div class="container">
            <div class="row">
                <div class="col-1g-12 ">
                    <div class="menu-slider ">

                        <div class="home-slider-2 col-12 ">
                            <div class="home-slider2 owl-carousel owl-theme ">
                                @foreach ($banner as $ban)
                                    <div class="items " >
                                        <div class="img-back"
                                            style="background-image: url({{asset('storage/' . $ban->image)}})">
                                            <div class="slide-c-3 h-s-content">
                                                <span>{{ $ban->title }}</span>
                                                <h1 class="text-light">{{ $ban->caption }}</h1>
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
    <!-- trending product start -->
    <section class="section-tb-padding trending-pro container mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Trending products</h2>
                    </div>
                    <div class="home2-trending owl-carousel owl-theme">
                        <div class="items">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="product-style-2.html">
                                        <img class="img-fluid" src="image/pro/pro-img-9.jpg" alt="pro-img1" />
                                        <img class="img-fluid additional-image" src="image/pro/pro-img-09.jpg"
                                            alt="additional image" />
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-12%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                    <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3>
                                    <a href="product-style-2.html">Organic coconet (5ltr) juice</a>
                                </h3>
                                <div class="rating">
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star d-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$167.00 USD</span>
                                    <span class="old-price"><del>$179.00 USD</del></span>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- trending product end -->


    <!-- category image start -->
    <section class="section-b-padding home2-category container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2>Shop by category</h2>
                    </div>
                    <div class="home2-cate-image owl-carousel owl-theme">

                        <div class="items">
                            <div class="cate-image">
                                <a href="grid-list-2.html">
                                    <img src="image/category-image/home-2/image9.jpg" class="img-fluid"
                                        alt="cate-image" />
                                    <span>Fresh vegetable</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category image end -->


    <!-- deal of the day start -->
    <section class="home2-deal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-back-image" style="background-image: url(image/dealbanner2.jpg)">
                        <div class="deal">
                            <div class="deal-content">
                                <h2>Deal of the day!</h2>
                                <span>We offer a hot dael offer every festival</span>
                            </div>
                            <ul class="contdown_row">
                                <li class="countdown_section">
                                    <span id="days" class="countdown_timer">254</span>
                                    <span class="countdown_title">Days</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="hours" class="countdown_timer">11</span>
                                    <span class="countdown_title">Hours</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="minutes" class="countdown_timer">33</span>
                                    <span class="countdown_title">Minutes</span>
                                </li>
                                <li class="countdown_section">
                                    <span id="seconds" class="countdown_timer">36</span>
                                    <span class="countdown_title">Seconds</span>
                                </li>
                            </ul>
                            <a href="grid-list-2.html" class="btn btn-style1">Shop collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deal of the day end -->


    <!-- our product tab star -->
    <section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="our-tab">
                    <div class="section-title">
                        <h2>Our products</h2>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">New products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile">Discounted Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">Free Shipping</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-pro-slider">
                        <div class="tab-pane fade show active" id="home">
                            <div class="our-products-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tab-product">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-2.html">
                                                        <img src="image/pro/pro-img-1.jpg" alt="pro-img1"
                                                            class="img-fluid" />
                                                        <img src="image/pro/pro-img-01.jpg" alt="additional image"
                                                            class="img-fluid additional-image" />
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                            </div>
                                            <div class="tab-caption">
                                                <h3>
                                                    <a href="product-style-2.html">Fresh litchi 100% organic</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$117.00 USD</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i
                                                            class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i
                                                            class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more swiper-slide elements as needed -->
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0"
                                            role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="our-products-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tab-product">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-2.html">
                                                        <img src="image/pro/pro-img-10.jpg" alt="pro-img1"
                                                            class="img-fluid" />
                                                        <img src="image/pro/pro-img-010.jpg" alt="additional image"
                                                            class="img-fluid additional-image" />
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                            </div>
                                            <div class="tab-caption">
                                                <h3>
                                                    <a href="product-style-2.html">Shrimp jumbo (5Lb)</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$230.00 USD</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i
                                                            class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i
                                                            class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more swiper-slide elements as needed -->
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0"
                                            role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact">
                            <div class="our-products-tab swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tab-product">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-2.html">
                                                        <img src="image/pro/pro-img-10.jpg" alt="pro-img1"
                                                            class="img-fluid" />
                                                        <img src="image/pro/pro-img-010.jpg" alt="additional image"
                                                            class="img-fluid additional-image" />
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                            </div>
                                            <div class="tab-caption">
                                                <h3>
                                                    <a href="product-style-2.html">Shrimp jumbo (5Lb)</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$230.00 USD</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="wishlist.html" class="w-c-q-icn"><i
                                                            class="fa fa-heart"></i></a>
                                                    <a href="cart.html" class="w-c-q-icn"><i
                                                            class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more swiper-slide elements as needed -->
                                </div>
                                <div class="swiper-buttons">
                                    <div class="content-buttons">
                                        <div class="swiper-button-next" tabindex="0" role="button"
                                            aria-label="Next slide" aria-disabled="false"></div>
                                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0"
                                            role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- our product tab end -->


 <!-- featured products start -->
    <section class="section-tb-padding featured-products">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-title">
              <h2>Featured products</h2>
            </div>
            <div class="featured owl-carousel owl-theme">

              <div class="items">
                <div class="tred-pro">
                  <div class="tr-pro-img">
                    <a href="product-style-2.html">
                      <img
                        class="img-fluid"
                        src="image/pro/pro-img-7.jpg"
                        alt="pro-img1"
                      />
                      <img
                        class="img-fluid additional-image"
                        src="image/pro/pro-img-07.jpg"
                        alt="additional image"
                      />
                    </a>
                  </div>
                  <div class="Pro-lable">
                    <span class="p-discount">-10%</span>
                  </div>
                  <div class="pro-icn">
                    <a href="wishlist.html" class="w-c-q-icn"
                      ><i class="fa fa-heart"></i
                    ></a>
                    <a href="cart.html" class="w-c-q-icn"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                    <a
                      href="javascript:void(0)"
                      class="w-c-q-icn"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                      ><i class="fa fa-eye"></i
                    ></a>
                  </div>
                </div>
                <div class="caption">
                  <h3>
                    <a href="product-style-2.html">Fresh dryed almod (50gm)</a>
                  </h3>
                  <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                  </div>
                  <div class="pro-price">
                    <span class="new-price">$580.00 USD</span>
                    <span class="old-price"><del>$590.00 USD</del></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- featured products end -->

</div>
