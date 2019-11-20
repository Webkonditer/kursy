<?php
/**
 * @var \App\Pages\Page $page
 */
?>
@extends('admin.layout')

@section('crumbs')<li class="active">Редактирвание слайда</li>@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">

                <h2>Редактирвание слайда</h2>
                <form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.slider.update', $slider)}}" method="POST">

                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>

                    </div>

                  @endif

                    <input type="hidden" name="_method" value="PUT">
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
                                 value="@if(old('title')){{old('title')}} @else{{$slider->title}} @endif"
                                 placeholder="Введите заголовок"
                          />
                      </div>

                      <div class="form-group">
                          <label for="title">Превью</label>
                          <input type="text"
                                 name="preview"
                                 class="form-control"
                                 id="title"
                                 value="@if(old('preview')){{old('preview')}} @else{{$slider->preview}} @endif"
                                 placeholder="Введите превью"
                          />
                      </div>

                      <div class="form-group">
                          <label for="title">Ссылка</label>
                          <input type="text"
                                 name="link"
                                 class="form-control"
                                 id="title"
                                 value="@if(old('link')){{old('link')}} @else{{$slider->link}} @endif"
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
