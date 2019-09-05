@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Relatório Empresas";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fluid dataTables_wrapper dt-bootstrap4" id="dtBasicExample_wrapper">
    <div class="row">
        <div class="col-12">
            <table id="align-table" class="table table-hover table-sm table-striped table-bordered table-sm ">
                <thead class="thead-light">
                    <tr>
                        <th class="th-sm">Id</th>
                        <th class="th-sm">Nome</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Cep</th>
                        <th>Bairro</th>
                        <th>Estado</th>
                        <th>Telefone</th>
                        <th>Latitude</th>
                        <th>longitude</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{$empresa->id}}</td>
                        <td>{{$empresa->nome}}</td>
                        <td>{{$empresa->endereco}}</td>
                        <td>{{$empresa->numero}}</td>
                        <td>{{$empresa->complemento}}</td>
                        <td>{{$empresa->cep}}</td>
                        <td>{{$empresa->bairro}}</td>
                        <td>{{$empresa->estado}}</td>
                        <td>{{$empresa->telefone}}</td>
                        <td>{{$empresa->latitude}}</td>
                        <td>{{$empresa->longitude}}</td>
                        <td><a href="/editar-empresa/{{$empresa->id}}"><button
                                    class="btn btn-success">Editar</button></a></td>
                        <td><button class="btn btn-danger" id="deletaEmpresa"
                                onclick="deletaEmpresa({{$empresa->id}})">Apagar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$empresas->links()}}
</div>




@endsection
