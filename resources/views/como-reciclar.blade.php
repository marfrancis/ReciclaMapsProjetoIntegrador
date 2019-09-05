@extends('layouts.appteste')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'slide1-1.jpg';
$title = $facebook_title = "Como Reciclar";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 " src="img/slider0.png" alt="Primeiro Slide">
            <div class="carousel-caption d-none d-md-block class=" copy">
                <p class="copy">Faça 1 coisa, <strong class="strong-color">Recicle.</strong></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 attachment-full size-full wp-post-image" src="img/slide1-1.jpg"
                alt="Segundo Slide">
            <div class="carousel-caption d-none d-md-block class=" copy">
                <p class="copy">Garrafas Plásticas <strong class="strong-color">não são lixo.</strong></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide2-2.jpg" alt="Terceiro Slide">
            <div class="carousel-caption d-none d-md-block class=" copy">
                <p class="copy">Até hoje, a reciclagem de garrafas PET economizou mais de 4,3 milhões de <strong
                        class="strong-color">m3 de espaço em aterros.</strong></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide3.jpg" alt="Terceiro Slide">
            <div class="carousel-caption d-none d-md-block class=" copy">
                <p class="copy">Em 2018, a reciclagem de garrafas PET criou uma estimativa de <strong
                        class="strong-color">68.000 oportunidades de renda.</strong></p>
            </div>
        </div>
    </div>
</div>
<div class="meet-members">
    <div class="wrapper mx-auto">
        <h2>Aprenda como reciclar<b> cada tipo de material</b></h2>

        <p class="d-none d-sm-none d-md-block d-lg-block d-xl-block">Acesse a Tabela de materiais que são ou não recicláveis, é só clicar aqui:<a href="/tabelaReciclaveis" class="btn">TABELA</a> </p>



            <p class="d-none d-sm-none d-md-block d-lg-block d-xl-block">Quer começar a reciclar, em casa, no trabalho, na escola ou na universidade?</p>
            <p class="d-none d-sm-none d-md-block d-lg-block d-xl-block"> Clique no botão que te damos um passo a passo: <a href="/onde-reciclar" class="btn">ONDE VOCÊ VAI RECICLAR?</a></p>


            <p class="p-2">Nos cards abaixo, você pode aprender como reciclar cada tipo de material, escolha o material, clique no
                sinal de + e tenha todas as informações necessárias para reciclar de forma correta.</p>


    </div>
    <!--/wrapper -->
</div><!-- /meet-members -->
<!-- cards  -->
<div class="fourFeatures">
    <div class="block ">
        <img src="img/vidroreciclar.jpg" class="attachment-full size-full wp-post-image" alt=""
            sizes="(max-width: 1500px) 100vw, 1500px" />
        <h3>Reciclar <strong>Vidro</strong></h3>
        <p>Entende-se como reciclagem de vidro, o processo industrial de derretimento de resíduos de vidro.</p>
        <a href="javascript:void(0)" class="openOne">&plus;</a>
    </div>
    <div class="overlay one ">
        <a href="javascript:void(0)" class="openOne close">&minus;</a>
        <div class="overlay-content">
            <h3>Como reciclar garrafas de <strong>vidro?</strong></h3>
            <p>Na reciclagem de garrafas de vidro, se estiverem inteiras, elas devem ser lavadas. Se estiverem
                quebradas, você pode utilizar uma garrafa PET para embalá-las. Para isso, retire o rótulo da garrafa PET
                e descarte-o junto de outros plásticos recicláveis. Então corte a garrafa ao meio, insira os cacos da
                garrafa de vidro quebrada, utilize a parte superior da garrafa PET para tampar o recipiente e coloque-o
                dentro de uma sacola. Procure utilizar luvas ou pá e vassoura para não se ferir.Também recomenda-se que
                os cacos de vidro não sejam misturados com terra ou sujeira.</p>
                <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
    <div class="block alt">
        <img src="{{asset('img/aluminio.jpg')}}" class="attachment-full size-full wp-post-image" alt=""
            sizes="(max-width: 500px) 100vw, 500px" />
        <h3>Reciclar <strong>Alumínio</strong></h3>
        <p>Reciclagem de alumínio é o processo pelo qual o alumínio pode ser reutilizado em determinados produtos, após
            ter sido inicialmente produzido. </p>
        <a href="javascript:void(0)" class="openTwo">&plus;</a>
    </div>
    <div class="overlay two alt">
        <a href="javascript:void(0)" class="openTwo close">&minus;</a>
        <div class="overlay-content">
            <h3>Confira o passo a passo da reciclagem do alumínio <strong>e gere renda</strong></h3>
            <p>1. Ao terminar de consumir o conteúdo,retire toda a sobra que você conseguir.</p>
            <p>2. Amasse as latinhas vaziasse precisar de mais espaço.</p>
            <p>3. Evite separar o anel da abertura da lata,para que ele não se perca pelo caminho.</p>
            <p>4. Descarte a latinha de alumínio no lixo reciclável ou no cesto destinado a metais
                (quando houver), separado do lixo orgânico.</p>
                <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
    <div class="block alt2 ">
        <img src="{{asset('img/PETCO_Collection_BottleHand_2326.jpg')}}" class="attachment-full size-full wp-post-image"
            alt="" sizes="(max-width: 1600px) 100vw, 1600px" />
        <h3>Reciclar <strong>Plástico</strong></h3>
        <p>Diversos produtos e embalagens feitos com material plástico apresentam um símbolo que indica que eles são
            recicláveis, de acordo com o tipo de plástico do qual são feitos. </p>
        <a href="javascript:void(0)" class="openThree">&plus;</a>
    </div>
    <div class="overlay three alt2 ">
        <a href="javascript:void(0)" class="openThree close">&minus;</a>
        <div class="overlay-content">
            <h3>Passo a passo de como reciclar <strong>plástico</strong></h3>
            <p>1. Lave as embalagens plásticas que você e sua família usaram, incluindo potes de iogurte, embalagens longa vida, canudos, garrafas de suco e outros recipientes. Se possível, use água de reuso na limpeza.</p>
            <p>2. Deixe-os secar antes de separá-los para reciclagem do plástico.</p>
            <p>3. Deposite o seu plástico reciclável em um espaço próprio para a coleta do material.</p>
            <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
    <div class="block alt3">
        <img src="{{asset('img/papel.jpg')}}" class="attachment-full size-full wp-post-image" alt="" />
        <h3>Reciclar <strong>Papel</strong></h3>
        <p>A reciclagem de papel é o reaproveitamento do papel não-funcional para produzir papel reciclado. </p>
        <a href="javascript:void(0)" class="openFour">&plus;</a>
    </div>
    <div class="overlay four alt3">
        <a href="javascript:void(0)" class="openFour close">&minus;</a>
        <div class="overlay-content">
            <h3>Como <strong>descartar?</strong></h3>
            <p>1. Não jogue as embalagens em cestos com restos de outros resíduos, como óleo, comida e produtos químicos
                que podem “contaminá-lo”.</p>
            <p>2. Papéis sujos (contaminados) devem ser descartados no lixo orgânico.</p>
            <p>3. Armazene em local seco</p>
            <p>4. Se possível, separe por tipo de papel, como embalagens, papel de escritório, revistas, jornais,
                papelão, entre outros.</p>
                <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
