<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
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


        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/recicla-guide.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/dropdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/stylesa361.css?ver=2.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/beta-popup.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('css/ionicons.css')}}" rel="stylesheet">
        <link href="{{asset('css/chartist.css')}}" rel="stylesheet">
        <link href="{{asset('css/rickshaw.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/slim.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
        <link href="{{asset('css/mdb.lite.css')}}" rel="stylesheet">
        <link href="{{asset('css/addons/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/addons/datatables-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/ckeditor/editor.css')}}" rel="stylesheet">

        <title>Painel</title>
    </head>

{{-- <style>#loading{background-color: green;height: 100%;width: 100%;position: fixed;z-index: 999999;margin-top: 0px;top: 0px;}#loading-center{width: 100%;height: 100%;position: relative;}#loading-center-absolute {position: absolute;left: 50%;top: 50%;height: 150px;width: 150px;margin-top: -75px;margin-left: -75px;   -ms-transform: rotate(45deg); -webkit-transform: rotate(45deg);transform: rotate(45deg); }.object{width: 20px;height: 20px;background-color:#FFF;position: absolute;left: 65px;top: 65px;}.object:nth-child(2n+0) {margin-right: 0px;}#object_one {-webkit-animation: object_one 2s infinite;animation: object_one 2s infinite;-webkit-animation-delay: 0.2s; animation-delay: 0.2s; }#object_two {-webkit-animation: object_two 2s infinite;animation: object_two 2s infinite;-webkit-animation-delay: 0.3s; animation-delay: 0.3s; }#object_three {-webkit-animation: object_three 2s infinite;animation: object_three 2s infinite;-webkit-animation-delay: 0.4s; animation-delay: 0.4s; }#object_four {-webkit-animation: object_four 2s infinite;animation: object_four 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }#object_five {-webkit-animation: object_five 2s infinite;animation: object_five 2s infinite;-webkit-animation-delay: 0.6s; animation-delay: 0.6s; }#object_six {-webkit-animation: object_six 2s infinite;animation: object_six 2s infinite;-webkit-animation-delay: 0.7s; animation-delay: 0.7s; }#object_seven {-webkit-animation: object_seven 2s infinite;animation: object_seven 2s infinite;-webkit-animation-delay: 0.8s; animation-delay: 0.8s; }#object_eight {-webkit-animation: object_eight 2s infinite;animation: object_eight 2s infinite;-webkit-animation-delay: 0.9s; animation-delay: 0.9s; }#object_big{position: absolute;width: 50px;height: 50px;left: 50px;top: 50px;-webkit-animation: object_big 2s infinite;animation: object_big 2s infinite;-webkit-animation-delay: 0.5s; animation-delay: 0.5s; }  @-webkit-keyframes object_big {50% { -webkit-transform: scale(0.5); }}@keyframes object_big {50% { transform: scale(0.5);-webkit-transform: scale(0.5);} }@-webkit-keyframes object_one {50% { -webkit-transform: translate(-65px,-65px)  ; }}@keyframes object_one {50% { transform: translate(-65px,-65px) ;-webkit-transform: translate(-65px,-65px) ;} }@-webkit-keyframes object_two {50% { -webkit-transform: translate(0,-65px) ; }}@keyframes object_two {50% { transform: translate(0,-65px) ; -webkit-transform: translate(0,-65px) ; } }@-webkit-keyframes object_three {50% { -webkit-transform: translate(65px,-65px) ; }}@keyframes object_three {50% { transform: translate(65px,-65px) ;-webkit-transform: translate(65px,-65px) ;} }@-webkit-keyframes object_four {50% { -webkit-transform: translate(65px,0) ; }}@keyframes object_four {50% { transform: translate(65px,0) ;-webkit-transform: translate(65px,0) ;} }@-webkit-keyframes object_five {50% { -webkit-transform: translate(65px,65px) ; }}@keyframes object_five {50% { transform: translate(65px,65px) ;-webkit-transform: translate(65px,65px) ;} }@-webkit-keyframes object_six {50% { -webkit-transform: translate(0,65px) ; }}@keyframes object_six {50% { transform:  translate(0,65px) ;-webkit-transform:  translate(0,65px) ;} }@-webkit-keyframes object_seven {50% { -webkit-transform: translate(-65px,65px) ; }}@keyframes object_seven {50% { transform: translate(-65px,65px) ;-webkit-transform: translate(-65px,65px) ;} }@-webkit-keyframes object_eight {50% { -webkit-transform: translate(-65px,0) ; }}@keyframes object_eight {50% { transform: translate(-65px,0) ;-webkit-transform: translate(-65px,0) ;} }</style>
    <div id="loading"><div id="loading-center"><div id="loading-center-absolute"><div class="object" id="object_one"></div><div class="object" id="object_two"></div><div class="object" id="object_three"></div><div class="object" id="object_four"></div><div class="object" id="object_five"></div><div class="object" id="object_six"></div><div class="object" id="object_seven"></div><div class="object" id="object_eight"></div><div class="object" id="object_big"></div></div></div></div> --}}
    <?php if (false): ?>
    <?php endif ?>
    <div id="app">

    <div class="slim-header">
        <div class="container">
          <div class="slim-header-left">
            <a href="\painel"><img src="img/logo_lado.png" class="logoMargin logoSize"alt=""></a>
          </div>
          <!-- slim-header-left -->
          <div class="slim-header-right">
            <div class="dropdown dropdown-c">
              <a href="#" class="logged-user" data-toggle="dropdown">
              @if(Auth::user()->img != null)
                <img src="{{ asset(Auth::user()->img) }}">
              @else
                <img src="http://via.placeholder.com/500x500" alt="">
              @endif
                <span> {{ Auth::user()->name }}</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <nav class="nav">
                  <a href="/editar-userPerfil" class="nav-link"><i class="fa fa-edit"></i><span class="space-menu">Editar Perfil</span></a>
                  <a href="/home" class="nav-link"><i class="fa fa-sign-out"></i><span class="space-menu">Sair</span></a>
                </nav>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- header-right -->
        </div><!-- container -->
      </div><!-- slim-header -->

      <div class="slim-navbar">
        <div class="container">
          <ul class="nav">
            <li class="nav-item with-sub">
              <a class="nav-link" href="#">
                <i class="fas fa-user-circle"></i>
                <span class="space-menu">Usuários</span>
              </a>
              <div class="sub-item">
                <ul>
                  <li><a href="/registerPainel">Cadastro de Usuários</a></li>
                  <li><a href="/add-admin">Cadastro de Admin</a></li>
                  <li class="sub-with-sub">
                    <a href="#">Relatorios</a>
                    <ul>
                      <li><a href="/relatorio-Users">Relatorio de Usuários</a></li>
                      <li><a href="/relatorio-Admins">Relatorio de Admins</a></li>

                    </ul>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item with-sub">
              <a class="nav-link" href="#">
                <i class="fas fa-map"></i>
                <span class="space-menu">Mapa</span>
              </a>
              <div class="sub-item">
                <ul>
                  <li><a href="/add-empresa">Cadastro de Empresas</a></li>
                  <li><a href="/add-cidade">Cadastro de Cidades</a></li>
                  <li><a href="/add-material">Cadastro de Materiais</a></li>
                  <li class="sub-with-sub">
                    <a href="#">Relatorios</a>
                    <ul>
                      <li><a href="/relatorio-Empresas">Relatorio de Empresas</a></li>
                      <li><a href="/relatorio-Cidades">Relatorio de Cidades</a></li>
                      <li><a href="/relatorio-Materiais">Relatorio de Materiais</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item with-sub">
              <a class="nav-link" href="#">
                <i class="fas fa-store"></i>
                <span class="space-menu">Loja</span>
              </a>
              <div class="sub-item">
                <ul>
                  <li><a href="/add-produto">Cadastro de Produtos</a></li>
                  <li><a href="/add-categoria">Cadastro de Categorias</a></li>
                  <li><a href="/add-pagamento">Forma de Pagamento</a></li>
                  <li class="sub-with-sub">
                    <a href="#">Relatorios</a>
                    <ul>
                      <li><a href="/relatorio-Produtos">Relatorio de Produtos</a></li>
                      <li><a href="/relatorio-Categorias">Relatorio de Categorias</a></li>
                      <li><a href="/relatorio-Pagamentos">Relatorio de Forma de Pagamento</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item with-sub">
              <a class="nav-link" href="#">
                <i class="fas fa-newspaper-o"></i>
                <span class="space-menu">Newsletter</span>
              </a>
              <div class="sub-item">
                <ul>
                  <li><a href="/add-newsletter">Cadastro de Assinantes</a></li>
                  <li class="sub-with-sub">
                    <a href="#">Relatorios</a>
                    <ul>
                      <li><a href="/relatorio-Newsletter">Relatorio de Assinantes</a></li>

                    </ul>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item with-sub">
              <a class="nav-link" href="#">
                <i class="fas fa-blog"></i>
                <span class="space-menu">Blog</span>
              </a>
              <div class="sub-item">
                <ul>
                  <li><a href="/add-postagens">Cadastro de Postagens</a></li>
                  <li class="sub-with-sub">
                    <a href="#">Relatorios</a>
                    <ul>
                      <li><a href="/relatorio-Posts">Relatorio de Postagens</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div><!-- container -->
      </div><!-- slim-navbar -->

      <div>
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Painel</li>
            </ol>
            <h6 class="slim-pagetitle">Painel</h6>
          </div>
        </div><!-- row -->
      <!-- container -->
    </div>






    <main>
        @yield('content')
    </main>


    <!-- footer -->

  <div class="slim-footer">
    <div class="container">
      <p>Copyright 2019 &copy; Recicla Maps - Todos os Direitos Reservados.</p>
      <p>Produzido Por: <a href="#">Recicla Maps</a></p>
    </div>
  </div>
