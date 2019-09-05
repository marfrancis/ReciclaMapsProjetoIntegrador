@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Incluir Formas de Pagamento";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                <h1 class="text-center mb-2">Cadastro de Formas de Pagamento</h1>
                <form dataroute="{{ route('pagamento.cadastrar') }}" method="post" id="formPagamento"
                    class="user-info-setting-form" enctype="multipart/form-data">
                    @csrf
                    <div class="md-form mt-5">
                        <input type="text" name="modo_pagamento" id="modo_pagamento" class="form-control">
                        <label for="modo_pagamento" class="font-weight-light">Forma de pagamento</label>
                    </div>

                    <button type="submit" class="btn btn-success">CADASTRAR</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
