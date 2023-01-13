@extends('layouts.app')

@section('title')
    <title>Wishlist</title>
@endsection

@section('content')
    <div class="page-section section" style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <!--=======  cart table  =======-->

                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="assets/images/products/product01.jpg" class="img-fluid"
                                                    alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Cillum dolore tortor nisl fermentum</a></td>
                                        <td class="pro-price"><span>$29.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"><a href="#"
                                                    class="inc qty-btn">+</a><a href="#" class="dec qty-btn">-</a>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>$29.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
