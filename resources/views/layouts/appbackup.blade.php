<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="img/favicon.png" sizes="16x16 32x32" type="image/jpg">

    <!-- Metas para o Google -->
    <title><?php @print($title); ?></title>
    <meta name="description" content="<?php @print($description); ?>">
    <meta name="keywords" content="<?php @print($keywords); ?>">

    <!-- Metas para o Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php @print($facebook_title); ?>" />
    <meta property="og:url" content="<?php @print($facebook_url); ?>" />
    <meta property="og:site_name" content="<?php @print($facebook_site_name); ?>" />
    <meta property="og:description" content="<?php @print($facebook_description); ?>" />
    <meta property="og:image" content="<?php @print($facebook_image); ?>" />
    <?php if (!empty($facebook_image_width)): ?>
    <meta property="og:image:width" content="<?php @print($facebook_image_width); ?>" /><?php endif ?>
    <?php if (!empty($facebook_image_height)): ?>
    <meta property="og:image:height" content="<?php @print($facebook_image_height); ?>" /><?php endif ?>
    <meta property="fb:app_id" content="501123709922257" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reeduca Recicla</title>

    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
    <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
    <?php endif ?>
</head>

<body>
        <style>#loading{background-color: green;height: 100%;width: 100%;position: fixed;z-index: 999999;margin-top: 0px;top: 0px;}#loading-center{width: 100%;height: 100%;position: relative;}#loading-center-absolute {position: absolute;left: 50%;top: 50%;height: 150px;width: 150px;margin-top: -75px;margin-left: -75px;   -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg);transform: rotate(45deg); }.object{width: 20px;height: 20px;background-color:#FFF;position: absolute;left: 65px;top: 65px;}.object:nth-child(2n+0) {margin-right: 0px;}#object_one {-webkit-animation: object_one 2s infinite;animation: object_one 2s infinite;-webkit-animation-delay: 0.2s; animation-delay: 0.2s; }#object_two {-webkit-animation: object_two 2s infinite;animation: object_two 2s infinite;-webkit-animation-delay: 0.3s; animation-delay: 0.3s; }#object_three {-webkit-animation: object_three 2s infinite;animation: object_three 2s infinite;-webkit-animation-delay: 0.4s; animation-delay: 0.4s; }#object_four {-webkit-animation: object_four 2s infinite;animation: object_four 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }#object_five {-webkit-animation: object_five 2s infinite;animation: object_five 2s infinite;-webkit-animation-delay: 0.6s; animation-delay: 0.6s; }#object_six {-webkit-animation: object_six 2s infinite;animation: object_six 2s infinite;-webkit-animation-delay: 0.7s; animation-delay: 0.7s; }#object_seven {-webkit-animation: object_seven 2s infinite;animation: object_seven 2s infinite;-webkit-animation-delay: 0.8s; animation-delay: 0.8s; }#object_eight {-webkit-animation: object_eight 2s infinite;animation: object_eight 2s infinite;-webkit-animation-delay: 0.9s; animation-delay: 0.9s; }#object_big{position: absolute;width: 50px;height: 50px;left: 50px;top: 50px;-webkit-animation: object_big 2s infinite;animation: object_big 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }  @-webkit-keyframes object_big {50% { -webkit-transform: scale(0.5); }}@keyframes object_big {50% { transform: scale(0.5);-webkit-transform: scale(0.5);} }@-webkit-keyframes object_one {50% { -webkit-transform: translate(-65px,-65px)  ; }}@keyframes object_one {50% { transform: translate(-65px,-65px) ;-webkit-transform: translate(-65px,-65px) ;} }@-webkit-keyframes object_two {50% { -webkit-transform: translate(0,-65px) ; }}@keyframes object_two {50% { transform: translate(0,-65px) ; -webkit-transform: translate(0,-65px) ; } }@-webkit-keyframes object_three {50% { -webkit-transform: translate(65px,-65px) ; }}@keyframes object_three {50% { transform: translate(65px,-65px) ;-webkit-transform: translate(65px,-65px) ;} }@-webkit-keyframes object_four {50% { -webkit-transform: translate(65px,0) ; }}@keyframes object_four {50% { transform: translate(65px,0) ;-webkit-transform: translate(65px,0) ;} }@-webkit-keyframes object_five {50% { -webkit-transform: translate(65px,65px) ; }}@keyframes object_five {50% { transform: translate(65px,65px) ;-webkit-transform: translate(65px,65px) ;} }@-webkit-keyframes object_six {50% { -webkit-transform: translate(0,65px) ; }}@keyframes object_six {50% { transform:  translate(0,65px) ;-webkit-transform:  translate(0,65px) ;} }@-webkit-keyframes object_seven {50% { -webkit-transform: translate(-65px,65px) ; }}@keyframes object_seven {50% { transform: translate(-65px,65px) ;-webkit-transform: translate(-65px,65px) ;} }@-webkit-keyframes object_eight {50% { -webkit-transform: translate(-65px,0) ; }}@keyframes object_eight {50% { transform: translate(-65px,0) ;-webkit-transform: translate(-65px,0) ;} }</style>
        <div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div><div class="object" id="object_five"></div><div class="object" id="object_six"></div><div class="object" id="object_seven"></div><div class="object" id="object_eight"></div><div class="object" id="object_big"></div></div></div></div>
        <?php if (false): ?>
        <?php endif ?>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm active shadow ">
                <div class="container">
                    <a class="navbar-brand align-self-start" href="./">
                        <img src="img/logo_lado.png" class="logoMargin logoSize" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="/mapa">Mapa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="/loja">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="/sobre">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="/contato">Contato</a>
                            </li>



                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link active grow efeitoTransicao" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link efeitoTransicao dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->nivel_user === 0)
                                    <a class="dropdown-item" href="{{ route('painel') }}"><i class="fa fa-cog"></i><span class="space-menu"> {{ __('Painel Admin') }} </span></a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i><span class="space-menu"> {{ __('Sair') }} </span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </header>

    <main>
        @yield('content')
    </main>
