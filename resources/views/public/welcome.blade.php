@extends('public.layouts.layout')

@section('content')
	<section id="home">
		<div class="container">
			<div class="row">
		    <div class="col-sm-8">
					<div class="container-fluid p-0">
						@include('public.slider')
					</div>
		    </div>
		    <div class="col-sm">
		      Одна из трёх колонок
		    </div>
			</div>
  	</div>
	</section>

	<section>
		<div class="container">
			<h2 style="text-align:center">Новости</h2>
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
  	</div>

	</section>

	<section>

		<div class="container">
			<div class="row">
				@if (!empty($quote))
					<div class="col-xs-12 col-sm-12 col-md-4 pb-sm-20">
						@include('public.widgets.quote-of-the-day', [
                            'quote' => $quote,
                        ])
					</div>
				@endif



        {{--
				@if (!$events->isEmpty())
					<div class="col-xs-12 col-sm-12 col-md-4 pb-sm-20">
						@include('public.widgets.closest-events', [
							'events' => $events,
						])
					</div>
				@endif
        --}}

			</div>
		</div>
	</section>
	<section class="divider parallax layer-overlay overlay-dark-8"  data-bg-img="/images/sp/photo7.jpg">
		<div class="container">
			<div class="section-content text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-theme-colored mt-0">Статьи и видео</h2>
						<h3 class="text-white">Об образовании и не только</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container" data-margin-top="-20px">
			<div class="row">
				@if (!empty($articles))
					<div class="col-md-6">
						@include('public.widgets.latest-articles', [
							'articles' => $articles,
						])
					</div>
				@endif

				<div class="col-md-6">

					<p><h3 class="widget-title line-bottom">Последние <a href="/resources/videos" class="text-theme-colored">вебинары:</a></h3></p>
          {{--videos
					@forelse ($videos as $key=>$data)
					<div class="col-md-6">
						<article class="post clearfix mb-30 bg-lighter">
							<div class="entry-header">
								<iframe allowfullscreen="" height="240" src="{{$data->video_uri}}" width="360"></iframe>
							</div>
							<div class="entry-content">
								<div class="entry-meta media mt-0 no-bg no-border">
									<div class="media-body">
										<h3 align="center" class="title">{{$data->title}}</h3>
									</div>
								</div>
								<p>
									<i class="fa fa-user mr-5 text-theme-colored"></i>
									<strong>Автор: </strong>{{$data->autor}}
								</p>
								<p>
									<i class="fa fa-pencil mr-5 text-theme-colored"></i>
									<strong>Описание: </strong>{{$data->description}}
								</p>
								<p>
									<i class="fa fa-edge mr-5 text-theme-colored"></i>
									<strong>Сайт: </strong>
									<a class="text-theme-colored" href="{{$data->site_link}}" target="_blank">
															{{$data->site_link}}
														</a>
								</p>
								<div class="clearfix">&nbsp;</div>
							</div>
						</article>
					</div>
					@empty
					<div></div>
					@endforelse
          --}}
				</div>
			</div>
		</div>
	</section>
	<section class="divider parallax layer-overlay overlay-dark-8"  data-bg-img="/images/sp/photo4.jpg">
		<div class="container">
			<div class="section-content text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-theme-colored mt-0">Рекомендуем познакомиться с проектами</h2>
						<h3 class="text-white">Мы тщательно подходим к выбору проектов, которые предлагаем обществу вайшнавов</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="bg-silver-light">
			<br>
			<br>
			<div class="container">
				<div class="row multi-row-clearfix">
					<div class="col-md-12">
						<div class="owl-carousel-4col" data-dots="true" data-duration="10000">

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl1.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/about/stages">Серия курсов "Бхакти-лата"</a></h4>
										<p>Серия образовательных курсов для помощи преданным в первые годы их духовного пути.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/about/stages">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl2.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/eternal">Вечные ответы</a></h4>
										<p>Вводный курс для тех, кто только знакомится с Сознанием Кришны. Внеконфессионален, создан на основе Бхагавад-гиты.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/eternal">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl3.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/idc">Ученик в ИСККОН</a></h4>
										<p>Короткий курс, предназначенный укрепить связь преданных со Шрилой Прабхупадой и созданной им организацией.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/idc">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl4.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/leaders">Курс подготовки лидеров и менеджеров</a></h4>
										<p>Ретрит-курс для обучения преданных навыкам и ценностям лидерства.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/leaders">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl4.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/bs">Саманья-бхакти-шастры</a></h4>
										<p>Курс бхакти-шастр, предназначенный углубить понимание структуры и логики Священных писаний.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/bs">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl5.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/ttc1">Курс подготовки учителей, часть 1</a></h4>
										<p>Базовая подготовка преподавателей, проповедников, групп духовного общения.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/ttc1">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl2.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/ttc2-1">Курс подготовки учителей, часть 2 - практикум</a></h4>
										<p>Тренировка навыков интерактивного преподавания, полученных в первой части курса.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/ttc2-1">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl1.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/ttc2-2">Курс подготовки учителей, часть 2 - углубление</a></h4>
										<p>Углубленное изучение образовательного процесса, создания системы образования.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/ttc2-2">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl3.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/ttc2-3">Курс подготовки учителей, часть 2 - дискуссии</a></h4>
										<p>Обучение проведению менеджериальных собраний и созданию команд.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/ttc2-3">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl4.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/mission">Размышления над миссией Шрилы Прабхупады</a></h4>
										<p>Короткий курс, призванный углубить понимание преданных о широте и глубине миссии ИСККОН.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/mission">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl2.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/gbc">Джи-Би-Си колледж</a></h4>
										<p>Единая меужднародная программа обучения лидеров всех уровней - от лидеров ятр до членов совета Джи-Би-Си.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/gbc">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl1.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="/mentor">Базовый курс подготовки наставников</a></h4>
										<p>Дает понимание наставничества и инструменты развития системы духовной заботы.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="/mentor">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>


							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl3.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="http://sk.mockt.ru" target="_blank">Семейный комитет ЦОСКР</a></h4>
										<p>Комитет помогает преданным в различных сложных социально-бытовых вопросах. Подробнее на их сайте.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="http://sk.mockt.ru" target="_blank">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="campaign bg-silver-light maxwidth500 mb-30">
									<div class="thumb">
										<img src="/images/abl4.jpg" alt="" class="img-fullwidth">
										<div class="campaign-overlay"></div>
									</div>
									<div class="campaign-details bg-white clearfix p-15 pt-10 pb-10">
										<h4 class="font-weight-700 mt-0"><a href="http://www.krishnaland.ru/" target="_blank">Комитет вайшнавских поселений от ЦОСКР</a></h4>
										<p>Комитет координирует и помогает вайшнавским поселениях в их развитии.</p>
										<div class="campaign-bottom border-top clearfix mt-20">
											<div class="text-center"><a class="btn btn-sm btn-theme-colored font-weight-600 font-11 mt-10" href="http://www.krishnaland.ru/" target="_blank">Подробнее</a></div>
										</div>
									</div>
								</div>
							</div>



						</div>
					</div>
				</div><br><br>
			</div></div>
	</section>
	<section class="divider parallax layer-overlay overlay-dark-8"  data-bg-img="/images/sp/photo6.jpg">
		<div class="container">
			<div class="section-content text-center">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-theme-colored mt-0">Мы будем рады сотрудничеству с Вами!</h2>
						<h3 class="text-white">Мы рады сотрудничать с преподавателями, а также лидерами общин и проектов ИСККОН.</h3>
						<h3 class="text-white">Помимо этого Вы можете помочь нам в нашей работе или поддержать нас финансово.</h3>
						<br>
						<div class="text-center"><a class="btn btn-xl btn-theme-colored" href="/cooperation/participate">Давайте сотрудничать!</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-white-f7">
		<div class="container pb-0">
			<div class="section-title">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="text-center">
							<h2 class="title">Последние фотографии с курсов:</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="instafeed2" class="instagram-feed-carousel" data-userid="5893122485" data-accesstoken="5893122485.1677ed0.020d2c203bf94144a383bb9b6437394a" data-limit="12" data-resolution="low_resolution"></div>
		</div>
	</section>
@endsection
