@extends('layouts.app')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Mapa Interativo";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div style="position: relative;">

    <div class="panel city_panel-ins">
        <div class="panel-titulo">
            <h3>Instruções</h3>
        </div>
        <ul>
            <li>1. Escolha a cidade.</li>
            <li>2. Selecione 1 ou mais materiais que deseja.</li>
            <li>3. Clique nos pontos que aparecerão no Mapa para saber os dados das empresas.</li>
            <li>4. Ou selecione a Empresa na lista que vai aparecer na parte abaixo do Mapa.</li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="panel city_panel">
        <div class="city_head">
            <div class="photo">
                <a href="#" class="fit_size" data-tooltip="visao geral">
                    <img src="{{asset('img/id_1.jpg')}}" alt="" />
                </a>
            </div>
            <div class="main_cityinfo">
                <div class="dropdown ">
                    <button class="btn btn-dark dropdown-toggle botao-pesquisa " type="button"
                        data-toggle="dropdown"><span class="label" data-id="0">Selecione a cidade</span><span
                            class="caret"></span></button>
                    <ul class="dropdown-menu lista-cidades estiloPainel"
                        style="overflow-y: auto; max-height:300px; position:fixed;">
                        <li><a>Selecione a cidade</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="opensearch"></a>
        </div>
        <div class="panel_body">
            <div class="panel_body_wrap">
                <div class="trash_type">
                    <button class="btn btn-primary d-block d-sm-none mb-3" type="button" data-toggle="collapse"
                        data-target="#seletorDeCategoria"
                        style="font-size: 17px; width: 100%; text-align: center;">Escolher categoria</button>
                    <div class="collapse navbar-collapse d-sm-block " id="seletorDeCategoria">
                        <div class="trash_type_title">ESCOLHA O MATERIAL A SER RECICLADO:</div>
                        <div class="row">
                            @foreach ($materiais as $material)
                            <div class="type_item col-3">
                                <a href="#" data-id="{{ $material->id }}"
                                    style="background-image: url(img/trash/{{ str_slug($material->tipoMaterial) }}.png);"></a>
                                <span class="custom-tooltip">{{ $material->tipoMaterial }}</span>
                            </div>
                            @endforeach
                        </div>
                        <button class="btn btn-primary d-block d-sm-none mt-3" type="button" data-toggle="collapse"
                            data-target="#seletorDeCategoria"
                            style="font-size: 17px; width: 100%; text-align: center;"><i
                                class="fa fa-chevron-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<div id="map"></div>
<div class="clearfix"></div>
<div class="container-fluid d-none" id="cards-empresas">
    <div class="titulo-lista mx-auto mt-4 mb-4">
        <h3>Postos de destinação na cidade informada:</h3>
    </div>
    <div class="lista">
        <div class="row">
        </div>
    </div>
