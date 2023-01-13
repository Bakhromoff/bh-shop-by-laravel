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
                            <li class="breadcrumb-item"><a href="https://admin.irodaxon-biznes.uz/product">Управление
                                    продукты</a></li>
                            <li class="breadcrumb-item active">Добавить</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Добавить</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if ($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            @endif
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label>Название на русском</label>
                                            <input type="text" name="name_ru" class="form-control " value=""
                                                required="">
                                            <span class="error invalid-feedback"></span>
                                        </div>
                                        <div class="col">
                                            <label>Название на узбекском</label>
                                            <input type="text" name="name_uz" class="form-control" value=""
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label>Описание на русском</label>
                                            <textarea rows="3" name="description_ru" class="form-control" value=""></textarea>
                                        </div>
                                        <div class="col">
                                            <label>Описание на узбекском</label>
                                            <textarea rows="3" name="description_uz" class="form-control" value=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Категории</label>
                                    <select class="form-control" style="width: 100%;" name="category_id" value=""
                                        required="">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->emoji }}
                                                {{ $category->name_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Цена </label>
                                    <input type="number" min="0" name="price" class="form-control" value=""
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="sale">Sale</label>
                                    <input type="checkbox" name="sale" id="sale">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount ?</label>
                                    <input type="datetime-local" name="discount" id="discount">
                                </div>

                                <div class="form-group" id="photo">
                                    <label>Изображение</label>
                                    <input style="border: 0px; padding-left: 0px" type="file" name="image"
                                        class="form-control" value="">
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-success float-right">Сохранить</button>
                                    <a href="https://admin.irodaxon-biznes.uz/product"
                                        class="btn btn-default float-left">Отменить</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
    </div>
@endsection
