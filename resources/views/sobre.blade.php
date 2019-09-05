@extends('layouts.app')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Sobre Nós";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<section class="container-fluid">
    <div class="row sobre">
        <div class="col-md-6 foto">
            <img src="{{asset('img/salveoplaneta.jpg')}}" class="img-fluid desktop" alt="Salve o planeta">
            <img src="{{asset('img/salveoplanetaresponsivo.jpg')}}" class="img-fluid responsivo" alt="Salve o planeta">
        </div>
        <article class="col-md-6 texto mb-5">
            <h1 id="margem">Quem <span class="color-title">Somos</span></h1>
            <h3 class="space"><span class="color-title">Missão</span></h3>
            <p> Recicla Maps tem a missão de facilitar o processo de busca por pontos adequados de coleta e mostrar qual
                a melhor maneira de descartar cada resíduo. Dessa forma, contribuir com um modelo de consumo sustentável
                e mais consciente.</p>
            <h3 class="space"><span class="color-title">Visão</span></h3>
            <p>Temos a missão de facilitar o processo de busca por pontos adequados de coleta e mostrar qual a melhor
                maneira de descartar cada resíduo. Dessa forma, contribuir com um modelo de consumo sustentável e mais
                consciente.</p>
            <h3 class="space"><span class="color-title">Valores</span></h3>
            <p>Recicla Maps acredita que todos têm direito e responsabilidade em relação ao descarte adequado de
                resíduos. Por isso, temos o compromisso de oferecer uma alternativa de serviço sustentável com qualidade
                e confiança.</p>
        </article>
    </div>
</section>
<div class="recycle-feeds">
    <div class="container no-gutters">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="recycle-icon fade-in-up ">
                    <i class="fa fa-recycle img-circle"></i>
                </div>
                <p id="frase">
                    "Recicle sempre, para um mundo melhor"
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
