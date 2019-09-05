<!DOCTYPE html>

<html lang="pt-BR">


<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#000000">
        <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="16x16 32x32" type="image/jpg">

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

        <title>Recicla Maps</title>

        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
    <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
    <?php endif ?>



</head>

<body>
        @if($_SERVER['HTTP_HOST'] != 'localhost:8000')
        <style>#loading{background-color: green;height: 100%;width: 100%;position: fixed;z-index: 999999;margin-top: 0px;top: 0px;}#loading-center{width: 100%;height: 100%;position: relative;}#loading-center-absolute {position: absolute;left: 50%;top: 50%;height: 150px;width: 150px;margin-top: -75px;margin-left: -75px;   -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg);transform: rotate(45deg); }.object{width: 20px;height: 20px;background-color:#FFF;position: absolute;left: 65px;top: 65px;}.object:nth-child(2n+0) {margin-right: 0px;}#object_one {-webkit-animation: object_one 2s infinite;animation: object_one 2s infinite;-webkit-animation-delay: 0.2s; animation-delay: 0.2s; }#object_two {-webkit-animation: object_two 2s infinite;animation: object_two 2s infinite;-webkit-animation-delay: 0.3s; animation-delay: 0.3s; }#object_three {-webkit-animation: object_three 2s infinite;animation: object_three 2s infinite;-webkit-animation-delay: 0.4s; animation-delay: 0.4s; }#object_four {-webkit-animation: object_four 2s infinite;animation: object_four 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }#object_five {-webkit-animation: object_five 2s infinite;animation: object_five 2s infinite;-webkit-animation-delay: 0.6s; animation-delay: 0.6s; }#object_six {-webkit-animation: object_six 2s infinite;animation: object_six 2s infinite;-webkit-animation-delay: 0.7s; animation-delay: 0.7s; }#object_seven {-webkit-animation: object_seven 2s infinite;animation: object_seven 2s infinite;-webkit-animation-delay: 0.8s; animation-delay: 0.8s; }#object_eight {-webkit-animation: object_eight 2s infinite;animation: object_eight 2s infinite;-webkit-animation-delay: 0.9s; animation-delay: 0.9s; }#object_big{position: absolute;width: 50px;height: 50px;left: 50px;top: 50px;-webkit-animation: object_big 2s infinite;animation: object_big 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }  @-webkit-keyframes object_big {50% { -webkit-transform: scale(0.5); }}@keyframes object_big {50% { transform: scale(0.5);-webkit-transform: scale(0.5);} }@-webkit-keyframes object_one {50% { -webkit-transform: translate(-65px,-65px)  ; }}@keyframes object_one {50% { transform: translate(-65px,-65px) ;-webkit-transform: translate(-65px,-65px) ;} }@-webkit-keyframes object_two {50% { -webkit-transform: translate(0,-65px) ; }}@keyframes object_two {50% { transform: translate(0,-65px) ; -webkit-transform: translate(0,-65px) ; } }@-webkit-keyframes object_three {50% { -webkit-transform: translate(65px,-65px) ; }}@keyframes object_three {50% { transform: translate(65px,-65px) ;-webkit-transform: translate(65px,-65px) ;} }@-webkit-keyframes object_four {50% { -webkit-transform: translate(65px,0) ; }}@keyframes object_four {50% { transform: translate(65px,0) ;-webkit-transform: translate(65px,0) ;} }@-webkit-keyframes object_five {50% { -webkit-transform: translate(65px,65px) ; }}@keyframes object_five {50% { transform: translate(65px,65px) ;-webkit-transform: translate(65px,65px) ;} }@-webkit-keyframes object_six {50% { -webkit-transform: translate(0,65px) ; }}@keyframes object_six {50% { transform:  translate(0,65px) ;-webkit-transform:  translate(0,65px) ;} }@-webkit-keyframes object_seven {50% { -webkit-transform: translate(-65px,65px) ; }}@keyframes object_seven {50% { transform: translate(-65px,65px) ;-webkit-transform: translate(-65px,65px) ;} }@-webkit-keyframes object_eight {50% { -webkit-transform: translate(-65px,0) ; }}@keyframes object_eight {50% { transform: translate(-65px,0) ;-webkit-transform: translate(-65px,0) ;} }</style>
        <div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div><div class="object" id="object_five"></div><div class="object" id="object_six"></div><div class="object" id="object_seven"></div><div class="object" id="object_eight"></div><div class="object" id="object_big"></div></div></div></div>
        @endif
    <div id="app">

        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm active p-0 ">
                    <div class="container responsive-text">


                        {{-- left --}}
                            <div class="top-navigation-left ">
                                    <div class="top-navigation-left-text text-white">
                                        Bem Vindo à Recicla Maps </div>
                            </div>

                        <div class="top-navigation-right " id="navbarSupportedContent">

                            <!-- Right Side Of Navbar -->


                            <ul class="navbar-nav ml-auto float-right">

                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                        <div class="social-icon top-social-wrapper">

                                    <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-user text-white p-2"></i>{{ __('Login') }}</a>
                                        </div>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                        <div class="social-icon top-social-wrapper">
                                    <a class="nav-link text-white" href="{{ route('register') }}"><i class="fas fa-sign-in-alt text-white p-2"></i>{{ __('Cadastro') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if(Auth::user()->img != null)
                                        <img src="{{ asset(Auth::user()->img) }}" style="width: 45px; height: 45px; padding: 3px;border: 1px solid #1b84e7; border-radius: 100%;">
                                    @else
                                        <i class="fas fa-user text-white p-2"></i>
                                    @endif
                                    {{Auth::user()->name}}<span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->nivel_user == 0)
                                        <a class="dropdown-item" href="{{ route('painel') }}"><i class="fa fa-cog"></i><span class="space-menu"> {{ __('Painel Admin') }} </span></a>
                                        @endif
                                        <a href="/editar-userPerfil" class="dropdown-item"><i class="fa fa-user"></i><span class="space-menu"> {{ __('Ver Perfil') }} </span></a>
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


                {{-- container --}}
            </nav>


            <!-- end top navigation -->
            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="/home">
                                <img src="{{asset('img/logo_branco.png')}}" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper"
                            id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li
                                    class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item">
                                    <a href="/home" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-has-children menu-item-15"><a href="/como-reciclar">Como
                                        Reciclar</a>

                                </li>
                                <li class="menu-item menu-item-has-children menu-item-15"><a href="/mapa">Mapa</a>

                                </li>
                                <li class="menu-item menu-item-has-children"><a
                                        href="/loja">Loja</a>

                                </li>
                                <li class="menu-item menu-item-has-children"><a
                                        href="/blog">Blog</a>

                                </li>
                                <li class="menu-item menu-item-has-children"><a
                                        href="/contato">Contato</a>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation sf-js-enabled sf-arrows" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home greennature-normal-menu " ><a href="/home"><i
                                            class="fa fa-home"></i>Home</a></li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="/como-reciclar"
                                        class="sf-with-ul-pre"><i class="fas fa-recycle"></i>Como Reciclar</a>
                                        <ul class="dl-submenu">
                                            <li class="menu-item"><a href="#">Onde Vai Reciclar ?</a></li>
                                            <li class="menu-item"><a href="#">teste</a></li>
                                        </ul>
                                </li>

                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="/mapa"
                                        class="sf-with-ul-pre"><i class="fas fa-map-marked-alt"></i>Mapa</a>

                                </li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu ">
                                    <a href="/loja" class="sf-with-ul-pre" ><i
                                            class="fas fa-store-alt"></i>Loja</a>

                                </li>
                                <li
                                    class="menu-item menu-item-has-children greennature-normal-menu">
                                    <a href="/blog" class="sf-with-ul-pre"><i
                                            class="fas fa-blog"></i>Blog</a>

                                </li>
                                <li
                                    class="menu-item menu-item-has-children greennature-normal-menu">
                                    <a href="/contato" class="sf-with-ul-pre"><i
                                            class="fas fa-id-card"></i>Contato</a>

                                </li>

                            </ul>


                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>




        </header>

        <main>
                @yield('content')
        </main>
</div>


{{-- footer  --}}
</div>
<footer class="footer" id="footer">
    <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="emergency">

            <img src="{{asset('img/logo_branco.png') }}" width="200" alt="">
             </div>
         </div>
     </div>


     <div class="main-footer">
         <div class="row">

             <div class="col-md-4">

                 <div class="useful-links">
                     <div class="title">
                         <h5>Links</h5>
                     </div>

                     <div class="detail">
                         <ul>

                             <li><a href="/h">Home</a></li>
                             <li><a href="/faq">FAQ</a></li>
                             <li><a href="/mapa">Mapa</a></li>
                             <li><a href="/sobre">Sobre</a></li>
                             <li><a href="/loja">Loja</a></li>
                             <li><a href="/contato">Contato</a></li>
                             <li><a href="/comodescartar">Como Descartar</a></li>
                             <li><a href="/termos">Termos de Uso</a></li>
                             <li><a href="/blog">Blog</a></li>
                             <li><a href="/privacidade">Politica de Privacidade</a></li>


                         </ul>
                     </div>

                 </div>

             </div>

             <div class="col-md-4 mb-3">

                 <div class="newsletter">
                     <div class="title">
                         <h5>NEWSLETTER</h5>
                     </div>

                     <div class="detail">

                             <div class="signup-text">
                                 <i class="fa fa-envelope-open"></i>
                                 <span>Inscreva-se com seu nome e e-mail para receber nossas atualizações.</span>
                             </div>

                             <div class="form">
                             <p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
                             <p class="subscribe_error" id="subscribe_error" style="display:none;"></p>

                             <form id="myform2"  method="post" dataroute="{{ route('home') }}">
                                @csrf
                                 <input type="text" data-delay="300" placeholder="Seu nome" name="name" id="nameNews" class="input" >
                                 <input type="email" data-delay="300" placeholder="Email" name="email" id="emailNews" class="input" >
                                 {{-- <input name="Subscribe" type="submit" value="Assinar" onClick="validateSubscription();"> --}}
                            <button type="submit" class="btn btn-card btn-secondary" value="Assinar">Assinar</button>
                             </form>

                             </div>

                         </div>


                 </div>

             </div>
             <div class="col-md-4">

                 <div class="get-touch">
                     <div class="title">
                         <h5>CONTATO</h5>
                     </div>

                     <div class="detail">
                         <div class="get-touch">


                             <span class="text">Conheça o projeto e compartilhe sua ideias com nossa equipe!</span>


                             <ul>
                                 <li><i class="fa fa-map-marker"></i> <span>Recicla Maps, São Paulo, SP</span></li>
                                 <li><i class="fa fa-phone"></i> <span>(11) 99999-1029</span></li>
                                 <li><a href="#."><i class="fa fa-envelope"></i> <span>contato@reciclamaps.com.br</span></a></li>
                             </ul>

                         </div>
                     </div>

                 </div>

             </div>

         </div>

     </div>

 </div>

 <div class="footer-bottom">
        <div class="container">
                <div class="row">

                    <div class="col-md-6 mt-3">
                        <span class="copyrights">Copyright &copy; 2019 Recicla Maps. Todos os Direitos Reservados.</span>
                    </div>

                    <div class="col-md-6 mt-3">
                           <ul>
                               <li class="list-inline-item m-t-10"><a href="https://www.facebook.com/reciclamaps/" target="_blank" class="socialIcon"><i class="fab fa-facebook"></i></a></li>
                               <li class="list-inline-item m-t-10"><a href="https://twitter.com/ReciclaMaps" target="_blank" class="socialIcon"><i class="fab fa-twitter"></i></a></li>
                               <li class="list-inline-item m-t-10"><a href="https://www.instagram.com/reciclamaps/" target="_blank" class="socialIcon"><i class="fab fa-instagram"></i></a></li>
                               <li class="list-inline-item m-t-10"><a href="#" target="_blank" class="socialIcon"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>

 </div>

</footer>

<div class="totop" style="display: block;">
        <div class="gototop">
            <a href="#">
                <div class="arrowgototop"> </div>
            </a>
        </div>
    </div>
{{-- end footer  --}}

        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
        <!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
        <?php endif ?>

        <link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;'
    type='text/css' media='all' />
<link rel='stylesheet'
    href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;'
    type='text/css' media='all' />





        {{-- links css --}}
        <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">
        <link rel='stylesheet' href="{{asset('css/styleMenu.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/superfish/css/superfish.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/dl-menu/component.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/elegant-font/style.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/fancybox/jquery.fancybox.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/flexslider/flexslider.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('css/style-responsive.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('css/style-custom.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('plugins/masterslider/public/assets/css/masterslider.main.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('css/master-custom.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('css/prettyPhoto.css')}}" type='text/css' media='all' />
        <link rel="stylesheet" href="{{asset('css/recicla-guide.css')}}"  type="text/css" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/loja.css')}}">
        <link rel="stylesheet" href="{{asset('css/loja-stilo.css')}}">
        <link rel="stylesheet" href="{{asset('css/stylea721.css')}}" type="text/css" media='all' />

        <script src="{{url('https://code.jquery.com/jquery-3.4.0.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('js/voltarTopo.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('sweetalert/dist/sweetalert2.min.js')}}"></script>
        <script src="{{asset('js/alertSweetRecicla.js')}}"></script>
        <script src="{{asset('js/postNewsletter.js')}}"></script>

        {{-- js menu --}}
        <script type='text/javascript' src="{{asset('plugins/superfish/js/superfish.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/hoverIntent.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/dl-menu/modernizr.custom.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/dl-menu/jquery.dlmenu.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.easing.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/flexslider/jquery.flexslider.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.isotope.min.js')}}"></script>
        <script type='text/javascript' src="{{asset('js/plugins.js')}}"></script>
        <script type='text/javascript' src="{{asset('plugins/jquery.transit.min.js')}}"></script>
        <script id="dsq-count-scr" src="//www-reciclamaps-com-br.disqus.com/count.js" async></script>
        <script src="https://kit.fontawesome.com/edcfdf1ead.js"></script>
        <script src="{{asset('js/gmaps.js')}}"></script> <!-- plugin para google maps api -->
        <script src="{{asset('js/recicla.min.js')}}"></script>
        <script src="{{asset('js/ajaxEditaPerfil.js')}}"></script>




</body>

</html>
