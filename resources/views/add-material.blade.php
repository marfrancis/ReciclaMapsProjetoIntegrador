@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Incluir Material";
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
                            <h3 class="text-center mb-2" style="color:black">Cadastro de Material</h3>
                    </div>
                </center>

                <form dataroute="{{ route('material.cadastrar') }}" method="post" id="formMaterial" class="user-info-setting-form"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="md-form mt-5">
                            <i class="fa fa-recycle prefix grey-text"></i>
                            <input type="text" name="tipoMaterial" id="tipoMaterial" class="form-control">
                            <label for="tipoMaterial" class="font-weight-light">Digite o material</label>
                          </div>

                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">CADASTRAR</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>



@endsection
