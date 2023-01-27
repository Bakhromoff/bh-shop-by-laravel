@extends('layouts.app')

@section('title')
    <title>Shaxsiy ma'lumotlar</title>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-success" role="alert"
            style="position: fixed; width: 30%; top: 10%; left: 20%; z-index: 1000000;">
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
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="{{ route('index') }}"><i class="fa fa-home"></i> Bosh sahifa</a></li>
                            <li class="active">Shaxsiy ma'lumotlar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="my-account-section section position-relative mb-50 fix">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row">

                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">

                                <a class="active" href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                    Buyurtmalar</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i>Shaxsiy ma'lumotlar</a>
                                <form class="px-3 logout-form" id="logout-form" action="{{ route('logout') }}"
                                    method="POST">
                                    @csrf
                                    <button class="logout-button btn btn-default w-100 text-left text-secondary"
                                        type="submit"><i class="fa fa-sign-out"></i>
                                        Logout</button>
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade active show" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="blackcolor">Buyurtmalar</h3>

                                        <div class="myaccount-table table-responsive text-center">

                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>

                                                        <th>Sana</th>
                                                        <th>Status</th>
                                                        <th>Umumiy narx</th>
                                                        {{-- <th>Mahsulotlar</th> --}}
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?
                                                                                                        $i = 1;
                                                                                                        ?>
                                                    @forelse (\Auth::user()->orders as $order)
                                                        <tr>
                                                            <td class="blackcolor">{{ $i }}</td>
                                                            <td class="blackcolor">{{ $order->created_at }}</td>
                                                            <td class="blackcolor">
                                                                <?
                                                                                                                if ($order->user_order_status == 4) {
                                                                                                                    echo "Qabul qilindi";
                                                                                                                } elseif ($order->user_order_status == 3) {
                                                                                                                    echo "Jonatildi";
                                                                                                                } elseif ($order->user_order_status == 2) {
                                                                                                                    echo "Bekor qilindi";
                                                                                                                } else {
                                                                                                                    echo "Jarayonda";
                                                                                                                }

                                                                                                                ?>
                                                            </td>
                                                            <td class="blackcolor">{{ $order->user_order_summary }} so'm
                                                            </td>
                                                            {{-- <td class="blackcolor">

                                                        <a class="blackcolor" href="#"
                                                        data-tooltip="Quick view" data-toggle="modal"
                                                        data-target="#modal-{{ $order->id }}">
                                                        Ko'rish </a>
                                                    </td> --}}
                                                        </tr>
                                                        <?
                                                                                                        $i++;
                                                                                                        ?>


                                                        <div class="modal fade quick-view-modal-container"
                                                            id="modal-{{ $order->id }}" tabindex="-1" role="dialog"
                                                            aria-hidden="true">
                                                            <div style="max-width: 700px;"
                                                                class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content"
                                                                    style="background-color: #FFFFFF;">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span class="blackcolor"
                                                                                aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="row" id="cartTable"
                                                                                    style="background-color: #ffffff; margin-bottom: 30px;">
                                                                                    <div class="col-12"
                                                                                        style="margin-top: 15px">
                                                                                        <h3 class="blackcolor">Mening
                                                                                            buyurtmam</h3>
                                                                                    </div>
                                                                                    <div class="col-12 blackcolor">

                                                                                        <div class=""
                                                                                            style="display: flex; flex-direction: row; -webkit-box-align: center; align-items: center; border-bottom-width: 0px;  border-color: rgb(244, 244, 244);  margin: 10px 0px 0px; padding-bottom: 10px;">

                                                                                            <img src="{{ $order->product }}"
                                                                                                class="img-fluid"
                                                                                                alt="Product"
                                                                                                style="width: 120px;    height: 80px;    object-fit: contain;    object-position: center center;">
                                                                                            <div
                                                                                                style="flex: 1 1 0%; display: flex; flex-direction: row;">
                                                                                                <span class="blackcolor"
                                                                                                    style="flex: 1 1 0%; font-weight: 600; font-style: normal; font-size: 16px; line-height: 16px; margin-right: 16px; color: #fff"></span>
                                                                                                <div
                                                                                                    style="display: flex; flex-direction: row; -webkit-box-align: center; align-items: center;">
                                                                                                    <span class="blackcolor"
                                                                                                        style="font-size: 16px; line-height: 16px; margin-right: 20px;">1
                                                                                                        шт.</span>
                                                                                                    <span class="blackcolor"
                                                                                                        style="flex: 1 1 0%; font-weight: 600; font-style: normal; line-height: 16px; margin-right: 16px; color: #fff;">9
                                                                                                        990 so'm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row" id="cartTable"
                                                                        style="background-color: #ffffff; margin-bottom: 30px;">
                                                                        <div class="col-12" style="margin-top: 15px">
                                                                            <h3 class="blackcolor">Buyurtmani
                                                                                yetkazib
                                                                                berish ma'lumotlari</h3>
                                                                            <div class="blackcolor">

                                                                                <div class="blackcolor"
                                                                                    style="display: flex;    flex-direction: row;    flex: 1 1 0%;">
                                                                                    <span style="">Ism:</span>
                                                                                    <span
                                                                                        style="position: absolute; right: 0; font-weight: 600; margin-right: 16px;">
                                                                                        Dddddd</span>
                                                                                </div>
                                                                                <div class="blackcolor"
                                                                                    style="display: flex;    flex-direction: row;    flex: 1 1 0%;">
                                                                                    <span style="">Telefon:</span>
                                                                                    <span
                                                                                        style="position: absolute; right: 0; font-weight: 600; margin-right: 16px;">
                                                                                        998913979007</span>
                                                                                </div>
                                                                                <div class="blackcolor"
                                                                                    style="display: flex;    flex-direction: row;    flex: 1 1 0%;">
                                                                                    <span style="">Manzil:</span>
                                                                                    <span
                                                                                        style="position: absolute; right: 0; font-weight: 600; margin-right: 16px;">
                                                                                        Vodil</span>
                                                                                </div>
                                                                                <div class="blackcolor"
                                                                                    style="display: flex;    flex-direction: row;    flex: 1 1 0%;">
                                                                                    <span style="">Buyurtmaga
                                                                                        izoh:</span>
                                                                                    <span
                                                                                        style="position: absolute; right: 0; font-weight: 600; margin-right: 16px;">
                                                                                        -</span>
                                                                                </div>
                                                                                <div class="blackcolor"
                                                                                    style="display: flex;    flex-direction: row;    flex: 1 1 0%;">
                                                                                    <span style="">To’lov
                                                                                        turi:</span>
                                                                                    <span
                                                                                        style="position: absolute; right: 0; font-weight: 600; margin-right: 16px;">
                                                                                        Naqt</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <p class="text-left alert alert-dark">Xech narsa topilmadi</p>
                                @endforelse



                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                        <div class="myaccount-content">
                            <h3 class="blackcolor">Shaxsiy ma'lumotlar</h3>

                            <div class="account-details-form">
                                <form action="{{ route('users.update', \Auth::user()->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-30">
                                            <input class="blackcolor" name="name" id="name"
                                                placeholder="First Name" value="{{ \Auth::user()->name }}"
                                                type="text">
                                        </div>

                                        <div class="col-12 mb-30">
                                            <input class="" value="{{ \Auth::user()->email }}" type="email"
                                                name="email">
                                        </div>

                                        <div class="col-lg-12 col-12 mb-30">
                                            <input class="blackcolor" name="password" minlength="4" id="new-pwd"
                                                placeholder="Yangi parol" type="password">
                                        </div>

                                        <div class="col-lg-12 col-12 mb-30">
                                            <input class="blackcolor" name="password_confirmation" minlength="4"
                                                id="confirm-pwd" placeholder="Yangi parolni qayta kiriting"
                                                type="password">
                                        </div>

                                        <div class="col-12">
                                            <button class="save-change-btn" style="border-radius: 5px;">Saqlash</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
