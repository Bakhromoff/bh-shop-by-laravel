@extends('admin.app')

@section('messages-active')
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
                        <h1>Жалоба</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item active">Жалоба</li>
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
                                <h3 class="card-title">Жалоба</h3>
                                <span class="badge badge-light">Количество : {{ $messages->count() }}</span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Дата создания</th>
                                            <th>Имя</th>
                                            <th>Эмаил</th>
                                            <th>Название</th>
                                            <th>Жалоба</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($messages as $message)
                                            <tr class="text-center">
                                                <td>{{ $message->created_at }}</td>
                                                <td>{{ $message->customerName }}</td>
                                                <td>{{ $message->customerEmail }}</td>
                                                <td>{{ $message->contactSubject }}</td>
                                                <td>{{ $message->contactMessage }}</td>
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
