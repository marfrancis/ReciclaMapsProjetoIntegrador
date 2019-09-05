@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Painel Admin";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 ">
            <h1 class="titulo-painel">ADMINISTRADOR</h1>
            <div>
                <span class="color-title sub-titulo-painel">RECICLA MAPS</span></h1>
            </div>
        </div>
        <div class="col-md-8 ">
            <img src="{{asset('img/painelimagem.png')}}" alt="" class="float-right" width="70%">
        </div>
    </div>
</div>

@endsection
