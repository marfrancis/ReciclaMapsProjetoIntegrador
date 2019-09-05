@extends('layouts.app')

@section('content')


<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Dados Compra";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-6 mb-0"><a href="/home">Home</a> <span class="mx-2 mb-0">/</span>
                    <a href="/loja">Loja</a><span class="mx-2 mb-0">/</span>
                    <a href="/carrinho">Carrinho</a><span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Dados da Compra</strong></div>
                <div class="col-6 mb-0">
                        <a href="/carrinho" class="float-right">
                            <img src="{{asset('img/produtos_loja/carrinho.png')}}" class="sizeCarrinho" alt="">
                            <div class="badge">{{  $carrinhoCount }}</div>
                                </a>
                </div>
            </div>
        </div>
    </div>
    @guest
    @if (Route::has('register'))
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 mt-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Dados de compra</h2>
                    <div class="p-3 p-lg-5 border">

                        <div class="form-group row">
                            <div class="col-12">
                                <label for="c_fname" class="text-black">Primeiro Nome<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                            </div>
                            <div class="col-12">
                                <label for="c_lname" class="text-black">Último Nome<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="c_companyname" class="text-black">CEP</label>
                                <input type="text" class="form-control" id="c_companyname" name="c_companyname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="c_address" class="text-black">Endereço<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address"
                                    placeholder="Endereço da rua" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Número" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Complemento" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="c_state_country" class="text-black">Estado<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_state_country" name="c_state_country" required>
                            </div>
                            <div class="col-6">
                                <label for="c_postal_zip" class="text-black">Cidade<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <div class="col-6">
                                <label for="c_email_address" class="text-black">Endereço de email<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_email_address" name="c_email_address" required>
                            </div>
                            <div class="col-6">
                                <label for="c_phone" class="text-black">Telefone/Celular<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone"
                                    placeholder="Número do telefone/celular" required>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            </li>
            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6 mb-5 mt-5 mb-md-0">
                            <h2 class="h3 mb-3 text-black">Dados de compra</h2>
                            <div class="p-3 p-lg-5 border">
                                <h2>{{ Auth::user()->name }}, seus dados de compra já estão preenchidos!</h2>
                                <center>
                                    <img src="{{ asset ('img/produtos_loja/check.png') }}" class="mt-5" width="45%"
                                        alt="">
                                </center>
                            </div>
                        </div>
                        @endguest
                        <div class="col-md-6">
                            <div class="row mb-5">
                                <div class="col-12 mt-5">
                                    <h2 class="h3 mb-3 text-black">Detalhes do pedido</h2>
                                    <div class="p-3 p-lg-5 border">
                                        <table class="table site-block-order-table mb-5">
                                            <thead>
                                                <th>Produtos</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <?php $soma = 0; ?>
                                                @foreach ($produtos as $produto)
                                                <?php $soma += $produto->preco ?>
                                                <tr>
                                                    <td>{{$produto->nome}}<strong class="mx-2">x</strong>1</td>
                                                    <td>{{$produto->preco}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="text-black font-weight-bold">
                                                        <strong>Subtotal</strong></td>
                                                    <td class="text-black">R${{$produto->preco}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-black font-weight-bold"><strong>Total</strong>
                                                    </td>
                                                    <td class="text-black font-weight-bold">
                                                        <strong>R$ {{$soma}}</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @foreach($pagamentos as $pagamento)
                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsebank" role="button" aria-expanded="false"
                                                    aria-controls="collapsebank">{{$pagamento->modo_pagamento}}</a></h3>
                                        </div>
                                        @endforeach

                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg py-3 btn-block"
                                                onclick="window.location='/finalizada'">FINALIZAR COMPRA</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
            @endsection
