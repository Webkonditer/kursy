@extends('admin.layout')

@section('crumbs')<li  class="active">Новости</li>
@endsection

@section('content')
<h2>Новости:</h2>

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Добавить новость</a>
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
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Дата/время
                    </th>
                    <th class="action" style="width:30px !important;"></th>
                    <th class="action" style="width:30px !important;"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($news  as $new)
                <tr role="row" >
                    <td style="vertical-align:middle">{{ $new->id }}</td>
                    <td><img height="40"  src="{{ asset('/storage/'.$new->image) }}" alt="..."></td>
                    <td style="vertical-align:middle">{{ $new->title }}</td>
                    <td style="vertical-align:middle">{{ $new->created_at }}</td>
                    <td style="vertical-align:middle"><a href="{{ route('admin.news.edit', ['id' => $new->id]) }}"><i class="icon glyphicon glyphicon-pencil"></i></a></td>
                    <td style="vertical-align:middle"><a onclick="return confirm ('Удалить эту новость?')" href="{{ route('admin.slider.delete', ['id' => $new->id]) }}"><i class="icon glyphicon glyphicon-remove"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td><h2>Новости отсутствуют</h2>
                    </td>
                </tr>

                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <li class="pagination pull-right">
                            {{$news->links()}}
                        </li> .
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
