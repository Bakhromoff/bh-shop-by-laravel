@extends('admin.app')

@section('ads-active')
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
                        <h1>Управление объявление</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Домой</a></li>
                            <li class="breadcrumb-item"><a href="">Управление
                                    объявление</a></li>
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
                            <h3 class="card-title">Изменить</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group" id="photo">
                                    <img class="img img-thumbnail" src="{{ $ad->getImage() }}" alt=""
                                        width="100">
                                    <label>Изображение (Optional)</label>
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
