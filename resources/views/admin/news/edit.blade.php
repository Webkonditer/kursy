<?php
/**
 * @var \App\Pages\Page $page
 */
?>
@extends('admin.layout')

@section('crumbs')<li class="active">Редактирвание новости</li>@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">

                <h2>Редактирвание новости</h2>
                <form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.news.update', $news)}}" method="POST">

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
                          <label for="title">Адрес новости. Например: visit_posla_indii_v_hram</label>
                          <input type="text"
                                 name="link"
                                 class="form-control"
                                 id="title"
                                 value="@if(old('link')){{old('link')}} @else{{$news->link}} @endif"
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
                                   value="@if(old('title')){{old('title')}} @else{{$news->title}} @endif"
                                   placeholder="Введите заголовок"
                            />
                        </div>

                        <div class="form-group">
                            <label for="title">Превью</label>
                            <input type="text"
                                   name="preview"
                                   class="form-control"
                                   id="title"
                                   value="@if(old('preview')){{old('preview')}} @else{{$news->preview}} @endif"
                                   placeholder="Введите превью"
                            />
                        </div>

                        <div class="form-group">
                            <label for="description">Текст новости</label>
                            <textarea id="content"
                                      name="content"
                                      rows="10"
                                      cols="80"
                                      class="js-editor-enabled">@if(old('content')){{old('content')}} @else{{$news->content}} @endif</textarea>
                        </div>

                        <div class="form-group">
                           <label for="meta_title">Мета: Заголовок</label>
                           <input type="text"
                                  name="meta_title"
                                  class="form-control"
                                  id="meta_title"
                                  value="@if(old('meta_title')){{old('meta_title')}} @else{{$news->meta_title}} @endif"
                                  placeholder="Введите meta title"
                           />
                       </div>
                       <div class="form-group">
                           <label for="meta_description">Мета: Описание</label>
                           <input type="text"
                                  name="meta_description"
                                  class="form-control"
                                  id="meta_description"
                                  value="@if(old('meta_description')){{old('meta_description')}} @else{{$news->meta_description}} @endif"
                                  placeholder="Введите meta description"
                           />
                       </div>

                       <div class="form-group">
                           <label for="meta_keywords">Мета: Ключевые слова</label>
                           <input type="text"
                                  name="meta_keywords"
                                  class="form-control"
                                  id="meta_keywords"
                                  value="@if(old('meta_keywords')){{old('meta_keywords')}} @else{{$news->meta_keywords}} @endif"
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
