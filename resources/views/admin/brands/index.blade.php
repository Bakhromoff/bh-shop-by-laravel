@extends('admin.app')

@section('brands-active')
    active
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Управление объявление</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a>
                            </li>
                            <li class="breadcrumb-item active">Управление объявление</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @if ($errors->has('delete'))
                <div class="container">
                    <h5 class="alert alert-danger" role="alert">{{ $errors->first() }}</h5>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">объявление</h3>
                            <a href="{{ route('brands.create') }}" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                Добавить </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Data table -->
                            <table id="dataTable"
                                class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg"
                                role="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Фото</th>
                                        <th class="w-25">Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td><img class="img img-thumbnail" src="{{ $brand->getImage() }}" alt=""
                                                    width="100"></td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('brands.edit', $brand->id) }}" type="button"
                                                        class="btn btn-info btn-sm">
                                                        Редактировать</a>
                                                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Tasdiqlaysizmi ?')">
                                                            Удалить</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.row -->
        </section>
        <!-- /.content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
