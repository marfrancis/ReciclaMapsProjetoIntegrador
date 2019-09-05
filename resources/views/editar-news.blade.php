@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Editar Newsletter";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <center>
                        <div class="form-header mb-4 mt-4">
                            <h3 class="text-center mb-2" style="color:black">Cadastro de Newsletter</h3>
                        </div>
                    </center>
                    <form action="/editar-news/{{$newsletter->id}}" method="post" class="user-info-setting-form"
                        enctype="multipart/form-data" id="myformEdit">
                        @csrf
                        <div class="md-form mt-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <label for="editarName" class="font-weight-light">Digite o Nome</label>
                            <input type="text" name="name" id="editarEmail" value="{{ $newsletter->name }}"
                                class="form-control">
                        </div>
                        <div class="md-form mt-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <label for="editarEmail" class="font-weight-light">Digite o Cadastro</label>
                            <input type="email" name="email" id="editarEmail" value="{{ $newsletter->email }}"
                                class="form-control">
                        </div>
                        <button type="submit"
                            class="btn btn-success btn-rounded waves-effect waves-light">EDITAR</button>
                    </form>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>



@endsection
