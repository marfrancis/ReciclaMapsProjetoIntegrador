@extends('layouts.app')

@section('content')
<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Carrinho";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mb-5 mt-5">
            <div class="card">
                <table class="table table-hover shopping-cart-wrap">
                    <thead class="text-muted">
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col" width="120">Quantidade</th>
                            <th scope="col" width="120">Preço</th>
                            <th scope="col" width="200" class="text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>
                                <figure class="media">
                                    <div class="img-wrap"><img src="/storage/img/{{$produto->imagem}}"
                                            class="img-thumbnail img-sm"></div>
                                    <h3 class="title text-truncate">{{$produto->nome}}</h6>
                                </figure>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </td>
                            <td>
                                <div class="price-wrap">
                                    <var class="price">R$ {{$produto->preco}} </var>
                                </div> <!-- price-wrap .// -->
                            </td>
                            <td class="text-right">
                                <a href="carrinho/remover/{{  $produto->id }}" class="btn btn-outline-danger"> ×
                                    Remover</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- card.// -->
        </div>
    </div>
</div>

</div>
<div class="container">
    <div class="row">
        <div class="col-12 mb-5">
            <a href="/loja" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> CONTINUAR
                COMPRANDO</a>
            <a href="/dadoscompra" class="btn  btn-primary">FINALIZAR COMPRA</a>
        </div>
    </div>
</div>






@endsection
