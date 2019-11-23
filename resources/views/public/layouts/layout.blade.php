<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ url('css/public.css?ver=0.3') }}" rel="stylesheet" type="text/css">

    <script src="{{ url('js/public.js') }}"></script>

    <script charset="UTF-8" src="" async></script>
    <script type="text/javascript" src="//vk.com/js/api/share.js?93"></script>
</head>
<body class="boxed-layout pb-40 pt-sm-0" >
    {{--{!! $main->asUl() !!}--}}
    {{--{!! $crumbs->asUl() !!}--}}
    <div id="wrapper" class="clearfix">

        <!-- Header -->

        <header id="header" class="header">
            <div class="header-top xs-text-center">
                <div class="container">
                    <div class="row" style="background-image: url(/images/header/art1.png)">
                      <div class="col-md-6" style="overflow:visible">
                        <img src="/images/header/COSKR1.png" />
                      </div>
                      <div class="col-md-6" style="overflow:visible">
                        <img src="/images/header/Prabhupada1.png" />
                      </div>
                    </div>

                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest" style="z-index: 1000;">
                    <div class="container">
                        <nav id="menuzord" class="menuzord default bg-lightest menuzord-responsive shad">
                            <a class="menuzord-brand pull-left flip xs-pull-center mt-10" href="/" style="border-right: 1px solid black">
                                <img src="{{ url('/images/header/home1.png') }}" alt="">
                            </a>
                            @include('public.navigation.menuzord-menu')
                        </nav>
                    </div>
                </div>
            </div>
        </header>
{{-- $dura --}}
        <!-- Start main-content -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer pb-0 bg-black-111">
            <div class="container pt-70 pb-40">
                <div class="row multi-row-clearfix" style="text-align:center;">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark"> <img alt="" src="{{ url('images/logo-wide2.png') }}">
                            <ul class="styled-icons icon-dark mt-20" style="display:inline-block">
                                <li><a href="https://vk.com/bhaktilata" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) none repeat scroll 0% 0% !important;"><i class="fa fa-vk"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJqCv7PHvvKTBEYSy9_Rveg?spfreload=10" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) none repeat scroll 0% 0% !important;"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <p style="font-size: 10px; color: #fff;">Наш сайт не осуществляет какую-либо миссионерскую деятельность от имени какого-либо религиозного объединения, не направлен на распространение сведений о каком-либо вероучении среди лиц, не являющихся его последователями, не преследует цель вовлечения в какое-либо религиозное объединение.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget dark">
                            <div class="form-outer sp-force-hide"><style class="" id="subscribe-form-style" >.sp-force-hide { display: none;
                                    }
                                    .sp-form[sp-id="80531"] { display: block; background: #111111; padding: 15px; width: 500px; max-width: 100%; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-color: #111111; border-style: solid; border-width: 1px; font-family: Arial, "Helvetica Neue", sans-serif;
                                    }
                                    .sp-form[sp-id="80531"] .sp-form-control { background: #ffffff; border-color: #cccccc; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; height: 35px; width: 100%;
                                    }
                                    .sp-form[sp-id="80531"] .sp-field label { color: #ffffff; font-size: 13px; font-style: normal; font-weight: bold;
                                    }
                                    .sp-form[sp-id="80531"] .sp-button { border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; background-color: #63a93a; color: #ffffff; width: auto; font-weight: 700; font-style: normal; font-family: Arial,sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;
                                    }
                                    .sp-form[sp-id="80531"] .sp-button-container { text-align: center;
                                    }
                                </style> <div class="sp-form sp-form-regular sp-form-embed" id="sp-form-80531" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22dark%22%2C%22position%22%3A%22bottom-right%22%7D" sp-lang="ru" sp-hash="dfffbe5e7019df8a5c4e831fa848fdba24a1304188175fb54f52c0788c4789b4" sp-id="80531"> <div class="sp-message"> <div></div> </div> <div class="sp-element-container ui-sortable ui-droppable" id="droppableArea" ><div class="sp-field " sp-id="sp-27f995f7-a6fd-42be-a6b8-f642eeb618f9" > <div class=" " style="line-height: 1.2; font-family: inherit;" ><p style="text-align: center;"><span style="color: #ffffff; font-size: 24px;">Подпишитесь на нашу рассылку</span></p>
                                                <p><span style="color: #ffffff;">Отправляя данную форму, даю согласие на обработку моих персональных данных в соответствии с <a href="/docs/policy.pdf" target="_blank" rel="noopener">политикой в отношении обработки персональных данных</a> и <a href="/docs/terms.pdf" target="_blank" rel="noopener">пользовательским соглашением</a>.</span></p></div> </div><div class="sp-field " sp-id="sp-040cd649-37b5-45a3-92cb-31659113bb45" > <label class="sp-control-label "> <span class="">Email</span> <strong class="" >*</strong> </label> <input name="sform[email]" class="sp-form-control " required="required" type="email" placeholder="Ваш e-mail" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" sp-type="email"> </div></div> <div class="sp-field sp-button-container " sp-id="sp-0c20a21b-5cfd-4493-9dd0-ceca6c0fdd2f" > <button class="sp-button " id="sp-0c20a21b-5cfd-4493-9dd0-ceca6c0fdd2f"> Подписаться </button> </div> <div class="sp-link-wrapper sp-brandname__center " > </div> </div> <script src="" type="text/javascript"></script></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Новые фото</h5>
                            <div id="flickr-feed" class="clearfix">
                                <script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=157921558@N08">
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-nav bg-black-222 p-20">
                <div class="row text-center">
                    <div class="col-md-12">
                        <p class="text-white font-11 m-0">© 2019, ЦОСКР. Все права защищены.</p>
                    </div>
                </div>
            </div>
        </footer>

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ url('js/custom.js') }}"></script>


</body>
</html>
