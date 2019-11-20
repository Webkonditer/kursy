@extends('public.layouts.layout')

@section('content')
	<section id="home">
		<div class="container">
			<h2 style="text-align:center">Новости</h2>


			<div class="row">
			    <div class="col-sm-12">
			        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">

			            <tbody>
			                @forelse($news  as $new)
			                <tr role="row" >
			                    <td><img height="40"  src="{{ asset('/storage/'.$new->image) }}" alt="..."></td>
			                    <td style="vertical-align:middle">
														{{ $new->created_at }}
														<a href="news/{{$new->link}}" class=""><h3 class="news_h3">{{ $new->title }}</h3></a>
														{{ $new->preview }}...
													</td>
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

  	</div>
	</section>


@endsection