<!-- footer -->







        <link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert2.min.css')}}">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.4.5.1/basic/ckeditor.js"></script>
        <script src="{{asset('js/ajaxDeletaPostagem.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaCidade.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaEmpresa.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaMaterial.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaNews.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaProduto.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaCategoria.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaPagamento.js')}}"></script>

        <script src="{{asset('sweetalert/dist/sweetalert2.min.js')}}"></script>
        <script src="{{asset('js/alertSweetRecicla.js')}}"></script>
        <script src="{{asset('js/ajaxValidaPostagem.js')}}"></script>
        <script src="{{asset('js/ajaxValidaEmpresa.js')}}"></script>
        <script src="{{asset('js/ajaxValidaProduto.js')}}"></script>
        <script src="{{asset('js/ajaxValidaCategoria.js')}}"></script>
        <script src="{{asset('js/ajaxValidaCidade.js')}}"></script>
        <script src="{{asset('js/ajaxValidaMaterial.js')}}"></script>
        <script src="{{asset('js/ajaxValidaPagamento.js')}}"></script>
        <script src="{{asset('js/alertSweetRecicla.js')}}"></script>
        <script src="{{asset('js/postNewsletterAdmin.js')}}"></script>
        {{-- <script src="{{asset('js/postNewsletterAdminEdit.js')}}"></script> --}}
        <script src="{{asset('js/ckeditor/editor-ck-init.js')}}"></script>
        <script src="{{asset('js/ckeditor/plugin.js')}}"></script>
        <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
        <script src="https://kit.fontawesome.com/edcfdf1ead.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <script src="{{asset('js/gmaps.js')}}"></script> <!-- plugin para google maps api -->
        <script src="{{asset('js/recicla.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/mdb.js')}}"></script>
        <script src="{{asset('js/addons/datatables.min.js')}}"></script>
        <script src="{{asset('js/addons/datatables-select.min.js')}}"></script>
        <script src="{{asset('js/ajaxValidaCadastroAdmin.js')}}"></script>
        <script src="{{asset('js/ajaxCadastroAdminEditar.js')}}"></script>
        <script src="{{asset('js/ajaxDeletaCadastroAdmin.js')}}"></script>
