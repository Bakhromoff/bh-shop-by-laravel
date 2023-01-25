@extends('layouts.app')

@section('title')
    <title>Cart</title>
@endsection

@section('content')
    <div class="page-section section mt-50 mb-50">
        <div class="container">
            <div class="row">
                <?
                                                                                                      $sum = 0;
                                                                                                      ?>
                @if ($carts->count() != 0)
                    <div class="col-12">
                        <form action="{{ route('orders.store', \Auth::user()->id) }}" method="POST">
                            <!--=======  cart table  =======-->



                            <div class="cart-table table-responsive mb-40">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Rasmi</th>
                                            <th class="pro-title">Mahsulot nomi</th>
                                            <th class="pro-price">Narxi</th>
                                            <th class="pro-quantity">Miqdori</th>
                                            <th class="pro-subtotal">Umumiy</th>
                                            <th class="pro-remove">O'chirish </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            @if (in_array(
                                                    $product->id,
                                                    \Auth::user()->carts->pluck('product_id')->toArray()))
                                                <tr>
                                                    <td class="pro-thumbnail"><a href="" data-tooltip="Quick view"
                                                            tabindex="0" data-toggle="modal"
                                                            data-target="#quick-view-modal-container{{ $product->id }}"><img
                                                                src="{{ $product->getImage() }}" style="max-height: 150px;"
                                                                class="img-fluid" alt="Product"></a></td>
                                                    <td class="pro-title"><a
                                                            href="{{ route('singleproduct', $product->id) }}">{!! Str::limit(strip_tags($product->name_uz), 50) !!}...</a>
                                                    </td>
                                                    <td class="pro-price"><span>{{ $product->price }} so'm</span></td>
                                                    <td class="pro-quantity">
                                                        {{ $product->carts->sum('count') }}
                                                        {{-- <form action="{{ route('carts.update', $product->id) }}"
                                                            method="POST" class="cart-buttons">
                                                            @csrf
                                                            <div class="pro-qty mr-10">

                                                                <input name="cart" type="number"
                                                                    value="{{ $product->carts->sum('count') }}">
                                                            </div>
                                                        </form> --}}
                                                    </td>
                                                    <td class="pro-subtotal">
                                                        {{ $product->carts->sum('count') * $product->price }} so'm</span>
                                                    </td>
                                                    <td class="pro-remove">
                                                        <form action="{{ route('carts.delete', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button onclick="return confirm('Tasdiqlaysizmi ?')"
                                                                class="btn btn-default" type="submit"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </form>
                                                        </a>
                                                    </td>
                                                    <input type="hidden" name="product_count{{ $product->id }}"
                                                        value="{{ $product->carts->sum('count') }}">
                                                </tr>
                                            @endif

                                            {{-- Quick view modal --}}

                                            <div class="modal fade quick-view-modal-container"
                                                id="quick-view-modal-container{{ $product->id }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
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
                                                                        <h2 class="product-title mb-15">
                                                                            {{ $product->name_uz }}
                                                                        </h2>

                                                                        <h2 class="product-price mb-15">
                                                                            @if ($product->price < $product->old_price)
                                                                                <span
                                                                                    class="main-price">{{ $product->old_price }}
                                                                                    so'm</span>
                                                                            @endif
                                                                            <span class="discounted-price">
                                                                                {{ $product->price }} so'm</span>
                                                                        </h2>

                                                                        <p class="product-description mb-20">
                                                                            {{ $product->description_uz }}</p>


                                                                        <form
                                                                            action="{{ route('carts.store', $product->id) }}"
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

                                            <?
                                                                                                          $sum = $sum + \Auth::user()->carts->sum('count') * $product->price;

                                                                                                          ?>
                                            {{-- End Quick view modal --}}
                                        @empty
                                            <p class="text-left alert alert-dark">Hech narsa topilmadi</p>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>

                            <!--=======  End of cart table  =======-->




                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <!--=======  Discount Coupon  =======-->

                                    <div class="discount-coupon">
                                        <h4>Chegirma Kupon kodi</h4>
                                        <form action="{{ route('cart') }}" method="GET">
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-25">
                                                    <input type="text" name="coupon" placeholder="Kupon kodi">
                                                </div>
                                                <div class="col-md-6 col-12 mb-25">
                                                    <input type="submit" name="accept" value="Tasdiqlash">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="discount-coupon">
                                        <h4>Yetkazib berish manzili</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <input class="form-control mb-2" type="text" name="address"
                                                    placeholder="Manzil:">
                                                <input class="form-control mb-2" type="text" name="phone"
                                                    placeholder="Tel:">
                                            </div>

                                        </div>
                                    </div>

                                    <!--=======  End of Discount Coupon  =======-->

                                </div>


                                <div class="col-lg-6 col-12 d-flex">
                                    <!--=======  Cart summery  =======-->

                                    <div class="cart-summary">
                                        <div class="cart-summary-wrap">
                                            <h4>Mening buyurtmam</h4>
                                            <p>Umumiy <span>{{ $sum }} so'm</span>
                                            </p>
                                            <p>Kupon bo'yicha chegirma <span>
                                                    {{ $discount }} so'm
                                                </span></p>
                                            <h2>Jami: <span>{{ $sum - $discount }} so'm</span></h2>
                                        </div>
                                        <div class="cart-summary-button">
                                            @csrf
                                            <input class="btn btn-success" name="submit" type="submit"
                                                value="Davom etish">
                                            <input type="hidden" name="summary" value="{{ $sum - $discount }}">
                                        </div>
                                    </div>

                                    <!--=======  End of Cart summery  =======-->

                                </div>

                            </div>
                        </form>
                    </div>
                @else
                    <h2 class='text-left alert alert-dark'>Bo'sh</h2>
                @endif
            </div>
        </div>
    </div>
@endsection
