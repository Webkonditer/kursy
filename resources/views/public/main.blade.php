@extends('public.layouts.layout')

@section('content')
	<section id="home">
		<div class="container">
			<h2 style="text-align:center">О ГЛАВНОМ</h2>


			<div class="row">
			    <div class="col-sm-12">
			        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

			            <tbody>
			                @forelse($m_pages  as $m_page)
			                <tr role="row" >
			                    <td style="width:120px"><img height="80"  src="{{ asset('/storage/'.$m_page->image) }}" alt="..."></td>
			                    <td style="vertical-align:middle">
														{{ $m_page->created_at }}
														<a href="pages/{{$m_page->link}}" class=""><h3 class="news_h3">{{ $m_page->title }}</h3></a>
														{{ $m_page->preview }}...
													</td>
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
			                            {{$m_pages->links()}}
			                        </li> .
			                    </td>
			                </tr>
			            </tfoot>
			        </table>
			    </div>
			</div>

  	</div>
	</section>


@endsection
