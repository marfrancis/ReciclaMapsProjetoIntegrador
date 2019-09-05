@extends('layouts.app')

@section('content')


<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Loja";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-6"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Loja</strong></div>
            <div class="col-6"><a href="/carrinho"><img src="{{asset('img/produtos_loja/carrinho.png')}}"
                        class="sizeCarrinho float-right" alt=""></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-3">
            <nav class="nav ">
                @foreach($categorias as $categoria)
                <a class="nav-link fonteCateg" href="#">{{$categoria->nome_categoria}}</a>
                @endforeach
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach($produtos as $produto)
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <figure class="card card-product">
                        <div class="img-wrap"><a href="/internaProduto/{{$produto->id}}">
                            <img src="/storage/produtos/{{$produto->imagem}}"></a>
                        </div>
                        <figcaption class="info-wrap text-center align-item-center">
                            <h4 class="title">{{$produto->nome}}</h4>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="/internaProduto/{{$produto->id}}" class="btn btn-sm btn-primary float-right">COMPRAR</a>
                            <a href="/adicionarCarrinho/{{$produto->id}}" class="btn btn-outline-primary float-right mr-3"> <i class="fas fa-shopping-cart"></i></a>

                            <div class="price-wrap h5">
                                <span class="price-new">R${{$produto->preco}}</span>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
            </div>
            @endforeach
        </div>
        <div class="col-md-4">

        </div>

        <!-- col // -->
    </div>
    <!-- row.// -->
</div>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <center>
                {{$produtos->links()}}
            </center>
        </div>
    </div>
</div>





@endsection
