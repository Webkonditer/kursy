<!doctype html>
<html lang="ru">
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
</head>
<body class="boxed-layout pt-sm-0" >
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
                        <nav id="menuzord" class="sm-text-center menuzord default menuzord-responsive shad">
                            <a class="menuzord-brand pull-left flip xs-pull-center mt-5 mb-5" href="/" style="border-right: 1px solid black">
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
        <footer id="footer" class="footer  ">
            <div class="container pt-20 pb-20">
              <div class=" pl-20 pr-20 footer-bg">
                <div class="row pl-10 pr-10 justify-content-md-center">
                  @include('public.navigation.menuzord-menu')
                </div>
                <div class="row pl-10 pr-10">
                  <div class="col-sm-6 pl-0">
                    <img src="/images/header/COSKR1.png" height="70" />
                  </div>
                  <div class="col-sm-6 pr-0 pt-10 text-right">
                    <img src="/images/header/e01.jpg" height="70" />
                  </div>
                </div>
                <div class="row pl-10 pr-10">
                  <div class="col text-left">
                    <p class="font-12 m-0">Карта сайта</p>
                    <p class="font-12 m-0">Счетчик посещений</p>
                    <p class="font-12 m-0">© 2019, ЦОСКР. Все права защищены.</p>
                    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </footer>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ url('js/custom.js') }}"></script>


</body>
</html>
