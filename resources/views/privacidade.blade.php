@extends('layouts.app')
@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Politica Privacidade";
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
                            <center>
                                <h4>Politica de Privacidade</h4>
                            </center>
                        </div>
                    </div>
                    <div id="accordion-one" class="accordion default-accordion-style">
                        <div class="card">
                            <div class="card-header align-items-center">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa" aria-hidden="true"></i>
                                    Política de Privacidade <a href='http://www.reciclamaps.com.br'>Recicla Maps</a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p> Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a
                                        tornar a sua visita no nosso site o mais produtiva e agradável possível.</p>
                                    <p>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site
                                        é importante para o Reeduca Recicla.</p>
                                    <p>Todas as informações pessoais relativas a membros, assinantes, clientes ou
                                        visitantes que usem o Reeduca Recicla serão tratadas em concordância com a Lei
                                        da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</p>
                                    <p>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de
                                        telefone e/ou telemóvel, morada, data de nascimento e/ou outros.</p>
                                    <p>O uso do Reeduca Recicla pressupõe a aceitação deste Acordo de privacidade. A
                                        equipa do Reeduca Recicla reserva-se ao direito de alterar este acordo sem aviso
                                        prévio. Deste modo, recomendamos que consulte a nossa política de privacidade
                                        com regularidade de forma a estar sempre atualizado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa" aria-hidden="true"></i>
                                    Os Anúncios
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p> Tal como outros websites, coletamos e utilizamos informação contida nos
                                        anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet
                                        Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o
                                        browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o
                                        Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa" aria-hidden="true"></i>
                                    Cookie DoubleClick Dart
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion-one" style="">
                                <div class="card-body">
                                    <p>O Google, como fornecedor de terceiros, utiliza cookies para exibir anúncios no
                                        nosso website;</p>
                                    <p>Com o cookie DART, o Google pode exibir anúncios com base nas visitas que o
                                        leitor fez a outros websites na Internet;</p>
                                    <p>Os utilizadores podem desativar o cookie DART visitando a Política de <a
                                            href='http://politicaprivacidade.com/'
                                            title='privacidade da rede de conteúdo'>privacidade da rede de conteúdo</a>
                                        e dos anúncios do Google.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa" aria-hidden="true"></i>
                                    Os Cookies e Web Beacons
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p> Utilizamos cookies para armazenar informação, tais como as suas preferências
                                        pessoas quando visita o nosso website. Isto poderá incluir um simples popup, ou
                                        uma ligação em vários serviços que providenciamos, tais como fóruns.</p>
                                    <p>Em adição também utilizamos publicidade de terceiros no nosso website para
                                        suportar os custos de manutenção. Alguns destes publicitários, poderão utilizar
                                        tecnologias como os cookies e/ou web beacons quando publicitam no nosso website,
                                        o que fará com que esses publicitários (como o Google através do Google AdSense)
                                        também recebam a sua informação pessoal, como o endereço IP, o seu ISP, o seu
                                        browser, etc. Esta função é geralmente utilizada para geotargeting (mostrar
                                        publicidade de Lisboa apenas aos leitores oriundos de Lisboa por ex.) ou
                                        apresentar publicidade direcionada a um tipo de utilizador (como mostrar
                                        publicidade de restaurante a um utilizador que visita sites de culinária
                                        regularmente, por ex.).</p>
                                    <p>Você detém o poder de desligar os seus cookies, nas opções do seu browser, ou
                                        efetuando alterações nas ferramentas de programas Anti-Virus, como o Norton
                                        Internet Security. No entanto, isso poderá alterar a forma como interage com o
                                        nosso website, ou outros websites. Isso poderá afetar ou não permitir que faça
                                        logins em programas, sites ou fóruns da nossa e de outras redes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa" aria-hidden="true"></i>
                                    Ligações a Sites de terceiros
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion-one">
                                <div class="card-body">
                                    <p>O Reeduca Recicla possui ligações para outros sites, os quais, a nosso ver, podem
                                        conter informações / ferramentas úteis para os nossos visitantes. A nossa
                                        política de privacidade não é aplicada a sites de terceiros, pelo que, caso
                                        visite outro site a partir do nosso deverá ler a politica de privacidade do
                                        mesmo.</p>
                                    <p>Não nos responsabilizamos pela política de privacidade ou conteúdo presente
                                        nesses mesmos sites.</p>
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
