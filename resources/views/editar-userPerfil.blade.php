@extends('layouts.app')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Editar Perfil";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<form id="formEditarPerfil" action="{{ route('userPerfil.editar') }}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
@csrf
<div class="container mt-5">
    <h1>Editar Perfil</h1>
    <hr>
    <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                @if(Auth::user()->img != null)
                    <img src="{{ asset(Auth::user()->img) }}" id="editarUserAvatar" class="avatar img-circle" alt="avatar">
                @else
                    <img src="{{asset('//placehold.it/100')}}" id="editarUserAvatar" class="avatar img-circle" alt="avatar">
                @endif
                    <h6>trocar foto...</h6>
                    <input type="file" name="avatar" class="form-control" >
                </div>
            </div>
            <div class="col-md-9 personal-info">
                <h3>Informações Pessoais</h3>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nome:</label>
                    <div class="col-lg-8">
                        <input type="text" name="name" id="editarUserName" value="{{ $authUser->name }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Sobrenome:</label>
                    <div class="col-lg-8">
                        <input type="text" name="sobrenome"  id="editarUserSobrenome" value="{{ $authUser->sobrenome }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input type="text" name="email"  id="editarUserEmail" value="{{ $authUser->email }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Senha:</label>
                    <div class="col-md-8">
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirmar senha:</label>
                    <div class="col-md-8">
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Salvar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<hr>

@endsection
