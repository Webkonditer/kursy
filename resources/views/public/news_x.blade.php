@extends('public.layouts.layout')

@section('content')
	<section id="home">

		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h1>{{ $new->title }}</h1>
					<img class="news_img" height="300"  src="{{ asset('/storage/'.$new->image) }}" alt="...">
					<p>{{ $new->created_at }}</p>
					{!! $new->content !!}
				</div>
				<div class="col-sm">
					<br>
					@forelse($news as $new)
						<ul class="datelenta">
									<li><span class="news_dt">{{ $new->created_at }}</span></li>
									<li><a href="{{$new->link}}" class="">{{ $new->title }}</a></li>
						</ul>
					@empty
						<h3>Новости отсутствуют</h3>
					@endforelse
					{{$news->links()}}
				</div>
			</div>
		</div>
	</section>


@endsection
