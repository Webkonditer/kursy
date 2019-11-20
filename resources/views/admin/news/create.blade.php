@extends('admin.layout')
@section('crumbs')<li class="active">Создать новость</li>@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
            {{--<div class="box-header with-border">--}}
            {{--<h3 class="box-title">Quick Example</h3>--}}
            {{--</div>--}}
            {{--<!-- /.box-header -->--}}
            <!-- form start -->
                <h2> Создание новости</h2>
                <form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.news.store') }}" method="POST">

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
                          <label for="title">Адрес новости. Например: visit_posla_indii_v_hram</label>
                          <input type="text"
                                 name="link"
                                 class="form-control"
                                 id="title"
                                 value="{{old('link')}}"
                                 placeholder="Адрес новости латиницей без пробелов"
                          />
                      </div>

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
                            <label for="description">Текст новости</label>
                            <textarea id="content"
                                      name="content"
                                      rows="10"
                                      cols="80"
                                      class="js-editor-enabled">{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group">
                           <label for="meta_title">Мета: Заголовок</label>
                           <input type="text"
                                  name="meta_title"
                                  class="form-control"
                                  id="meta_title"
                                  value="{{ old('content') }}"
                                  placeholder="Введите meta title"
                           />
                       </div>
                       <div class="form-group">
                           <label for="meta_description">Мета: Описание</label>
                           <input type="text"
                                  name="meta_description"
                                  class="form-control"
                                  id="meta_description"
                                  value="{{ old('content') }}"
                                  placeholder="Введите meta description"
                           />
                       </div>

                       <div class="form-group">
                           <label for="meta_keywords">Мета: Ключевые слова</label>
                           <input type="text"
                                  name="meta_keywords"
                                  class="form-control"
                                  id="meta_keywords"
                                  value="{{ old('content') }}"
                                  placeholder="Введите meta keywords"
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
