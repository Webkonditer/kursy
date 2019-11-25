@extends('public.layouts.layout')

@section('content')
	<section id="home">
		<div class="container">
			<div class="row">
		    <div class="col-sm-9">
					<div class="container-fluid p-0">
						@include('public.slider')
					</div>
		    </div>
		    <div class="col-sm-3">
					<form>
						<div class="box">
						  <div class="container-1">
						      <input type="search" id="search" placeholder="Поиск..." />
									<span class="icon"><i class="fa fa-search"></i></span>
						  </div>
						</div>
					</form>
					<div class="box_x">
						<div class="about_main">
							О ГЛАВНОМ
						</div>
						<a class="read_all" href="/main">
							Читать все
						</a>
					</div>
					<div class="">
						@forelse ($m_pages as $m_page)
								<div class="about_main_box">
									<img style="width: 100%; height: 100%;" src="{{ asset('/storage/'.$m_page->image) }}"  class="rev-slidebg" >
									<div class="m_pages_tytle">{{$m_page->title}}</div>
									<a href="pages/{{$m_page->link}}" class="m_pages_shadow"></a>
								</div>
						@empty
							<h4>Сообщения отсутствуют</h4>
						@endforelse
					</div>
		    </div>
			</div>
  	</div>
	</section>

	<section>
		<div class="container">
			<h2 style="text-align:center; color: #333;">Новости</h2>
			<div class="row">
					@forelse ($news as $new)
						<div class="col-sm-6">
							<div class="news">
								<img style="width: 100%; height: 100%;" src="{{ asset('/storage/'.$new->image) }}"  class="rev-slidebg" >
								<div class="news_tytle">{{$new->title}}</div>
								<div class="news_date">{{$new->created_at}}</div>
								<a href="news/{{$new->link}}" class="news_shadow"></a>
							</div>
						</div>
					@empty
						<h2>Новости отсутствуют</h2>
					@endforelse
			</div>
			<div class="row">
				<div class="" style="text-align: center; padding-top: 10px;">
					<a class="all_news" href="/news">
						Смотреть все новости
					</a>
				</div>
			</div>
  	</div>
	</section>

@endsection
