@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Incluir Categoria";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-2">Cadastro de Categoria</h1>

                <form dataroute="{{ route('categoria.cadastrar')}}" method="POST" enctype="multipart/form-data" id="formCategoria">
                    @csrf
                    <div class="md-form mt-5">
                        <label for="nome_categoria">Nome da Categoria</label>
                        <input type="text" class="form-control" id="nome_categoria" name="nome_categoria"
                             required>
                    </div>
                    <button type="submit" class="btn btn-success pull-right widthHeightBtn">CADASTRAR CATEGORIA</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
