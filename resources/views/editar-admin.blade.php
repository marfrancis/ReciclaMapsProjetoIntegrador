@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Editar Admin";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto m-5">
            <div class="jumbotron border rounded border-success">
            <center>
                    <div class="logoRegister mb-4">
                        <a href="/add-cidade">
                            <img class="logoRegister mb-3" src="{{asset('img/logologin.png')}}" alt>
                        </a>
                        <div>
                </center>
                <h1 class="text-center mb-3">Cadastro de Administrador</h1>
                <form action="/editar-admin/{{$editado->id}}" method="post" class="user-info-setting-form"
                    enctype="multipart/form-data" id="formAdminEditar">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" name="name" class="form-control" style="font-style: italic"
                        id="adminNameEditar" value="{{$editado->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" style="font-style: italic"
                        id="adminEmailEditar" value="{{$editado->email}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" class="form-control" id="adminPasswordEditar" style="font-style: italic">
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Confirmar Senha</label>
                        <input type="password" name="password-confirm" class="form-control" id="confirmPasswordEditar" style="font-style: italic">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Insira sua foto</label>
                        <div class="col-md-6 text-md-left p-0">
                            <input type="file" name="avatar" id="avatarEditar" accept="image/png,image/jpg">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-card btn-primary ml-0 mt-2">SALVAR ALTERAÇÕES</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
