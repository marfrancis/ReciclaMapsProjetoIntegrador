@extends('layouts.appPainel')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Incluir Produto";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-2">Cadastro de Produtos</h1>
                    <form dataroute="{{ route('produto.cadastrar') }}" method="post" id="formProdutos"
                        class="user-info-setting-form" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form mt-5">
                            <input type="text" name="nome" id="nome" class="form-control">
                            <label for="nome" class="font-weight-light">Nome do Produto</label>
                        </div>

                        <div class=" mt-5">
                            <label for="descricao" class="font-weight-light">Descrição do Produto</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>

                        </div>
                        <div class="md-form mt-5">
                            <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
                            <label for="preco" class="font-weight-light">Preço do produto</label>
                        </div>
                        <div class="md-form mt-5">
                            <input type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque"
                                required>
                            <label for="quantidade_estoque" class="font-weight-light">Quantidade em estoque</label>
                        </div>
                        <div class="mt-5">
                            <label for="categorias_id" class="font-weight-light">Categoria do Produto</label>
                            <select class="custom-select" id="categorias_id" name="categorias_id"
                                aria-label="Example select with button addon" required>
                                <option selected disabled>Selecione</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nome_categoria}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-5 mb-5">
                            <label for="imagem" class="font-weight-light">Imagem do produto</label>
                            <input type="file" class="form-control-file" id="imagem" name="imagem" required>

                        </div>
                        <button type="submit"
                            class="btn btn-success btn-rounded waves-effect waves-light">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
