@extends('layouts.app')

@section('content')


<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Loja";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

{{-- inicio breadcrumb --}}

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-6"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Loja</strong>
            </div>
            <div class="col-6">
                <a href="/carrinho" class="float-right">
                <img src="{{asset('img/produtos_loja/carrinho.png')}}" class="sizeCarrinho" alt="">
                <div class="badge">{{  $carrinhoCount }}</div>
                    </a>
            </div>
        </div>
    </div>
</div>

{{-- fim breadcrumb --}}

<div class="main-wrapper mt-5">

    <div class="blog-details-area bg-grey section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">

                            <div id="asideOfertasLoja" class="boxCinza mt-3 text-center">
                                    <h5 id="asideOfertasLojaTitulo">
                                        <span>
                                            <a href="/loja" target="_blank">
                                                <i class="fa fa-shopping-cart"></i> Mais Vendidos
                                            </a>
                                        </span>
                                    </h5>
                                    {{-- carroussel parceiros--}}
                                    <div class="sidbar-blog mb--30">
                                            <!-- sidbar-blog-inner start -->
                                            @foreach ($ultimosProdutos as $p)
                                            <div class="sidbar-blog-inner">
                                                <div class="sidbar-blog-image">
                                                    <a href="/internaProduto/{{$p->id}}"><img src="/storage/img/{{$p->imagem}}"
                                                            alt=""></a>
                                                </div>
                                                <div class="sidbar-blog-content text-left">
                                                    <h3><a href="/internaProduto/{{$p->id}}"></a>{{ $p->nome }}</h3>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    <!-- fim carroussel -->
                            </div>

                        <div class="largeRectangleBanner" style="height:auto!important;">
                            <a href="#" target="_blank"><img src="{{asset('img/lateral_v2.gif')}}"
                                    alt="Apoie nosso projeto" style="max-width: 100%;"></a>
                        </div>
                        <div id="asideOfertasLoja" class="boxCinza mt-3 text-center">
                            <h5 id="asideOfertasLojaTitulo">
                                <span>
                                    <a href="/loja" target="_blank">
                                        <i class="far fa-newspaper"></i> Números e Curiosidades
                                    </a>
                                </span>
                            </h5>
                            {{-- carroussel --}}
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/banners/curiosidade1.jpg') }}"
                                            alt="Primeiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/banners/curiosidade2.jpg') }}"
                                            alt="Segundo Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/banners/curiosidade3.jpg') }}"
                                            alt="Terceiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('img/banners/curiosidade4.jpg') }}"
                                                alt="Terceiro Slide">
                                        </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>
                            {{-- fim carroussel --}}

                        </div>
                        <div id="asideOfertasLoja" class="boxCinza mt-3 text-center">
                            <h5 id="asideOfertasLojaTitulo">
                                <span>
                                    <a href="/loja" target="_blank">
                                        <i class="far fa-handshake"></i> Parceiros ReciclaMaps
                                    </a>
                                </span>
                            </h5>
                            {{-- carroussel parceiros--}}
                            <div id="carouselParceirosndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselParceirosndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselParceirosndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselParceirosndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo1.jpg') }}"
                                            alt="Primeiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo2.jpg') }}"
                                            alt="Segundo Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo3.jpg') }}"
                                            alt="Terceiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo4.jpg') }}"
                                            alt="Terceiro Slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo5.jpg') }}"
                                            alt="Terceiro Slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselParceirosndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselParceirosndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Próximo</span>
                                </a>
                            </div>
                            {{-- fim carroussel --}}


                        </div>

                    </div>

                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <div class="row">
                        @foreach($produtos as $produto)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <figure class="card card-product">
                                <div class="img-wrap"><a href="/internaProduto/{{$produto->id}}">
                                        <img src="/storage/img/{{$produto->imagem}}"></a>
                                </div>
                                <figcaption class="info-wrap text-center align-item-center">
                                    <h4 class="title">{{$produto->nome}}</h4>
                                </figcaption>
                                <div class="bottom-wrap">

                                    <a href="/internaProduto/{{$produto->id}}" class="btn btn-primary float-right ">COMPRAR</a>
                                        <a href="/adicionarCarrinho/{{$produto->id}}" class="btn btn-outline-primary float-right mr-1"><i class="fa fa-shopping-cart"></i></a>
                                        <span class="price-new float-left" style="font-weight: 900; color: #008251; font-size: 22px;">R${{$produto->preco}}</span>
                                </div> <!-- bottom-wrap.// -->
                            </figure>
                        </div>
                        @endforeach
                    </div>
                    {{$produtos->links()}}
                    <!--// paginatoin-area End -->
                </div>
            </div>
        </div>
    </div>

    {{-- inicio produtos side bar left --}}









    @endsection
