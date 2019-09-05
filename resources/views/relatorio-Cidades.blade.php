@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Relatório Cidades";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>cidade</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->id}}</td>
                        <td>{{$cidade->cidade}}</td>
                        <td>{{$cidade->imagem}}</td>
                        <td><a href="/editar-cidade/{{$cidade->id}}"><button class="btn btn-success">Editar</button></a>
                        </td>
                        <td><button class="btn btn-danger" id="deletaCidade"
                                onclick="deletaCidade({{$cidade->id}})">Apagar</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{$cidades->links()}}
</div>


@endsection
