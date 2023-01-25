@extends('admin.app')

@section('orders-active')
    active
@endsection


@section('content')
    <div class="content-wrapper" style="min-height: 216.4px;">
        <!-- Main content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Заказы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item active">Заказы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Заказы</h3>
                                <span class="badge badge-light">Количество : {{ $orders->count() }}</span>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>

                                            <th>Дата создания</th>
                                            <th>Пользователи</th>
                                            <th>Статус</th>
                                            <th>Сумма</th>
                                            <th>Статус оплаты</th>
                                            <th style="width: 40px">Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orders as $order)
                                            <tr>

                                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>{{ App\Models\User::where('id', $order->user_id)->first()->name }}
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <select name="order_status" id="" class="form-control">
                                                                <option
                                                                    {{ $order->user_order_status == 0 ? 'selected' : '' }}
                                                                    value="0">Новый заказ
                                                                </option>
                                                                <option
                                                                    {{ $order->user_order_status == 1 ? 'selected' : '' }}
                                                                    value="1">Заказ принят в
                                                                    работу
                                                                </option>
                                                                <option
                                                                    {{ $order->user_order_status == 2 ? 'selected' : '' }}
                                                                    value="2">Заказ
                                                                    отменен
                                                                </option>
                                                                <option
                                                                    {{ $order->user_order_status == 3 ? 'selected' : '' }}
                                                                    value="3">Заказ отправлен
                                                                    клиенту
                                                                </option>
                                                                <option
                                                                    {{ $order->user_order_status == 4 ? 'selected' : '' }}
                                                                    value="4">Заказ
                                                                    доставлен
                                                                </option>
                                                            </select>

                                                        </div>

                                                    </td>

                                                    <td>{{ $order->user_order_summary }} сум</td>

                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <select name="paid_status" id="" class="form-control">
                                                                <option
                                                                    {{ $order->user_paid_status == 0 ? 'selected' : '' }}
                                                                    value="0">Не Оплачен
                                                                </option>
                                                                <option
                                                                    {{ $order->user_paid_status == 1 ? 'selected' : '' }}
                                                                    value="1">Оплачен
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="text-center" style="vertical-align: middle">
                                                        <div class="btn-group">
                                                            <button class="btn btn-sm btn-primary" type="submit">✔
                                                                Изменить</button>
                                                            <button type="button" class="btn btn-outline-info btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#modal-lg_{{ $order->id }}">
                                                                Детали </button>

                                                        </div>
                                                        <!-- /.modal -->


                                                        <!-- /.modal -->
                                                    </td>
                                                </form>

                                            </tr>

                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @foreach ($orders as $order)
                                    <div class="modal fade" id="modal-lg_{{ $order->id }}" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Заказы №11</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 40%">Имя:</td>
                                                                <td>
                                                                    <b>{{ App\Models\User::where('id', $order->user_id)->first()->name }}</b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Телефон:</td>
                                                                <td>
                                                                    {{ $order->user_phone }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Адрес:</td>
                                                                <td>
                                                                    {{ $order->user_address }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Комментарий к заказу:</td>
                                                                <td>
                                                                    no
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Продукты</th>
                                                                <th>Цена</th>
                                                                {{-- <th>Количество</th>
                                                                <th>Итого</th> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($products as $product)
                                                                @if (in_array($product->id, $order->user_order_products))
                                                                    <tr>
                                                                        <td>{{ $product->name_ru }}</td>
                                                                        <td>{{ $product->price }} сум</td>
                                                                        {{-- <td>
                                                                            1
                                                                        </td>
                                                                        <td>
                                                                            87 990 сум
                                                                        </td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Закрыть</button>

                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
