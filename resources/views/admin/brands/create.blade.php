@extends('admin.app')

@section('brands-active')
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
                        <h1>Управление бренды</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item"><a href="">Управление
                                    бренды</a></li>
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
                            <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name="name" class="form-control" value="" required="">
                                </div>
                                <div class="form-group" id="photo">
                                    <label>Изображение</label>
                                    <input style="border: 0px; padding-left: 0px" type="file" name="image"
                                        class="form-control" value="">
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
