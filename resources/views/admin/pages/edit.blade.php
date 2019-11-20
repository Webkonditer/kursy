<?php
/**
 * @var \App\Pages\Page $page
 */
?>
@extends('admin.layout')

@section('crumbs')<li class="active">Редактирвание страницы</li>@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">

                <h2>Редактирвание страницы</h2>
                <form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.pages.update', $page)}}" method="POST">

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
                          <label for="title">О главном</label>
                          <div class="checkbox">
                              <label for="on_main">
                                  <input id="on_main" name="on_main" @if($page->on_main == 'Да')checked="checked"@endif type="checkbox"> Будет показываться в разделе о главном
                              </label>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="title">Позиция в разделе о главном</label>
                          <input type="text"
                                 name="position"
                                 class="form-control"
                                 id="position"
                                 value="@if(old('position')){{old('position')}} @else{{$page->position}} @endif"
                                 placeholder="Позиция на главной цифрой"
                          />
                      </div>

                      <div class="form-group">
                          <label for="title">Адрес страницы. Например: visit_posla_indii_v_hram</label>
                          <input type="text"
                                 name="link"
                                 class="form-control"
                                 id="title"
                                 value="@if(old('link')){{old('link')}} @else{{$page->link}} @endif"
                                 placeholder="Адрес страницы латиницей без пробелов"
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
                                   value="@if(old('title')){{old('title')}} @else{{$page->title}} @endif"
                                   placeholder="Введите заголовок"
                            />
                        </div>

                        <div class="form-group">
                            <label for="title">Превью</label>
                            <input type="text"
                                   name="preview"
                                   class="form-control"
                                   id="title"
                                   value="@if(old('preview')){{old('preview')}} @else{{$page->preview}} @endif"
                                   placeholder="Введите превью"
                            />
                        </div>

                        <div class="form-group">
                            <label for="description">Текст страницы</label>
                            <br><a href="/admin/images" target="_blank">Выбрать изображения для страницы</a>
                            <textarea id="content"
                                      name="content"
                                      rows="10"
                                      cols="80"
                                      class="js-editor-enabled">@if(old('content')){{old('content')}} @else{{$page->content}} @endif</textarea>
                        </div>

                        <div class="form-group">
                           <label for="meta_title">Мета: Заголовок</label>
                           <input type="text"
                                  name="meta_title"
                                  class="form-control"
                                  id="meta_title"
                                  value="@if(old('meta_title')){{old('meta_title')}} @else{{$page->meta_title}} @endif"
                                  placeholder="Введите meta title"
                           />
                       </div>
                       <div class="form-group">
                           <label for="meta_description">Мета: Описание</label>
                           <input type="text"
                                  name="meta_description"
                                  class="form-control"
                                  id="meta_description"
                                  value="@if(old('meta_description')){{old('meta_description')}} @else{{$page->meta_description}} @endif"
                                  placeholder="Введите meta description"
                           />
                       </div>

                       <div class="form-group">
                           <label for="meta_keywords">Мета: Ключевые слова</label>
                           <input type="text"
                                  name="meta_keywords"
                                  class="form-control"
                                  id="meta_keywords"
                                  value="@if(old('meta_keywords')){{old('meta_keywords')}} @else{{$page->meta_keywords}} @endif"
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
