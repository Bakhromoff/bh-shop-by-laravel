@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection



@section('content')
    <!--=============================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            =            Hero slider Area         =
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            =============================================-->

    <div class="hero-slider-container mb-35">
        <!--=======  Slider area  =======-->

        <div class="hero-slider-one">
            <!--=======  hero slider item  =======-->
            @foreach ($products as $product)
                @if ($product->price > 10000)
                    <div class="hero-slider-item slider-bg"
                        style="background-image: url({{ $product->getImage() }}); background-size: contain;">
                        <div class="slider-content d-flex flex-column justify-content-center align-items-center">
                            <h1 style="color: rgba(0, 0, 0, 0.5);">{{ $product->name_uz }}</h1>
                            <p style="color: rgba(0, 0, 0, 0.5);">{!! Str::limit(strip_tags($product->description_uz), 100) !!}...</p>
                            <a href="shop-left-sidebar.html" class="slider-btn">Xarid qilish</a>
                        </div>
                    </div>
                @endif
            @endforeach


            <!--=======  End of hero slider item  =======-->


            <!--=======  End of Hero slider item  =======-->

        </div>

        <!--=======  End of Slider area  =======-->

    </div>

    <!--=====  End of Hero slider Area  ======-->



    <!--=============================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =            Policy area         =
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================-->

    <div class="policy-section mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="policy-titles d-flex align-items-center flex-wrap">
                        <!--=======  single policy  =======-->

                        <div class="single-policy">
                            <span><img src="assets/images/policy-icon1.png" class="img-fluid" alt=""></span>
                            <p> FREE SHIPPING ON ORDERS OVER $200</p>
                        </div>

                        <!--=======  End of single policy  =======-->


                        <!--=======  single policy  =======-->

                        <div class="single-policy">
                            <span><img src="assets/images/policy-icon2.png" class="img-fluid" alt=""></span>
                            <p>30 -DAY RETURNS MONEY BACK</p>
                        </div>

                        <!--=======  End of single policy  =======-->

                        <!--=============================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =            single policy         =
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =============================================-->

                        <div class="single-policy">
                            <span><img src="assets/images/policy-icon3.png" class="img-fluid" alt=""></span>
                            <p> 24/7 SUPPORT</p>
                        </div>

                        <!--=====  End of single policy  ======-->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Policy area  ======-->

    <!--=============================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =            category slider         =
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =============================================-->

    <div class="slider category-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  category slider section title  =======-->

                    <div class="section-title">
                        <h3>top categories</h3>
                    </div>

                    <!--=======  End of category slider section title  =======-->

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  category container  =======-->

                    <div class="category-slider-container">

                        @foreach ($categories as $category)
                            <!--=======  single category  =======-->
                            @if ($category->isTop === 1)
                                <div class="single-category">
                                    <div class="category-image">
                                        <a href="#{{ $category->name_ru }}" title="{{ $category->name_ru }}"
                                            style="width: 131px; height: 131px;">
                                            <img src="{{ $category->getImage() }}" class="img-fluid"
                                                style="object-fit: fill; width: 121px; height: 121px;" alt="">
                                        </a>
                                    </div>
                                    <div class="category-title">
                                        <h3>
                                            <a href="#{{ $category->name_ru }}">{{ $category->name_ru }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endif

                            <!--=======  End of single category  =======-->
                        @endforeach

                    </div>

                    <!--=======  End of category container  =======-->

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of category slider  ======-->


    <section class="products py-5">
        <div class="container" style="box-shadow: 0px 5px 4px 0px rgb(0 0 0 / 10%);">
            @foreach ($categories as $category)
                @if ($category->category_products->count())
                    <div class="products_list" id="{{ $category->name_ru }}">
                        <h3 class="text-left">{{ $category->name_ru }}</h3>
                        <div class="row pb-4">
                            @foreach ($products as $product)
                                @if ($product->category_id == $category->id)
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 p-0">
                                        <div class="gf-product tab-slider-sub-product" style="border: 1px solid #e0e0e0;">
                                            <div class="image" style="">
                                                <a href="single-product.html" tabindex="0">
                                                    @if ($product->isSale === 1)
                                                        <span class="onsale">Sale!</span>
                                                    @endif
                                                    <img src="{{ $product->getImage() }}" class="img-fluid"
                                                        style="width: 325px; height: 270px; object-fit: contain"
                                                        alt="">
                                                </a>
                                                <div class="product-hover-icons">
                                                    <a class="active" href="#" data-tooltip="Add to cart"
                                                        tabindex="0">
                                                        <span class="icon_cart_alt"></span></a>
                                                    <a href="#" data-tooltip="Add to wishlist" tabindex="0"> <span
                                                            class="icon_heart_alt"></span> </a>
                                                    <a href="#" data-tooltip="Compare" tabindex="0"> <span
                                                            class="arrow_left-right_alt"></span> </a>
                                                    <a href="#" data-tooltip="Quick view" data-toggle="modal"
                                                        data-target="#quick-view-modal-container" tabindex="0"> <span
                                                            class="icon_search"></span> </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-categories">
                                                    <a href="shop-left-sidebar.html"
                                                        tabindex="0">{{ $product->category->name_ru }}</a>
                                                </div>
                                                <h3 class="product-title"><a href=""
                                                        tabindex="0">{{ $product->name_ru }}</a></h3>
                                                <div class="price-box">
                                                    @if ($product->price < $product->old_price)
                                                        <span class="main-price">{{ $product->old_price }} сум</span>
                                                    @endif
                                                    <span class="discounted-price">{{ $product->price }}</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>



    <div class="sale-single-product-section mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-big-title text-center mb-30">
                        <h2>Organic 40% sale off <span>GREENFARM DEAL OF THE DAY</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  sale single product container  =======-->

                    <div class="sale-single-product-container">
                        <!--=======  sale single product  =======-->

                        @foreach ($products as $product)
                            @if ($product->discount != null && $product->discount >= Carbon\Carbon::now())
                                <div class="sale-single-product">
                                    <div class="product-countdown">
                                        <div class="single-countdown"><span
                                                class="days{{ $product->id }} single-countdown-time"></span><span
                                                class="single-countdown-text">Days</span></div>
                                        <div class="single-countdown"><span
                                                class="hours{{ $product->id }} single-countdown-time"></span><span
                                                class="single-countdown-text">Hours</span></div>
                                        <div class="single-countdown"><span
                                                class="minutes{{ $product->id }} single-countdown-time"></span><span
                                                class="single-countdown-text">Mins</span></div>
                                        <div class="single-countdown"><span
                                                class="seconds{{ $product->id }} single-countdown-time"></span><span
                                                class="single-countdown-text">Secs</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 offset-lg-2 col-md-12">
                                            <!--=======  sale single product image  =======-->

                                            <div class="image text-md-center">
                                                <a href="single-product.html">
                                                    <span class="onsale">Sale!</span>
                                                    <img src="{{ $product->getImage() }}" class="img-fluid"
                                                        style="width: 325px; height: 270px; object-fit: contain"
                                                        alt="">
                                                </a>
                                                <div class="product-hover-icons">
                                                    <a href="#" data-tooltip="Quick view" data-toggle="modal"
                                                        data-target="#quick-view-modal-container"> <span
                                                            class="icon_search"></span> </a>
                                                </div>
                                            </div>

                                            <!--=======  End of sale single product image  =======-->
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <!--=======  sale single product content  =======-->

                                            <div class="sale-single-product-content text-center">
                                                <h2 class="product-title"><a
                                                        href="single-product.html">{{ $product->name_ru }}</a></h2>
                                                <h2 class="price">
                                                    @if ($product->price < $product->old_price)
                                                        <span class="main-price">{{ $product->old_price }} сум</span>
                                                    @endif
                                                    <span class="discounted-price">{{ $product->price }} сум</span>
                                                </h2>
                                                <p class="product-description">{{ $product->description_ru }}</p>
                                                <a href="#" class="single-sale-add-to-cart-btn">add to cart</a>
                                            </div>

                                            <!--=======  End of sale single product content  =======-->
                                        </div>
                                    </div>
                                    <script>
                                        let days{{ $product->id }} = document.querySelector('.days{{ $product->id }}'),
                                            hours{{ $product->id }} = document.querySelector('.hours{{ $product->id }}'),
                                            minutes{{ $product->id }} = document.querySelector('.minutes{{ $product->id }}'),
                                            seconds{{ $product->id }} = document.querySelector('.seconds{{ $product->id }}'),
                                            //Count Down End Date
                                            //1000 milliseconds = 1 second
                                            countDownDate{{ $product->id }} = new Date("{{ $product->discount->format('M d, Y H:i:s') }}").getTime();

                                        let counter{{ $product->id }} = setInterval(() => {
                                            //Get Date Now
                                            let dateNow = new Date().getTime();
                                            //Find The Date Difference Between Now and End Date
                                            let dateDiff{{ $product->id }} = countDownDate{{ $product->id }} - dateNow;

                                            //Get Time Unit
                                            let day = Math.floor(dateDiff{{ $product->id }} / (1000 * 60 * 60 * 24));
                                            let hour = Math.floor((dateDiff{{ $product->id }} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            let minute = Math.floor((dateDiff{{ $product->id }} % (1000 * 60 * 60)) / (1000 * 60));
                                            let second = Math.floor((dateDiff{{ $product->id }} % (1000 * 60)) / 1000);

                                            days{{ $product->id }}.innerHTML = day < 10 ? `0${day}` : day;
                                            hours{{ $product->id }}.innerHTML = hour < 10 ? `0${hour}` : hour;
                                            minutes{{ $product->id }}.innerHTML = minute < 10 ? `0${minute}` : minute;
                                            seconds{{ $product->id }}.innerHTML = second < 10 ? `0${second}` : second;

                                            if (dateDiff{{ $product->id }} == 0) {
                                                clearInterval(counter{{ $product->id }});
                                            }
                                        }, 1000);
                                    </script>
                                </div>
                            @endif
                        @endforeach
                        <!--=======  End of sale single product  =======-->
                    </div>

                    <!--=======  End of sale single product container  =======-->
                </div>
            </div>
        </div>
    </div>
@endsection






@section('function-modal')
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-xs-12">
                            <!-- product quickview image gallery -->
                            <div class="product-image-slider">
                                <!--Modal Tab Content Start-->
                                <div class="tab-content product-large-image-list" id="myTabContent">
                                    <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                        aria-labelledby="single-slide-tab-1">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product01.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                                        aria-labelledby="single-slide-tab-2">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product02.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                                        aria-labelledby="single-slide-tab-3">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product03.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                                        aria-labelledby="single-slide-tab-4">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product04.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                </div>
                                <!--Modal Content End-->
                                <!--Modal Tab Menu Start-->
                                <div class="product-small-image-list">
                                    <div class="nav small-image-slider" role="tablist">
                                        <div class="single-small-image img-full">
                                            <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img
                                                    src="assets/images/products/product01.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>
                                        <div class="single-small-image img-full">
                                            <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                                    src="assets/images/products/product02.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>
                                        <div class="single-small-image img-full">
                                            <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                                    src="assets/images/products/product03.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>
                                        <div class="single-small-image img-full">
                                            <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                                    src="assets/images/products/product04.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Modal Tab Menu End-->
                            </div>
                            <!-- end of product quickview image gallery -->
                        </div>
                        <div class="col-lg-7 col-md-6 col-xs-12">
                            <!-- product quick view description -->
                            <div class="product-feature-details">
                                <h2 class="product-title mb-15">Kaoreet lobortis sagittis laoreet</h2>

                                <h2 class="product-price mb-15">
                                    <span class="main-price">$12.90</span>
                                    <span class="discounted-price"> $10.00</span>
                                </h2>

                                <p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud
                                    exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut
                                    lectus</p>


                                <div class="cart-buttons mb-20">
                                    <div class="pro-qty mr-10">
                                        <input type="text" value="1">
                                    </div>
                                    <div class="add-to-cart-btn">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>


                                <div class="social-share-buttons">
                                    <h3>share this product</h3>
                                    <ul>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end of product quick view description -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--=====  End of Quick view modal  ======-->
@endsection
