@extends('admin.layout')
@section('crumbs')<li class="active">Новый слайд</li>@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
            {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title">Quick Example</h3>--}}
            {{--</div>--}}
            {{--<!-- /.box-header -->--}}
            <!-- form start -->
                <h2> Создание нового слайда</h2>
                <form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.slider.store') }}" method="POST">

                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                          @endforeach
                        </ul>

                      </div>

                    @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputFile">Загрузите изображение с компьютера</label>
                          <input type="file" name="image" id="exampleInputFile">
                        </div>

                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   id="title"
                                   value="{{old('title')}}"
                                   placeholder="Введите заголовок"
                            />
                        </div>

                        <div class="form-group">
                            <label for="title">Превью</label>
                            <input type="text"
                                   name="preview"
                                   class="form-control"
                                   id="title"
                                   value="{{old('preview')}}"
                                   placeholder="Введите превью"
                            />
                        </div>

                        <div class="form-group">
                            <label for="title">Ссылка</label>
                            <input type="text"
                                   name="link"
                                   class="form-control"
                                   id="title"
                                   value="{{old('link')}}"
                                   placeholder="Введите ссылку"
                            />
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" value="1" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
