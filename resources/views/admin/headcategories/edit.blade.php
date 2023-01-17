@extends('admin.app')

@section('categories-active')
    active
@endsection

@section('content')
    <div class="content-wrapper" style="min-height: 354px;">
        <!-- Main content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Управление главние категория</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item"><a href="">Управление главние
                                    категория</a></li>
                            <li class="breadcrumb-item active">Изменить</li>
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
                            <h3 class="card-title">Изменить</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if ($errors->any())
                                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                            @endif
                            <form action="{{ route('headcategories.update', $headcategory->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Название на русском</label>
                                    <input type="text" name="name_ru" class="form-control "
                                        value="{{ old('name', $headcategory->name_ru) }}" required="">
                                    <span class="error invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label>Название на узбекском</label>
                                    <input type="text" name="name_uz" class="form-control"
                                        value="{{ old('name', $headcategory->name_uz) }}" required="">
                                </div>
                                <div class="form-group">
                                    <label>Emoji</label>
                                    <input type="text" name="emoji" class="form-control"
                                        value="{{ old('name', $headcategory->emoji) }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success float-right">Сохранить</button>
                                    <a href="" class="btn btn-default float-left">Отменить</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
@endsection
