<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <?
    $categories = App\Models\Category::all();
    $headcategories = App\Models\HeadCategory::all();
    $info = App\Models\Information::first();
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halal market</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- CSS
 ============================================ -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Elegent CSS -->
    <link href="assets/css/elegent.min.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Helper CSS -->
    <link href="assets/css/helper.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .activelang {
            font-weight: 500;
            font-size: 12px;
            margin-right: 4px;
            text-decoration: none;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            text-align: center;
            vertical-align: middle;
            line-height: 30px;
            width: 30px;
            height: 30px;
            border-radius: 15px;
            color: rgb(255, 255, 255) !important;
            background-color: #80bb01;
        }

        .logout-form:hover {
            background-color: #80bb01;
            color: #fff;
        }

        .product-button {
            border: 0;
            color: #fff;
            background-color: #80bb01;
            width: 43px;
            height: 43px;
            border-radius: 50%;
        }

        .product-button:hover {
            background-color: #5d8801;
        }

        .modal-cart-button {
            background: #fff;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            height: 45px;
            line-height: 43px;
            min-width: 130px;
            padding: 0 15px;
            text-align: center;
            text-transform: none;
        }

        .modal-cart-button:hover {
            background-color: #80bb01;
            border-color: #80bb01;
            color: #fff;
        }

        .cart-delete:hover {
            color: #80bb01;
        }

        .single-btn {
            color: #666;
        }

        .single-btn:hover {
            color: #80bb01;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <!--=============================================
 =            Header         =
 =============================================-->

    <header>
        <!--=======  header top  =======-->

        <div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-left">
                        <!-- currncy language dropdown -->
                        <p class="">Halal.uz ga xush kelibsiz</p>
                        <!-- end of currncy language dropdown -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-right">
                        <!-- header top menu -->
                        <div class="header-top-menu">
                            <div class="col text-center text-sm-right addlangsdiv" style="padding-top: 8px;">
                                <!-- header top menu -->
                                <div class="header-top-menu blackcolor">
                                    <ul class="d-flex justify-content-end">
                                        <li><a href="/language/uz" class="blackcolor activelang">UZ</a></li>
                                        <li><a href="/language/ru" class="blackcolor ">RU</a></li>
                                        @if (Route::has('login'))
                                            @auth
                                                <li><a href="{{ route('wishes.index') }}">Saralangan</a></li>
                                                <li><a class="blackcolor d-flex" href="{{ route('account') }}"><i
                                                            class="material-icons opacity-10">account_circle</i>{{ Auth::user()->name }}</a>
                                                </li>
                                            @else
                                                <li><a class="blackcolor" href="/login">Login</a></li>
                                            @endauth
                                        @endif



                                    </ul>
                                </div>
                                <!-- end of header top menu -->
                            </div>
                        </div>
                        <!-- end of header top menu -->
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of header top  =======-->

        <!--=======  header bottom  =======-->

        <div class="header-bottom header-bottom-one header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 text-lg-left text-md-center text-sm-center">
                        <!-- logo -->
                        <div class="logo mt-15 mb-15">
                            <a href="{{ route('index') }}">
                                <img src="assets/images/logo2.png" class="img-fluid" style="border-radius: 50%"
                                    alt="">
                            </a>
                        </div>
                        <!-- end of logo -->
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div
                            class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
                            <!-- header phone number -->
                            <div class="header-contact d-flex">
                                <div class="phone-icon">
                                    <img src="assets/images/icon-phone.png" class="img-fluid" alt="">
                                </div>
                                <div class="phone-number">
                                    Tel: <span class="number">{{ $info->phone }}</span>
                                </div>
                            </div>
                            <!-- end of header phone number -->
                            <!-- search bar -->
                            <div class="header-advance-search">
                                <form action="{{ route('search') }}" method="">
                                    <input type="search" name="name" placeholder="Mahsulotni qidirish">
                                    <button><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <!-- end of search bar -->
                            <!-- shopping cart -->
                            @if (\Auth::user())
                                <?
                                $carts = App\Models\Cart::where('user_id', \Auth::user()->id);
                                $products = App\Models\Product::all();

                            ?>
                                <!-- shopping cart -->
                                <div class="shopping-cart" id="shopping-cart">
                                    <a href="{{ route('cart') }}">
                                        <div class="cart-icon d-inline-block">
                                            <span class="icon_bag_alt"></span>
                                        </div>
                                        <div class="cart-info d-inline-block">

                                            <p>
                                            <h4 class="m-0">Savat</h4>
                                            <?
                                                $sum = 0;
                                                ?>
                                            @foreach ($products as $product)
                                                @if (in_array(
                                                        $product->id,
                                                        \Auth::user()->carts->pluck('product_id')->toArray()))
                                                    <?
                                                        $sum = $sum + ($product->carts->count())*($product->price);
                                                        ?>
                                                @endif
                                            @endforeach
                                            <span>
                                                {{ $carts->sum('count') }} dona -
                                                {{ $sum }} so'm
                                            </span>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- end of shopping cart -->

                                    <!-- cart floating box -->
                                    <div class="cart-floating-box" id="cart-floating-box">
                                        <div class="cart-items">
                                            <?
                                            $sum = 0;
                                            ?>
                                            @forelse ($products as $product)
                                                @if (in_array(
                                                        $product->id,
                                                        \Auth::user()->carts->pluck('product_id')->toArray()))
                                                    <?
                                                    $sum = $sum + $product->carts->count()*$product->price;
                                                    ?>
                                                    <div class="cart-float-single-item d-flex">
                                                        <span class="remove-item">
                                                            <form action="{{ route('carts.delete', $product->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button class="btn btn-default cart-delete"
                                                                    type="submit"><i class="fa fa-times"></i></button>
                                                            </form>
                                                        </span>
                                                        <div class="cart-float-single-item-image">
                                                            <a href="single-product.html"><img
                                                                    src="{{ $product->getImage() }}" class="img-fluid"
                                                                    style="max-height: 100px;" alt=""></a>
                                                        </div>
                                                        <div class="cart-float-single-item-desc">
                                                            <p class="product-title"> <a
                                                                    href="single-product.html">{{ $product->name_uz }}</a>
                                                            </p>
                                                            <p class="price"><span
                                                                    class="count">{{ $product->carts->sum('count') }}x</span>
                                                                {{ $product->price }} so'm</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @empty
                                            @endforelse


                                        </div>
                                        @if ($carts->count() != 0)
                                            <div class="cart-calculation">
                                                <div class="calculation-details">
                                                    <p class="total">Umumiy <span>{{ $sum }} sum</span></p>
                                                </div>
                                                <div class="floating-cart-btn text-center">
                                                    <a href="">Hisob</a>
                                                    <a href="{{ route('cart') }}">Ko'rish</a>
                                                </div>
                                            </div>
                                        @else
                                            <p class="text-sm alert alert-dark">Bo'sh</p>
                                        @endif
                                    </div>
                                    <!-- end of cart floating box -->
                                </div>
                            @else
                                <div class="shopping-cart" id="shopping-cart">
                                    <a href="cart.html">
                                        <div class="cart-icon d-inline-block">
                                            <span class="icon_bag_alt"></span>
                                        </div>
                                        <div class="cart-info d-inline-block">
                                            <p>Savat
                                                <span>
                                                    0 dona - 0 so'm
                                                </span>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- end of shopping cart -->

                                    <!-- cart floating box -->
                                    <div class="cart-floating-box" id="cart-floating-box">
                                        <div class="cart-items">
                                            <div class="cart-float-single-item d-flex">
                                                <span class="remove-item"><a href="#"><i
                                                            class="fa fa-times"></i></a></span>
                                                <div class="cart-float-single-item-image">
                                                    <a href="single-product.html"><img
                                                            src="assets/images/products/product01.jpg"
                                                            class="img-fluid" alt=""></a>
                                                </div>
                                                <div class="cart-float-single-item-desc">
                                                    <p class="product-title"> <a href="single-product.html">Duis
                                                            pulvinar
                                                            obortis eleifend </a></p>
                                                    <p class="price"><span class="count">1x</span> $20.50</p>
                                                </div>
                                            </div>
                                            <div class="cart-float-single-item d-flex">
                                                <span class="remove-item"><a href="#"><i
                                                            class="fa fa-times"></i></a></span>
                                                <div class="cart-float-single-item-image">
                                                    <a href="single-product.html"><img
                                                            src="assets/images/products/product02.jpg"
                                                            class="img-fluid" alt=""></a>
                                                </div>
                                                <div class="cart-float-single-item-desc">
                                                    <p class="product-title"> <a href="single-product.html">Fusce
                                                            ultricies
                                                            dolor vitae</a></p>
                                                    <p class="price"><span class="count">1x</span> $20.50</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-calculation">
                                            <div class="calculation-details">
                                                <p class="total">Subtotal <span>$22</span></p>
                                            </div>
                                            <div class="floating-cart-btn text-center">
                                                <a href="checkout.html">Checkout</a>
                                                <a href="cart.html">View Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of cart floating box -->
                                </div>
                            @endif
                        </div>

                        <!-- navigation section -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    @foreach ($headcategories as $headcategory)
                                        <li class="active menu-item-has-children"><a
                                                href="#">{{ $headcategory->name_uz }}</a>
                                            <ul class="sub-menu">
                                                @foreach ($categories as $category)
                                                    @if ($category->head_category_id === $headcategory->id)
                                                        <li><a
                                                                href="/#{{ $category->name_uz }}">{{ $category->emoji }}{{ $category->name_uz }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach


                                            </ul>
                                        </li>
                                    @endforeach


                                    <li><a href="{{ route('contact') }}">Bog'lanish</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end of navigation section -->
                    </div>
                    <div class="col-12">
                        <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of header bottom  =======-->
    </header>

    <!--=====  End of Header  ======-->
