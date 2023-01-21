@extends('layouts.app')

@section('title')
    <title>{{ $product->name_uz }}</title>
@endsection

@section('content')
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

    <!--=====  End of single product content  ======-->
@endsection
