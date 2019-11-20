@extends('admin.layout')

@section('crumbs')<li  class="active">Страницы</li>
@endsection

@section('content')
<h2>Страницы:</h2>

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Добавить страницу</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Миниатюра
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        О главном
                    </th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Название: активируйте, чтобы изменить сортировку">
                        Позиция
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
                @forelse($pages  as $page)
                <tr role="row" >
                    <td><img height="40"  src="{{ asset('/storage/'.$page->image) }}" alt="..."></td>
                    <td style="vertical-align:middle">{{ $page->on_main }}</td>
                    <td style="vertical-align:middle">{{ $page->position }}</td>
                    <td style="vertical-align:middle">{{ $page->title }}</td>
                    <td style="vertical-align:middle">{{ $page->created_at }}</td>
                    <td style="vertical-align:middle"><a href="{{ route('admin.pages.edit', ['id' => $page->id]) }}"><i class="icon glyphicon glyphicon-pencil"></i></a></td>
                    <td style="vertical-align:middle"><a onclick="return confirm ('Удалить эту страницу?')" href="{{ route('admin.page.delete', ['id' => $page->id]) }}"><i class="icon glyphicon glyphicon-remove"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td><h2>Страницы отсутствуют</h2>
                    </td>
                </tr>

                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <li class="pagination pull-right">
                            {{$pages->links()}}
                        </li> .
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
