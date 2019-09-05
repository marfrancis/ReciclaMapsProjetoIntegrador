@extends('layouts.app')
@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "FAQ";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>


<div class="container-fluid ">
    <div class="col-12 mt-5 mb-5">
        <div class="tab-content">
            <div class="card tab-pane fade active show" id="v-pills-general">
                <div class="card-body">
                    <div class="media media-intro">
                        <div class="media-body">
                          <center> <h4>Perguntas Frequentes</h4></center>
                        </div>
                    </div>
                    <div id="accordion-one" class="accordion default-accordion-style">
                        <div class="card">
                            <div class="card-header align-items-center">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa" aria-hidden="true"></i>
                                    Qual o objetivo da ReciclaMaps?
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p> O principal objetivo do ReciclaMaps é fornecer uma ferramenta digital
                                        que facilite a busca por pontos de coleta apropriados ao descarte de
                                        resíduos. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa" aria-hidden="true"></i>
                                    Por que eu deveria reciclar?
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p> Estudos indicam que para manter o estilo de vida atual, consumimos 50% a
                                        mais dos recursos naturais existentes, ou seja, gastamos mais rápido do que
                                        o planeta pode repor.
                                        Considerando que o consumo de recursos é inerente ao modelo da sociedade
                                        atual, a melhor forma de diminuir o consumo é por meio da reciclagem,
                                        reutilizando, ressignificando e quando não for possível seu aproveitamento,
                                        ter certeza que seus resíduos terão um descarte final adequado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa" aria-hidden="true"></i>
                                    Quais as vantagens de comprar com as lojas parceiras da ReciclaMaps?
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p>Nossos parceiros são empresas com os mesmos valores do ReciclaMaps,
                                        acreditam que a reciclagem é a alternativa para diminuir o ritmo do consumo
                                        de recursos naturais. Por isso, ao comprar com nossos parceiros você
                                        contribui com o planeta e consome de forma mais sustentável.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa" aria-hidden="true"></i>
                                    Como faço para acessar o mapa interativo da coleta de lixo?
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Para encontrar o ponto de coleta adequado para seu resíduo basta você
                                        acessar a página do mapa interativo e pesquisar por tipo de resíduos e/ou
                                        pela sua localização (CEP), que o mapa indicará onde há pontos de coleta
                                        mais próximos e mais adequados para seu descarte.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa" aria-hidden="true"></i>
                                    Como faço para fechar uma parceria com a ReciclaMaps?
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Para se tornar parceiro do ReciclaMaps é muito simples. Basta enviar
                                        uma mensagem em nossa página Contato e nós responderemos informando as
                                        modalidades de parceria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fa" aria-hidden="true"></i>
                                    Quais as vantagens de ser cadastrado no site?
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Os usuários cadastrados recebem primeiro as novidades da plataforma como
                                        novos pontos de coleta, novos parceiros e produtos. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    <i class="fa" aria-hidden="true"></i>
                                    Não estou achando nenhum ponto de coleta no mapa interativo.
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Você pode procurar pelas duas formas de busca da plataforma: sua localização
                                        ou seu resíduo. Mas, caso você não encontre nenhum ponto de coleta adequado
                                        para seu resíduo, nos envie uma mensagem pela página Contato e nossa equipe
                                        irá verificar e responder sua solicitação. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    <i class="fa" aria-hidden="true"></i>
                                    Quero colaborar com o projeto, como faço?
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Para colaborar com nosso projeto, você pode sugerir um novo ponto de coleta
                                        ou cadastrar sua loja de produtos sustentáveis. Fale com a gente, queremos
                                        ouvir suas ideias!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
