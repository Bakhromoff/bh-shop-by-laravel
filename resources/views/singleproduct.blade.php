@extends('layouts.app')

@section('title')
    <title>{{ $product->name_uz }}</title>
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
    <div class="breadcrumb-area mb-30">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">{{ $product->name_uz }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-content ">
        <div class="container">
            <!--=======  single product content container  =======-->
            <div class="single-product-content-container mb-30">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">


                        <!-- product image gallery -->
                        <div
                            class="product-image-slider d-flex flex-custom-xs-wrap flex-sm-nowrap align-items-center mb-sm-35">

                            <!--Modal Tab Content Start-->
                            <div class="tab-content product-large-image-list">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                    aria-labelledby="single-slide-tab-1">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img easyzoom img-full">
                                        <img src="{{ $product->getImage() }}" class="img-fluid"
                                            style="max-width: 600px; max-height: 600px;" alt="">
                                        <a href="{{ $product->getImage() }}" class="big-image-popup"><i
                                                class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            </div>
                            <!--Modal Content End-->

                        </div>
                        <!-- end of product image gallery -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <!-- product quick view description -->
                        <div class="product-feature-details">
                            <h2 class="product-title mb-15">{{ $product->name_uz }}</h2>

                            <h2 class="product-price mb-15">
                                @if ($product->old_price > $product->price)
                                    <span class="main-price">{{ $product->old_price }} so'm</span>
                                @endif
                                <span class="discounted-price">{{ $product->price }} so'm</span>
                            </h2>

                            <p class="product-description mb-20">{{ $product->description_uz }}</p>


                            <div class="cart-buttons mb-20">
                                <form action="{{ route('carts.store', $product->id) }}" method="POST"
                                    class="cart-buttons mb-20">
                                    @csrf
                                    <div class="pro-qty mr-10">

                                        <input name="cart" type="number" value="1">
                                    </div>
                                    <div class="add-to-cart-btn">
                                        <button class="modal-cart-button" type="submit"><i class="fa fa-shopping-cart"></i>
                                            Cartga qo'shish</button>
                                    </div>

                                </form>
                            </div>

                            <div class="single-product-action-btn mb-20">
                                <form class="d-flex" method="POST" action="{{ route('wishes.store', $product->id) }}">
                                    @csrf
                                    <button class="btn btn-link single-btn"
                                        data-tooltip="Saralanganlarga
                                    qo'shish"
                                        type="submit"><span class="icon_heart_alt"></span> Saralanganlarga
                                        qo'shish</button>
                                </form>
                            </div>


                            <div class="single-product-category mb-20">
                                <h3>Kategoriya: <span><a class="text-capitalize"
                                            href="">{{ $product->category->name_uz }}</a></span></h3>
                            </div>
                        </div>
                        <!-- end of product quick view description -->
                    </div>
                </div>
            </div>

            <!--=======  End of single product content container  =======-->

        </div>

    </div>

    <section class="products py-5">
        <div class="container" style="box-shadow: 0px 5px 4px 0px rgb(0 0 0 / 10%);">
            <div class="products_list" id="">
                <h3 class="text-left">O'xshash mahsulotlar</h3>
                <div class="row pb-4">
                    @foreach ($likeproducts as $product)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 p-0">
                            <div class="gf-product tab-slider-sub-product" style="border: 1px solid #e0e0e0;">
                                <div class="image" style="">
                                    <a href="{{ route('singleproduct', $product->id) }}" tabindex="0">
                                        @if ($product->isSale === 1)
                                            <span class="onsale">Sale!</span>
                                        @endif
                                        <img src="{{ $product->getImage() }}" class="img-fluid"
                                            style="width: 325px; height: 270px; object-fit: contain" alt="">
                                    </a>
                                    <div class="product-hover-icons d-flex">
                                        <form class="d-flex" action="{{ route('carts.store', $product->id) }}"
                                            method="POST">
                                            @csrf
                                            <button class="product-button" data-tooltip="Add to cart" type="submit"><span
                                                    class="icon_cart_alt"></span></button>

                                        </form>
                                        <form class="d-flex" method="POST"
                                            action="{{ route('wishes.store', $product->id) }}">
                                            @csrf
                                            <button class="product-button" data-tooltip="Add to wishlist"
                                                type="submit"><span class="icon_heart_alt"></span></span></button>
                                        </form>

                                        <a href="" data-tooltip="Quick view" data-toggle="modal"
                                            data-target="#quick-view-modal-container{{ $product->id }}" tabindex="0">
                                            <span class="icon_search"></span> </a>
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

                        {{-- Quick view modal --}}

                        <div class="modal fade quick-view-modal-container"
                            id="quick-view-modal-container{{ $product->id }}" tabindex="-1" role="dialog"
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
                                                        <div class="tab-pane fade show active" id="single-slide1"
                                                            role="tabpanel" aria-labelledby="single-slide-tab-1">
                                                            <!--Single Product Image Start-->
                                                            <div class="single-product-img img-full">
                                                                <img src="{{ $product->getImage() }}" class="img-fluid"
                                                                    alt=""
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

                                                            <input name="cart" type="number" value="1">
                                                        </div>
                                                        <div class="add-to-cart-btn">
                                                            <button class="modal-cart-button" type="submit"><i
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
        </div>
    </section>


    <!--=====  End of single product content  ======-->
@endsection
