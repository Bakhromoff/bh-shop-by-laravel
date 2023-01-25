@extends('admin.app')

@section('users-active')
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
                        <h1>Пользователи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
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
                                <h3 class="card-title">Пользователи</h3>
                                <span class="badge badge-light">Количество : 12</span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Дата создания</th>
                                            <th>Название</th>
                                            <th>Почта</th>
                                            <th>Телефон</th>
                                            <th>Кол-во заказов</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td class="text-center">{{ $user->created_at }}</td>
                                                <td class="text-center">{{ $user->name }}</td>
                                                <td class="text-center">{{ $user->email }}</td>
                                                <td class="text-center">
                                                    @if ($user->orders)
                                                        {{ $user->orders->last()->user_phone }}
                                                    @else
                                                        xxx xx xx
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($user->orders)
                                                        {{ $user->orders->count() }}
                                                    @else
                                                        {{ 0 }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
