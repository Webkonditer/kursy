@extends('admin.layout')

@section('crumbs')<li  class="active">Изображения</li>
@endsection

@section('content')
<h2>Изображения:</h2>

<form role="form" name="edit" enctype="multipart/form-data" action="{{ route('admin.images.store') }}" method="POST">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <label for="meta_keywords">Загрузка нового изображения</label>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box-body">

      <div class="row">
          <div class="col-sm-12">

              <input type="file" name="image" id="image" style="display:inline">

                <input type="text"
                       name="description"
                       class=""
                       id="title"
                       value="{{old('description')}}"
                       placeholder="Описание"
                />
                <button type="submit" name="submit" value="1" class="btn btn-primary  btn-sm">Загрузить</button>
            </div>

        </div>
    </div>
</form>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
                <tr role="row">

                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                      Изображение
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Описание
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Адрес
                    </th>
                    <th class="action" style="width:30px !important;"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($images  as $image)
                <tr role="row" >
                    <td><img height="100"  src="{{ asset('/storage/'.$image->image) }}" alt="..."></td>
                    <td style="vertical-align:middle">{{ $image->description }}</td>
                    <td style="vertical-align:middle">{{ asset('/storage/'.$image->image) }}</td>
                    <td style="vertical-align:middle"><a onclick="return confirm ('Удалить это изображение?')" href="{{ route('admin.images.delete', ['id' => $image->id]) }}"><i class="icon glyphicon glyphicon-remove"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td><h2>Изображения отсутствуют</h2>
                    </td>
                </tr>

                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <li class="pagination pull-right">
                            {{$images->links()}}
                        </li> .
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
