@extends('admin.app')

@section('info-active')
    active
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
    <!-- Content Wrapper. Contains page content -->
    @if ($info)
        <div class="content-wrapper container">
            <form action="{{ route('informations.update', $info->id) }}" method="POST">
                @method('PUT')
                @csrf
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Информация о сайте</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="">Домой</a>
                                    </li>
                                    <li class="breadcrumb-item active">Информация о сайте</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card pb-3">
                                <div class="card-header">
                                    <h3 class="card-title">Контакт</h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Data table -->
                                    <table id="dataTable"
                                        class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                                        role="grid" aria-describedby="dataTable_info">
                                        <thead>
                                            <tr>
                                                <th>Тел</th>
                                                <th>Емаил</th>
                                                <th>Адрес Уз</th>
                                                <th>Адрес Ру</th>
                                                <th>Купон скидка</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input class="form-control" type="text" name="phone"
                                                        value="{{ old('name', $info->phone) }}" placeholder="Phone">
                                                </td>
                                                <td><input class="form-control" type="text" name="email"
                                                        value="{{ old('name', $info->email) }}" placeholder="Email">
                                                </td>
                                                <td><input class="form-control" type="text"
                                                        value="{{ old('name', $info->address_uz) }}" name="address_uz"
                                                        placeholder="Address"></td>
                                                <td><input class="form-control" type="text"
                                                        value="{{ old('name', $info->address_ru) }}" name="address_ru"
                                                        placeholder="Адрес"></td>
                                                <td><input type="text" class="form-comntrol w-100"
                                                        value="{{ old('name', $info->coupon) }}" name="coupon"
                                                        placeholder="Coupon code"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-2 offset-10">
                                    <button class="btn btn-primary px-4" type="submit">Сохранить</button>
                                </div>
                            </div>

                            <!-- /.row -->
                </section>
            </form>
        </div>
    @else
        <div class="content-wrapper container">
            <form action="{{ route('informations.store') }}" method="POST">
                @csrf
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Информация о сайте</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="">Домой</a>
                                    </li>
                                    <li class="breadcrumb-item active">Информация о сайте</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card pb-3">
                                <div class="card-header">
                                    <h3 class="card-title">Контакт</h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Data table -->
                                    <table id="dataTable"
                                        class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                                        role="grid" aria-describedby="dataTable_info">
                                        <thead>
                                            <tr>
                                                <th>Тел</th>
                                                <th>Емаил</th>
                                                <th>Адрес Уз</th>
                                                <th>Адрес Ру</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input class="form-control" type="text" name="phone"
                                                        placeholder="Phone">
                                                </td>
                                                <td><input class="form-control" type="text" name="email"
                                                        placeholder="Email">
                                                </td>
                                                <td><input class="form-control" type="text" name="address_uz"
                                                        placeholder="Address"></td>
                                                <td><input class="form-control" type="text" name="address_ru"
                                                        placeholder="Адрес"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card-header">
                                            <h3 class="card-title">Адрес доставка Уз</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" class="form-comntrol w-100" name="shipping_address_uz"
                                                placeholder="Shipping address">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-header">
                                            <h3 class="card-title">Адрес доставка Ру</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" class="form-comntrol w-100" name="shipping_address_ru"
                                                placeholder="Shipping address">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-header">
                                            <h3 class="card-title">Купон скидка</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type="text" name="coupon" class="form-comntrol w-100"
                                                placeholder="Coupon code">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2 offset-10">
                                    <button class="btn btn-primary px-4" type="submit">Сохранить</button>
                                </div>
                            </div>

                            <!-- /.row -->
                </section>
            </form>
        </div>
    @endif

    <!-- /.content-wrapper -->
@endsection
