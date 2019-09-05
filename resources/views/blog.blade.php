@extends('layouts.app')

@section('content')

<?php

/**
 * Melhor opção do que o sub_string, pois não corta uma palavra no meio.
 */
 function getResumo($texto, $limite, $tres_p = '...') {
	$totalCaracteres = 0;
	$texto = strip_tags($texto);
	$texto = trim($texto);
	$vetorPalavras = explode(" ",$texto);
	if(strlen($texto) <= $limite)
	{
		$tres_p = "";
		$novoTexto = $texto;
	}
	else
	{
		$novoTexto = "";
		for($i = 0; $i < count($vetorPalavras); $i++)
		{
			$totalCaracteres += strlen(" ".$vetorPalavras[$i]);
			if($totalCaracteres <= $limite)
			{
				$novoTexto .= ' ' . $vetorPalavras[$i];
			}
			else break;
		}
	}
	return trim( preg_replace('/\s+/', ' ', $novoTexto) ) . $tres_p;
}

$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Blog";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
        <div class="col-12 col-md-12 text-center">

                <h1 class="card-title titulo-card-home">Nosso <span class="color-title">Blog</span></h1>
        </div>
    <div class="blog-details-area bg-grey section-ptb ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">
                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30 text-center">
                            <h4 class="title">ÚLTIMAS POSTAGENS</h4>
                        </div>
                        <!-- shop-sidebar end -->
                        <!-- shop-sidebar start -->
                        <div class="sidbar-blog mb--30">
                            <!-- sidbar-blog-inner start -->
                            @foreach ($ultimos as $p)
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="/post/{{ $p->id }}"><img src="/storage/img/{{ $p->imagem }}" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="/post/{{ $p->id }}">{{ $p->titulo }}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="largeRectangleBanner" style="height:auto!important;">
                            <a href="#" target="_blank"><img src="{{asset('img/lateral_v2.gif')}}"
                                    alt="Apoie nosso projeto" style="max-width: 100%;"></a>
                        </div>
                        <div id="asideOfertasLoja" class="boxCinza mt-3 text-center">
							<h5 id="asideOfertasLojaTitulo">
								<span>
									<a href="/loja" target="_blank">
									  <i class="fa fa-shopping-cart"></i> Loja ReciclaMaps
									</a>
								</span>
                            </h5>
                            {{-- carroussel --}}
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('img/produtos_loja/prod1.jpg') }}" alt="Primeiro Slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/produtos_loja/prod2.jpg') }}" alt="Segundo Slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('img/produtos_loja/prod3.jpg') }}" alt="Terceiro Slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Próximo</span>
                                </a>
                            </div>
                            {{-- fim carroussel --}}
                            <div class="mb-2">
                                    <center>
                                    <a href="/loja" target="_blank"  class="btn btn-success">Já conhece nossa loja? Confira!</a>
                                    <center>
                            </div>

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
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo1.jpg') }}" alt="Primeiro Slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo2.jpg') }}" alt="Segundo Slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block " src="{{asset('img/parceiros/parceirosduplo3.jpg') }}" alt="Terceiro Slide">
                                      </div>
                                      <div class="carousel-item">
                                            <img class="d-block " src="{{asset('img/parceiros/parceirosduplo4.jpg') }}" alt="Terceiro Slide">
                                          </div>
                                          <div class="carousel-item">
                                                <img class="d-block " src="{{asset('img/parceiros/parceirosduplo5.jpg') }}" alt="Terceiro Slide">
                                              </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselParceirosndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselParceirosndicators" role="button" data-slide="next">
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
                        @foreach ($postagens as $post)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-latest-blog mb--30">
                                <div class="latest-blog-image">
                                    <a href="/post/{{ $post->id }}"><img src="/storage/img/{{ $post->imagem }}"
                                            alt=""></a>
                                </div>
                                <div class="latest-blog-cont">
                                    <h3><a href="/post/{{ $post->id }}">{{ $post->titulo }}</a></h3>
                                    <p>{!! getResumo($post->texto, 100, "...") !!} <a href="/post/{{ $post->id }}">Continue lendo.</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{$postagens->links()}}
                    <!--// paginatoin-area End -->
                </div>
            </div>
        </div>
    </div>


    @endsection
