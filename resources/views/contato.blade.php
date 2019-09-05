@extends('layouts.app')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Contato";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fluid no-gutters p-0">
    <!-- Banner topo -->
    <div class="card card-banner d-none d-sm-none d-md-block d-lg-block d-xl-block">
        <img src="{{asset('img/bannercontato1900x320.jpg')}}" class="card-img" alt="...">
        <div class="card-img-overlay">
        </div>
    </div>
</div>
@unless ( empty($msg) )
<script language="JavaScript">
    alert('{{ $msg }}');

</script>
@endunless
<div class="container-fluid">
    <div class="row">
        <!-- inicio Formulario -->
        <div class="col-md-8">
            <div class="user-info-settings">
                <h4 class="text-success">Contato</h4>
                <form action="/contato" method="post" class="user-info-setting-form">
                    <div class="form-group">
                        <label class="text-label">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label class="text-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="text-label">Mensagem</label>
                        <textarea name="message" class="form-control contato" cols="10" rows="5"></textarea>
                    </div>
                    <div class="submit-buttons ">
                        <button type="submit" class="btn btn-card btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-card btn-secondary">Limpar</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
            <!-- Fim Formulario -->
            <!-- Imagem Abaixo formulario -->
            <div class="col-md-8 col-xs-12 d-none d-sm-none d-md-block d-lg-block d-xl-block" id="imgform">
                <img src="{{asset('img/nature.jpg')}}" class="img-fluid">
            </div>
        </div>
        <!-- fim imagem -->
        <!-- Inicio dados contato -->
        <div class="col-md-4 col-sm-6 col-xs-12 dadosContato mb-4">
            <div class="card">
                <div class="card-body user-details-contact text-center ">
                    <div class="user-details-image mb-3">
                        <img class="rounded-circle" src="img/1.jpg" alt="image">
                    </div>
                    <div class="user-intro">
                        <h4 class="text-success card-intro-title mb-0">Recicla Maps</h4>
                        <p><small>@reciclamaps</small></p>
                        <p>Recicla Maps é um projeto em constante desenvolvimento, cujo intuito é facilitar a busca por
                            pontos de coleta adequados ao descarte dos resíduos. Conheça o projeto e compartilhe sua
                            ideias com nossa equipe!</p>
                    </div>
                    <div class="contact-addresses">
                        <ul class="contact-address-list">
                            <li class="email">
                                <h5><i class="fa fa-envelope text-success"></i> Email</h5>
                                <p>
                                    <a href="mailto:contato@reeducarecicla.com" target="_block">
                                        <span class="d-block d-sm-none">
                                            Enviar e-mail
                                        </span>
                                        <span class="d-none d-sm-block">
                                            contato@reciclamaps.com.br
                                        </span>
                                    </a>
                                </p>
                            </li>
                            <li class="phone">
                                <h5><i class="fa fa-phone text-success"></i> Telefone</h5>
                                <p>
                                    <a href="tel:(11) 99999-1010">(11) 99999-1010</a>
                                </p>
                            </li>
                            <li class="address">
                                <h5><i class="fa fa-map text-success" aria-hidden="true"></i> Endereço</h5>
                                <p>
                                    <a href="https://maps.google.com?saddr=Current+Location&daddr=43.12345,-76.12345"
                                        target="_blank">
                                        <span class="d-block d-sm-none">
                                            Abrir GPS
                                        </span>
                                        <span class="d-none d-sm-block">
                                            São Paulo, SP
                                        </span>
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- fim dados contato -->
    </div>
    <!-- inicio frase -->
    <!-- fim frase -->
</div>
</div>
<div class="recycle-feeds">
    <div class="container no-gutters">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="recycle-icon fade-in-up ">
                    <i class="fa fa-recycle img-circle"></i>
                </div>
                <p id="frase">
                    " É tempo de reciclar! "
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
