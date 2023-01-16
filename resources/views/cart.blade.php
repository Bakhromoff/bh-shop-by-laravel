@extends('layouts.app')

@section('title')
    <title>Cart</title>
@endsection

@section('content')
    <div class="page-section section" style="padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="">
                    <form action="#">
                        <!--=======  cart table  =======-->
                        <div class="row" id="cartTable" style="background-color: #ffffff; margin-bottom: 30px;">
                            <div class="col-12" style="padding: 20px; border-bottom: 1px solid #dddddd;">
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-2 col-sm-4 col-4 el-center" style="padding-bottom: 10px;">
                                        <a href="/single-product/2">
                                            <img src="https://admin.irodaxon-biznes.uz/images/16561859077637.jpg"
                                                class="img-fluid" alt="Product">
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-8 col-8 el-center">
                                        <a class="blackcolor" href="/single-product/2">Sokum mol go'shtidan
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6 el-center">
                                        <div class="pro-quantity">
                                            <div class="pro-qty" style="border: 1px solid #222222;">
                                                <input class="blackcolor" type="text" id="updatequantity_2_medium"
                                                    value="5">
                                                <a style="border-left: 1px solid #222222; border-bottom: 1px solid #222222;"
                                                    href="#" onclick="updateCart('2','87990', '2_medium','+')"
                                                    class="blackcolor inc qty-btn">+</a>
                                                <a style="border-left: 1px solid #222222;" href="#"
                                                    onclick="updateCart('2','87990', '2_medium','-')"
                                                    class="blackcolor dec qty-btn">-</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-4 el-center">
                                        <span class="blackcolor" id="singleItemTotoalPrice_2_medium">439 950 so'm</span>
                                    </div>
                                    <div class="col-md-1 col-sm-2 col-2 el-center">
                                        <span class="pro-remove"><a onclick="deleteCartItem('2_medium')" id="item_2_medium"
                                                href="#"><i class="blackcolor fa fa-trash-o"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--=======  End of cart table  =======-->
                    </form>
                </div>
                <div class="col-lg-4 d-flex" style="">
                    <!--=======  Cart summery  =======-->
                    <div class="cart-summary">
                        <div class="cart-summary-wrap blackcolor" style="background-color: #ffffff">
                            <h4 class="blackcolor">BUYURTMALAR MIQDORI</h4>
                            <p class="blackcolor">Mening buyurtmam <span class="blackcolor" id="ttprice">439 950
                                    so'm</span></p>
                            <p class="blackcolor">Kod bo'yicha chegirma <span class="blackcolor" id="discount_order"> 0
                                    so'm</span></p>

                            <h2 class="blackcolor">Umumiy narx <span id="ttprice2">439 950 so'm</span></h2>
                        </div>
                        <div class="cart-summary-button">

                            <a href="/cart/address"
                                style="width: 100%; background-color: red; text-align: center; border-radius: 3px; padding: 5px; font-size: 17px;">Davom
                                etish</a>
                            <!-- <button class="update-btn">Update Cart</button> -->
                        </div>

                    </div>

                    <!--=======  End of Cart summery  =======-->

                </div>
            </div>
        </div>
    </div>
@endsection
