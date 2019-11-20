@extends('admin.layout')

@section('crumbs')<li  class="active">Слайдер</li>
@endsection

@section('content')
<h2>Слайдер:</h2>

@isset($path)  <a href="{{ asset('/storage/' . $path) }}">Документ</a>
@endisset

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Добавить слайд</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Id
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Миниатюра
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Заголовок
                    </th>

                    <th class="action" style="width:30px !important;"></th>
                    <th class="action" style="width:30px !important;"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($sliders  as $slider)
                <tr role="row" >
                    <td style="vertical-align:middle">{{ $slider->id }}</td>
                    <td><img height="40"  src="{{ asset('/storage/'.$slider->image) }}" alt="..."></td>
                    <td style="vertical-align:middle">{{ $slider->title }}</td>
                    <td style="vertical-align:middle"><a href="{{ route('admin.slider.edit', ['id' => $slider->id]) }}"><i class="icon glyphicon glyphicon-pencil"></i></a></td>
                    <td style="vertical-align:middle"><a onclick="return confirm ('Удалить этот слайд?')" href="{{ route('admin.slider.delete', ['id' => $slider->id]) }}"><i class="icon glyphicon glyphicon-remove"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td><h2>Слайды отсутствуют</h2>
                    </td>
                </tr>

                @endforelse
            </tbody>


        </table>
    </div>
</div>
@endsection
