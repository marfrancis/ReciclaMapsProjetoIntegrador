@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Relatório Usuários";
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
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>email</th>
                        <th>Cep</th>
                        <th>Endereço</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Data Nascimento</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Nível Usuário</th>
                        <th>Telefone</th>
                        <th>Imagem</th>
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->sobrenome}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->cep}}</td>
                        <td>{{$user->endereco}}</td>
                        <td>{{$user->numero}}</td>
                        <td>{{$user->complemento}}</td>
                        <td>{{$user->bairro}}</td>
                        <td>{{$user->data_nascimento}}</td>
                        <td>{{$user->estado}}</td>
                        <td>{{$user->cidade}}</td>
                        <td>{{$user->nivel_user}}</td>
                        <td>{{$user->telefone}}</td>
                        <td>{{$user->imagem}}</td>
                        <td><a href="/editar-user/{{$user->id}}"><button class="btn btn-success"
                                    style="padding:15px;">Editar</button></a></td>
                        <td><a href="/apagarUser/{{$user->id}}"><button class="btn btn-danger" id="deletarUser"
                                    onclick="deletarUser({{$user->id}})" style="padding:15px;">Deletar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$users->links()}}
</div>


@endsection
