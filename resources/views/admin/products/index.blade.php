@extends('admin.app')

@section('products-active')
    active
@endsection


@section('content')
    <div class="content-wrapper" style="min-height: 234px;">
        <!-- Main content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Управление продукты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="https://admin.irodaxon-biznes.uz/home">Домой</a></li>
                            <li class="breadcrumb-item active">Управление продукты</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Продукты</h3>
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                Добавить </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Data table -->
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="dataTable"
                                            class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg no-footer"
                                            role="grid" aria-describedby="dataTable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="ID: activate to sort column descending"
                                                        style="width: 16.875px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Название на русском: activate to sort column ascending"
                                                        style="width: 159.475px;">Название на русском</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Название на узбекском: activate to sort column ascending"
                                                        style="width: 161.825px;">Название на узбекском</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Цена: activate to sort column ascending"
                                                        style="width: 40.2px;">Цена</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Изображение: activate to sort column ascending"
                                                        style="width: 128.925px;">Изображение</th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Категории: activate to sort column ascending"
                                                        style="width: 120.6px;">Категории</th>
                                                    <th class="w-25 sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Действия: activate to sort column ascending"
                                                        style="width: 253.3px;">Действия</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @forelse ($products as $product)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $i++ }}</td>
                                                        <td>{{ $product->name_ru }}</td>
                                                        <td>{{ $product->name_uz }}</td>
                                                        <td>{{ $product->price }} sum</td>
                                                        <td><a target="_blank"
                                                                href="{{ $product->getImage() }}">{{ $product->image }}</a>
                                                        </td>
                                                        <td>{{ $product->category->emoji }}
                                                            {{ $product->category->name_ru }}</td>

                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <a href="{{ route('products.edit', $product->id) }}"
                                                                    type="button" class="btn btn-info btn-sm">
                                                                    Редактировать</a>
                                                                <form
                                                                    action="{{ route('products.destroy', $product->id) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Tasdiqlaysizmi ?')">
                                                                        Удалить</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <div class="row py-8">
                                                        <div class="col-8 offset-2 container">
                                                            <h4 class="alert alert-danger">No data yet</h4>
                                                        </div>
                                                    </div>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="container d-flex justify-content-between">
                                    <div class="">
                                        <div class="dataTables_info" id="dataTable_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of {{ $products->count() }} entries</div>
                                    </div>

                                    <div class="d-flex">
                                        {!! $products->links() !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        <!-- /.content -->
    </div>
@endsection