</div>
<!-- fim cards -->
<div class="fourFeatures">
    <div class="block alt4 ">
        <img src="{{asset('img/organicoreciclar.jpg')}}" class="attachment-full size-full wp-post-image" alt=""
            sizes="(max-width: 1500px) 100vw, 1500px" />
        <h3>Reciclar <strong>Orgânicos</strong></h3>
        <p>O lixo orgânico pode ser transformado em adubo orgânico e utilizado na agricultura. Para isso acontecer é necessário fazer um processo de compostagem, que é uma espécie de reciclagem do lixo orgânico.</p>

        <a href="javascript:void(0)" class="openFive">&plus;</a>
    </div>
    <div class="overlay five alt4 ">
        <a href="javascript:void(0)" class="openFive close">&minus;</a>
        <div class="overlay-content">
            <h3>Como reciclar lixo orgânico e fazer <strong>compostagem</strong></h3>
            <p>Há uma forma simples e barata de reciclar o lixo orgânico, fazendo a compostagem tradicional. Veja como:</p>
            <p>1 pote de sorvete ou um balde</p>
            <p>1 bacia rasa</p>
            <p>2 tijolos ou pedaços de madeira</p>
            <p>Matéria seca: folhas secas, papelão ou serragem</p>
            <p>Material úmido: borra de café, cascas de frutas, sobras de verduras e legumes e resto de leite</p>
            <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
    <div class="block alt5">
        <img src="{{asset('img/toxicoreciclar.jpg')}}" class="attachment-full size-full wp-post-image" alt=""
            sizes="(max-width: 500px) 100vw, 500px" />
        <h3>Descartar lixo <strong> Tóxico</strong></h3>
        <p>O lixo tóxico é um dos mais perigosos, pois contém substâncias nocivas e propriedades químicas. Os resíduos liberados por esse tipo de lixo podem se acumular nos primeiros níveis das cadeias e teias alimentares.</p>
        <a href="javascript:void(0)" class="openSix">&plus;</a>
    </div>
    <div class="overlay six alt5">
        <a href="javascript:void(0)" class="openSix close">&minus;</a>
        <div class="overlay-content">
            <h3>Confira o passo a passo da reciclagem do alumínio <strong>e gere renda</strong></h3>
            <p>1. Pilhas e baterias: Independentemente do tipo ou do tamanho, elas possuem os metais cádmio, chumbo e mercúrio. Para descartá-las, envolva a pilha ou a bateria em um saco plástico, separando-o do lixo comum, e deposite em postos de coleta específicos.</p>
            <p>2. óleo de Cozinha: A solução é coletá-lo em uma garrafa e, quando estiver cheia, direcioná-la aos postos de coleta autorizados ou produzir sabão caseiro.</p>
            <p>3. Eletrônicos e eletrodomésticos: Para descartá-los, entre em contato com o fabricante e se informe como retornar o produto para ele.</p>
            <p>4. Remédios: O descarte dos medicamentos vencidos deve ser feito, de preferência, com a própria embalagem e levados em Centros de Atendimento Públicos de Saúde ou farmácias.</p>
            <p>5. Lâmpadas: Procure colocar as lâmpadas em caixas fechadas e separadas do lixo comum e procure um posto de coleta específico.</p>
            <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>
        </div>
    </div>
    <div class="block alt6 ">
        <img src="{{asset('img/lixohospitalar.jpg')}}" class="attachment-full size-full wp-post-image" alt=""
            sizes="(max-width: 1600px) 100vw, 1600px" />
        <h3 class="cor-alt6-titulo">Descartar lixo<strong>Hospitalar</strong></h3>
        <p class="cor-alt6">O lixo hospitalar, também chamado de resíduo hospitalar e de resíduo de serviços de saúde, é
            todo tipo de lixo proveniente do atendimento a pacientes ou de qualquer estabelecimento de saúde ou unidade
            que execute atividades de natureza de atendimento médico.</p>
        <a href="javascript:void(0)" class="openSeven">&plus;</a>
    </div>
    <div class="overlay seven alt6 ">
        <a href="javascript:void(0)" class="openSeven close7">&minus;</a>
        <div class="overlay-content">
            <h3 class="cor-alt6-titulo">Instruções para descartar <strong>Lixo Hospitalar</strong></h3>
            <p class="cor-alt6-titulo">O treinamento para a separação desse tipo de resíduo é uma exigência do Conselho Nacional do Meio Ambiente (CONAMA), que oferece subsídios para que os hospitais e clínicas elaborem planos de gerenciamento de resíduos do serviço de saúde. O objetivo é adequar a estrutura das unidades para o tratamento correto dos resíduos.</p>
            <p class="cor-alt6-titulo">Segundo as normas sanitárias, o lixo hospitalar deve ser rigorosamente seperado e cada classe deve ter um tipo de coleta e destinação. De acordo com as normas, devem ser separadas conforme um sistema de classificação que inclui os resíduos infectantes – lixo <strong>classe A</strong>, como restos de material de laboratório, seringas, agulhas, hemoderivados, entre outros, perigosos – <strong>classe B</strong>, que são os produtos quimioterápicos, radioativos e medicamentos com validade vencida – e o lixo <strong>classe C</strong>, o mesmo produzido nas residências, que pode ser subdividido em material orgânico e reciclável.</p>
            <p class="font-postos cor-alt6-titulo">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>

        </div>
    </div>
    <div class="block alt7">
        <img src="{{asset('img/madeira.jpg')}}" class="attachment-full size-full wp-post-image" alt="" />
        <h3>Reciclar <strong>Madeira</strong></h3>
        <p>A reciclagem da madeira é impossível. Por isso, a saída é o upcycle!</p>
        <a href="javascript:void(0)" class="openEight">&plus;</a>
    </div>
    <div class="overlay eight alt7">
        <a href="javascript:void(0)" class="openEight close">&minus;</a>
        <div class="overlay-content">
            <h3>Como <strong>descartar?</strong></h3>
            <p>Por ser um material orgânico, a reciclagem de madeira, infelizmente, não é possível. No entanto, com
                criatividade, ela pode se transformar em vários outros objetos. </p>
            <p>Com criatividade, transforme antigas peças</p>
            <p>Não é só porque a reciclagem de madeira não é possível que o material deveria ir para os aterros
                sanitários. Se você não tiver dotes artísticos para lapidar uma peça de madeira, procure carpintarias e
                lojas de móveis usados, que possam reaproveitar madeira antiga para outros usos e até consertos. Também
                há a opção de chamar empresas que recolhem entulho. Caso queria descartar seu móvel velho, conheça nosso
                serviço de coleta em casa.</p>
                <p class="font-postos">Encontre os postos de reciclagem mais próximos de você no mecanismo de busca gratuito do nosso site.</p>

        </div>
    </div>
</div>
<!-- fim cards -->
<div class="more-news d-none d-sm-none d-md-block d-lg-block d-xl-block"><a href="#">ASSISTA NOSSO CANAL NO YOUTUBE</a>
</div>
<div class="homePageVideo d-none d-sm-none d-md-block d-lg-block d-xl-block">
    <div class="videoWrapper">
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/pknTQ5L2VbE/?rel=0&amp;controls=0&amp;showinfo=0"> frameborder="0"
            allowfullscreen></iframe>
        <div class="titleReciclar"><a href="#">2019 Recicla Maps</a></div>
    </div>
</div>













@endsection