</div>
<div class="clearfix"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDottVHFaZukoZo_EvVv-jxbhOCpC1LMeY&callback=initMap">
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {


        //////////////////////////////////////////////////////////////////////////////////////////
        // Inicia o mapa informando o elemento, as coordenadas iniciais e algumas opções extras //
        //////////////////////////////////////////////////////////////////////////////////////////
        var zoomInicial = 5;
        var latitudeInicial = -20.347000;
        var longitudeInicial = -40.294000;
        var mapa = new gMaps('#map', latitudeInicial, longitudeInicial, {
            zoom: zoomInicial,
            scrollwheel: false,
            pretoebranco: false
        });

        /**
         * Função a ser chamada sempre que houver necessidade de mudar os marcadores no mapa, ou seja, quando alguém mudar quais marcadores deseja ver
         */
        window.timerMapa = null;
        function atualizarMapa() {

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Percorre os ícones de objetos descartáveis para identificar quais estão ativos e obter o id de cada um //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            let categoria = [];
            $('.trash_type .type_item a').each(function () {
                if ($(this).is('.active')) categoria.push($(this).data('id'));
            });

            /////////////////////////
            // pega o id da cidade //
            /////////////////////////
            let cidade = $('button.botao-pesquisa span.label').data('id');

            //////////////////////////////////////////////////////////////
            // remove os marcadores do mapa antes de adicionar os novos //
            //////////////////////////////////////////////////////////////
            mapa.removerMarcadores();

            /**
             * faz uma solicitação ajax para obter um json com os novos marcadores
             * @param  [url] passa a url do arquivo que retorna o json com os parâmetros da cidade e categorias selecionadas
             */
            clearTimeout(window.timerMapa);
             window.timerMapa = setTimeout(function(){
                $.getJSON(`/marcadores/${cidade}/${categoria}`).then(function (response) {
                // por ser uma requisição com Promise, é necessário que o        👆 then()
                // tratamento do retorn o seja feito no método then()
                // que é executado quando a requisição é bem sucedida
                window.marcadores = response;

                /* exibe a área de cards de empresas */
                $('#cards-empresas').removeClass('d-none');

                /* Juntar empresas iguais */

                ///////////////////////////////////////////////////////////////////
                // se não encontrar nenhum marcador, reduz o zoom para o inicial //
                ///////////////////////////////////////////////////////////////////
                if (window.marcadores.length == 0) {
                    mapa.map.setZoom(zoomInicial);
                    mapa.centralizarMapa(latitudeInicial, longitudeInicial);
                } else {
                    let lista = '';
                    for (var i = window.marcadores.length - 1; i >= 0; i--) {
                        ///////////////////////////////////////////////////////////////////////////////////////////////
                        // para cada iteração com o vetor, chama a função addMarker() para inserir os pontos no mapa //
                        ///////////////////////////////////////////////////////////////////////////////////////////////
                        mapa.addMarker({
                            latitude: window.marcadores[i].empresas_latitude,
                            longitude: window.marcadores[i].empresas_longitude,
                            title: window.marcadores[i].empresas_nome,
                            //////////////////////////////////////////////////////////////////////////////
                            // 👇 aqui montamos o html que será exibido quando o usuário clicar no ponto //
                            //////////////////////////////////////////////////////////////////////////////
                            html: `
                            <i class="fas fa-map-marked-alt text-success p-2"></i><b>${window.marcadores[i].empresas_nome}</b><br>
                            <i class="fas fa-map-pin text-success p-2"></i>${window.marcadores[i].empresas_endereco},${window.marcadores[i].empresas_numero}<br>
                            <i class="fas fa-phone text-success p-2"></i>${window.marcadores[i].empresas_telefone}<br>
                            <i class="fab fa-internet-explorer text-success p-2"></i><a href="${window.marcadores[i].empresas_site}" target="blank_">Site</a><br>
                            <i class="fas fa-map-marker text-success p-2"></i><a href="https://maps.google.com?saddr=Current+Location&daddr=${window.marcadores[i].empresas_latitude},${window.marcadores[i].empresas_longitude}" target="_blank" title="Clique nesse link para abrir o GPS">Abrir GPS</a>
                                    `,
                        });

                        /* incluindo na lista */

                        lista += `
                        <div class="col-12 col-sm-4">
                        <div class="card mb-2">
                        <div class="card-body">
                        <h4 class="card-title"><i class="fas fa-map-marked-alt text-success p-2"></i><a href="javascript:" onclick="\$(this).parent().next().toggle()">${window.marcadores[i].empresas_nome}</a></h4>
                        <p class="card-text" style="display:block;">
                        <i class="fas fa-map-pin text-success p-2"></i>${window.marcadores[i].empresas_endereco}, ${window.marcadores[i].empresas_numero} <br>
                        <i class="fas fa-phone  text-success p-2"></i>${window.marcadores[i].empresas_telefone}<br>
                        <i class="fab fa-internet-explorer text-success p-2"></i><a href="${window.marcadores[i].empresas_site}" target="blank_">Site</a>
                        <i class="fas fa-map-marker text-success p-2"></i><a href="https://maps.google.com?saddr=Current+Location&daddr=${window.marcadores[i].empresas_latitude},${window.marcadores[i].empresas_longitude}" target="blank_">Abrir GPS</a>
                        </p>
                        <p class="p-2">Itens que recicla:</p>`;
                        for(let j = 0; j < window.marcadores[i].materiais_tipoMaterial.length; j++) {
                            console.table(window.marcadores[i].materiais_tipoMaterial);
                            lista += `<span class="custom-tooltip" style="height: 53px;width: 53px;display: inline-block;background-image: url(img/trash/${window.marcadores[i].materiais_tipoMaterial[j]}.png);"></span>`;
                        }
                        lista += `</div></div></div>`;



                    }
                    document.querySelector('.lista div').innerHTML = lista;
                    ///////////////////////////////////////////////////////////////////////////////////////////////
                    // por fim chama essa função para centralizar o mapa com base nos marcadores recém colocados //
                    ///////////////////////////////////////////////////////////////////////////////////////////////
                    mapa.zoomParaAjustar();
                }
            });
            },1e3);
        }

        /**
         * função responsável por popular a lista de cidades com base em um json vindo por ajax
         */
        function atualizarCidades() {
            for (var i = 0; i < window.cidades.length; i++) {
                $('ul.lista-cidades').append(
                    $('<li>').append(
                        $('<a>')
                        .text(window.cidades[i].cidade)
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        // é importante armazenar também a imagem e id para ser possível alterar a imagem ao mudar a cidade e para o ajax que obtém os marcadores //
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        .data('imagem', "/storage/img/" + window.cidades[i].imagem)
                        .data('id', window.cidades[i].id)
                        .attr('href', 'javascript:')
                    )
                );
            }
        }

        //////////////////////////////////////////////////////////////////////////////////////////////////////
        // adiciona função de click nos ícones para adicionar uma classe de active neles e atualizar o mapa //
        //////////////////////////////////////////////////////////////////////////////////////////////////////
        $('.trash_type .type_item a').on('click', function (event) {
            event.preventDefault();
            if (this.className == '') $(this).addClass('active');
            else $(this).removeClass('active');
            atualizarMapa();
        });

        ///////////////////////////////////////////////////////////////////////
        // faz uma consulta ajax para obter um json com os nomes das cidades //
        ///////////////////////////////////////////////////////////////////////
        $.getJSON('/cidades').then(function (response) {
            window.cidades = response;
            atualizarCidades();
        });

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // adiciona uma função de click nas cidades para atualizar o nome, a foto e o id para ser pego posteriormente na função atualizarMapa() //
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $('ul.lista-cidades').on('click', 'li a', function () {
            $('button.botao-pesquisa span.label')
                .text($(this).text())
                .data('id', $(this).data('id')); /*👈 importante para a função atualizarMapa()*/
            $('.city_head .photo img').attr('src', $(this).data('imagem'));
        });

        // rola direto pro mapa
        let tamanhoHeader = 0;
        jQuery('#app nav').each(function () {
            if (jQuery(this).css('display') != 'none') tamanhoHeader = jQuery(this).outerHeight();
        });
        jQuery('html, body').animate({
            'scroll-top': tamanhoHeader + 'px'
        }, 1000);

    });

</script>
<style>.dropdown-menu.show {
        display: block;
        transform: translate3d(0px, 32px, 0px)!important;
    }</style>
<?php // endif ?>


@endsection