</div>


<div style="max-width: 100%; overflow: hidden;">
    <footer>
        <nav class="nav nav-fill rodape">

            <div class="col-md-3 d-none d-sm-block">
                <li class="footer-logo-size">
                    <img src="img/logo_branco.png" width="200" alt="">
                </li>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <ul class="nav marginFooter">
                        <li class="nav-item d-none d-sm-block align-footer">
                            <a class="nav-link active menu-footer" href="/home">Home</a>
                            <a class="nav-link active menu-footer" href="/sobre">Sobre</a>
                            <a class="nav-link active menu-footer" href="/loja">Loja</a>
                        </li>
                        <li class="nav-item d-none d-sm-block align-footer">
                            <a class="nav-link active menu-footer" href="/mapa">Mapa</a>
                            <a class="nav-link active menu-footer" href="/faq">FAQ</a>
                            <a class="nav-link active menu-footer" href="/contato">Contato</a>
                        </li>
                        <li class="nav-item d-none d-sm-block align-footer">
                            <a class="nav-link active menu-footer" href="/privacidade">Privacidade</a>
                            <a class="nav-link active menu-footer" href="/termos">Termos de Uso</a>
                        </li>
                        <div class="col-md-2 text-primary div-icones justify-content-center">
                            <ul class="ul-icones-footer ">
                                <li class="nav-link active icones-footer ">
                                    <a href="https://twitter.com/reeducarecicla" target="_blank">
                                        <i class="fa fa-twitter text-white"> </i>
                                    </a>
                                </li>

                                <li class="nav-link active icones-footer">
                                    <a href="https://facebook.com/reeducarecicla" target="_blank">
                                        <i class="fa fa-facebook text-white"> </i>
                                    </a>
                                </li>
                                <li class=" nav-link active icones-footer">
                                    <a href="http://instagram.com/reeducarecicla" target="_blank">
                                        <i class="fa fa-instagram text-white"> </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form class="nav-item newsletter" method="POST" action="/home">
                            @csrf
                            <label class="form-control newsletter-footer"> Assine nossa Newsletter!</label>
                            <div class="input-group newsletter-email">
                                <input class="form-control" type="email" name="email" placeholder="email@email.com.br">
                                <span class="input-group-btn ">
                                    <button class="btn btn-success" class="btn-newsletter" type="submit">Assine
                                        agora</button>
                                    </span>
                                </div>
                            </form>
                        </ul>

                        @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                        @endif

                        @if(isset($resultado))
                        @if($resultado)

                       <div class="alert alert-success">
                            <h1>E-mail cadastrado com sucesso</h1>
                        </div>
                        @else
                        <h1>erro</h1>
                        @endif
                        @endif


                    </div>
                </nav>

                <div class="foot5 mb-0 container-fluid justify-content-center">
                    <p class="mb-3" style="font-family: Roboto,sans-serif;
                    font-weight: 300;">Copyrights © <strong> Recicla Maps </strong> - Todos os Direitos Reservados</p>
                </div>
            </footer>
        </div>

        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
        <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
        <?php endif ?>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">



        <link href="{{asset('css/recicla-guide.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/dropdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/beta-popup.css')}}" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        {{-- <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
        <link href="{{asset('css/mdb.lite.css')}}" rel="stylesheet"> --}}

        <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">



        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{url('https://code.jquery.com/jquery-3.4.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        {{-- <script src="{{asset('js/app.js') }}" defer></script> --}}
        <script src="{{asset('sweetalert/dist/sweetalert2.min.js')}}"></script>
        {{-- <script src="{{asset('js/mdb.js')}}"></script> --}}
        <script src="{{asset('js/gmaps.js')}}"></script> <!-- plugin para google maps api -->
        <script src="{{asset('js/recicla.min.js')}}"></script>
    </body>

    </html>
