    @extends('layouts.app')

    @section('title')
        <title>Home</title>
    @endsection

    @section('content')
        @if ($errors->any())
            <div class="alert alert-success" role="alert" style="position: fixed; top: 50px; left: 20px; z-index: 1000000;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                {{ $errors->first() }}
            </div>

            <script>
                window.setTimeout(function() {
                    $(".alert").fadeTo(500, 0).slideUp(500, function() {
                        $(this).remove();
                    });
                }, 4000);
            </script>
        @endif

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                <?
                    $i = 0;
                    ?>
                @foreach ($ads as $ad)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $ad->id }}"
                        class="{{ $i === 0 ? 'active' : '' }}"></li>
                    <?
                        $i++;
                        ?>
                @endforeach

            </ol>
            <div class="carousel-inner">
                <?
                        $i = 0;
                        ?>
                @foreach ($ads as $ad)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ $ad->getImage() }}" style="max-width: 1600px; max-height: 600px;"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <?
                        $i++;
                        ?>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--=====  End of Hero slider Area  ======-->



        <div class="slider brand-logo-slider mb-35 mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  blog slider section title  =======-->

                        <div class="section-title">
                            <h3>Brendlar</h3>
                        </div>

                        <!--=======  End of blog slider section title  =======-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  brand logo wrapper  =======-->

                        <div class="brand-logo-wrapper pt-20 pb-20">

                            <!--=======  single-brand-logo  =======-->
                            @foreach ($brands as $brand)
                                <div class="col">
                                    <div class="single-brand-logo">
                                        <a href="{{route('brand_products', $brand->id)}}">
                                            <img src="{{ $brand->getImage() }}"
                                                style="max-width: 186px; max-height: 92px; object-fit: contain;"
                                                class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            <!--=======  End of single-brand-logo  =======-->
                        </div>

                        <!--=======  End of brand logo wrapper  =======-->
                    </div>
                </div>
            </div>
        </div>

        <!--=====  End of Brand logo slider  ======-->

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
                                <p class=""> 200 ming so'mdan ortiq xaridlarni bepul yetkazib berish</p>
                            </div>

                            <!--=======  End of single policy  =======-->


                            <!--=======  single policy  =======-->

                            <div class="single-policy">
                                <span><img src="assets/images/policy-icon2.png" class="img-fluid" alt=""></span>
                                <p>Mahsulot yoqmasa pulni qaytarish</p>
                            </div>


                            <div class="single-policy">
                                <span><img src="assets/images/policy-icon3.png" class="img-fluid" alt=""></span>
                                <p> 24/7 qo'llab quvvatlash</p>
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
                            <h3>Top kategoriyalar</h3>
                        </div>

                        <!--=======  End of category slider section title  =======-->

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  category container  =======-->

                        <div class="category-slider-container">

                            <!--=======  single category  =======-->

                            @foreach ($categories as $category)
                                <!--=======  single category  =======-->
                                @if ($category->isTop === 1)
                                    <div class="single-category">
                                        <div class="category-image">
                                            <a href="#{{ $category->name_uz }}" title="{{ $category->name_uz }}"
                                                style="width: 131px; height: 131px;">
                                                <img src="{{ $category->getImage() }}" class="img-fluid"
                                                    style="object-fit: fill; width: 121px; height: 121px;" alt="">
                                            </a>
                                        </div>
                                        <div class="category-title">
                                            <h3>
                                                <a href="#{{ $category->name_uz }}">{{ $category->name_uz }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                @endif

                                <!--=======  End of single category  =======-->
                            @endforeach


                            <!--=======  End of single category  =======-->

                        </div>

                        <!--=======  End of category container  =======-->

                    </div>
                </div>
            </div>
        </div>

        <!--=====  End of category slider  ======-->

        <!--=============================================
                            =            Tab slider         =
                            =============================================-->

        <section class="products py-5">
            <div class="container" style="box-shadow: 0px 5px 4px 0px rgb(0 0 0 / 10%);">
                @foreach ($categories as $category)
                    @if ($category->category_products->count())
                        <div class="products_list" id="{{ $category->name_uz }}">
                            <h3 class="text-left">{{ $category->name_uz }}</h3>
                            <div class="row pb-4">
                                @foreach ($products as $product)
                                    @if ($product->category_id == $category->id)
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 p-0">
                                            <div class="gf-product tab-slider-sub-product"
                                                style="border: 1px solid #e0e0e0;">
                                                <div class="image" style="">
                                                    <a href="{{ route('singleproduct', $product->id) }}" tabindex="0">
                                                        @if ($product->isSale === 1)
                                                            <span class="onsale">Sale!</span>
                                                        @endif
                                                        <img src="{{ $product->getImage() }}" class="img-fluid"
                                                            style="width: 325px; height: 270px; object-fit: contain"
                                                            alt="">
                                                    </a>
                                                    <div class="product-hover-icons d-flex">
                                                        <form class="d-flex"
                                                            action="{{ route('carts.store', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="product-button" data-tooltip="Add to cart"
                                                                type="submit"><span
                                                                    class="icon_cart_alt"></span></button>

                                                        </form>
                                                        <form class="d-flex" method="POST"
                                                            action="{{ route('wishes.store', $product->id) }}">
                                                            @csrf
                                                            <button class="product-button" data-tooltip="Add to wishlist"
                                                                type="submit"><span
                                                                    class="icon_heart_alt"></span></span></button>
                                                        </form>

                                                        <a href="" data-tooltip="Quick view" data-toggle="modal"
                                                            data-target="#quick-view-modal-container{{ $product->id }}"
                                                            tabindex="0"> <span class="icon_search"></span> </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-categories">
                                                        <a href="shop-left-sidebar.html"
                                                            tabindex="0">{{ $product->category->name_uz }}</a>
                                                    </div>
                                                    <h3 class="product-title"><a href=""
                                                            tabindex="0">{{ $product->name_uz }}</a></h3>
                                                    <div class="price-box">
                                                        @if ($product->price < $product->old_price)
                                                            <span class="main-price">{{ $product->old_price }} sum</span>
                                                        @endif
                                                        <span class="discounted-price">{{ $product->price }} sum</span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    @endif

                                    {{-- Quick view modal --}}

                                    <div class="modal fade quick-view-modal-container"
                                        id="quick-view-modal-container{{ $product->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-6 col-xs-12">
                                                            <!-- product quickview image gallery -->
                                                            <div class="product-image-slider">
                                                                <!--Modal Tab Content Start-->
                                                                <div class="tab-content product-large-image-list"
                                                                    id="myTabContent">
                                                                    <div class="tab-pane fade show active"
                                                                        id="single-slide1" role="tabpanel"
                                                                        aria-labelledby="single-slide-tab-1">
                                                                        <!--Single Product Image Start-->
                                                                        <div class="single-product-img img-full">
                                                                            <img src="{{ $product->getImage() }}"
                                                                                class="img-fluid" alt=""
                                                                                style="height: 100%; max-height: 350px;">
                                                                        </div>
                                                                        <!--Single Product Image End-->
                                                                    </div>
                                                                </div>
                                                                <!--Modal Content End-->
                                                            </div>
                                                            <!-- end of product quickview image gallery -->
                                                        </div>
                                                        <div class="col-lg-7 col-md-6 col-xs-12">
                                                            <!-- product quick view description -->
                                                            <div class="product-feature-details">
                                                                <h2 class="product-title mb-15">{{ $product->name_uz }}
                                                                </h2>

                                                                <h2 class="product-price mb-15">
                                                                    @if ($product->price < $product->old_price)
                                                                        <span class="main-price">{{ $product->old_price }}
                                                                            sum</span>
                                                                    @endif
                                                                    <span class="discounted-price">
                                                                        {{ $product->price }} sum</span>
                                                                </h2>

                                                                <p class="product-description mb-20">
                                                                    {{ $product->description_uz }}</p>


                                                                <form action="{{ route('carts.store', $product->id) }}"
                                                                    method="POST" class="cart-buttons mb-20">
                                                                    @csrf
                                                                    <div class="pro-qty mr-10">

                                                                        <input name="cart" type="number"
                                                                            value="1">
                                                                    </div>
                                                                    <div class="add-to-cart-btn">
                                                                        <button class="modal-cart-button"
                                                                            type="submit"><i
                                                                                class="fa fa-shopping-cart"></i>
                                                                            Add to Cart</button>
                                                                    </div>

                                                                </form>

                                                            </div>
                                                            <!-- end of product quick view description -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- End Quick view modal --}}
                                @endforeach

                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </section>


        <!--=====  End of Tab slider  ======-->



        <div class="sale-single-product-section mb-35">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-big-title text-center mb-30">
                            <h2>Super chegirmadagi maxsulotlar<span>Chegirmali narxlarda xarid qiling</span></h2>
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
                                                    class="single-countdown-text">Kun</span></div>
                                            <div class="single-countdown"><span
                                                    class="hours{{ $product->id }} single-countdown-time"></span><span
                                                    class="single-countdown-text">Soat</span></div>
                                            <div class="single-countdown"><span
                                                    class="minutes{{ $product->id }} single-countdown-time"></span><span
                                                    class="single-countdown-text">Daqiqa</span></div>
                                            <div class="single-countdown"><span
                                                    class="seconds{{ $product->id }} single-countdown-time"></span><span
                                                    class="single-countdown-text">Soniya</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 offset-lg-2 col-md-12">
                                                <!--=======  sale single product image  =======-->

                                                <div class="image text-md-center">
                                                    <a href="{{ route('singleproduct', $product->id) }}">
                                                        <span class="onsale">Sale!</span>
                                                        <img src="{{ $product->getImage() }}" class="img-fluid"
                                                            style="width: 325px; height: 270px; object-fit: contain"
                                                            alt="">
                                                    </a>
                                                    <div class="product-hover-icons">
                                                        <a href="#" data-tooltip="Quick view" data-toggle="modal"
                                                            data-target="#quick-view-modal-container{{ $product->id }}">
                                                            <span class="icon_search"></span> </a>
                                                    </div>
                                                </div>

                                                <!--=======  End of sale single product image  =======-->
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <!--=======  sale single product content  =======-->

                                                <div class="sale-single-product-content text-center">
                                                    <h2 class="product-title"><a
                                                            href="single-product.html">{{ $product->name_uz }}</a></h2>
                                                    <h2 class="price">
                                                        @if ($product->price < $product->old_price)
                                                            <span class="main-price">{{ $product->old_price }} sum</span>
                                                        @endif
                                                        <span class="discounted-price">{{ $product->price }} sum</span>
                                                    </h2>
                                                    <p class="product-description">{{ $product->description_uz }}</p>
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

        <!--=====  End of Sale product slider  ======-->
    @endsection
