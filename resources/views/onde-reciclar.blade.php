@extends('layouts.appteste')

@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'slide1-1.jpg';
$title = $facebook_title = "Onde Reciclar?";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>



<div class="title-block">


    <h1
        style="vertical-align: inherit; font-size: 275%; padding: 0.25em 0; font-family: 'Roboto', sans-serif; padding: 2.25rem;">
        <b>Onde</b> você vai reciclar?</h1>


</div>
<main class="container-fluid no-gutters mt-5">
    <div class="container em-casa">

        <h3
            style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif; text-transform: uppercase;">
            Em casa</h3>
        <p class="mb-3"><strong style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">A chave
                para um programa bem-sucedido de reciclagem doméstica é a configuração da sua lixeira.</strong></p>
        <p class="mb-3">Depois de aprender quais materiais o centro de entrega local aceita (para encontrar um ponto de
            coleta perto de você: <a style="color: #b5b700; text-decoration: underline;" href="/mapa">clique aqui</a> ),
            configure um sistema de compartimento de armazenamento correspondente. A garagem ou sua cozinha é um bom
            lugar para localizar os caixotes do lixo; se você guardar suas caixas do lado de fora, as tampas precisarão
            ser cobertas para proteger o conteúdo de pragas e vento. Tente usar recipientes menores, pois eles serão
            mais fáceis de levantar quando cheios. Rotule as caixas de reciclagem para garantir que os materiais sejam
            separados corretamente. Uma vez que seu sistema está configurado, a reciclagem é fácil.</p>
        <p>Enxágue garrafas e embalagens recicláveis ​​antes de depositar na lixeira. Isso evita moscas em casa e na
            estação de reciclagem.</p>


    </div>
</main>

<main class="container-fluid no-gutters green mt-5 pb-3 pt-3">
    <div class="container green em-casa">
        <div class="wrapper">
            <p></p>
            <h3
                style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif; text-transform: uppercase;">
                No trabalho</h3>
            <p class="mb-3"><strong
                    style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">Estabelecer uma
                    iniciativa de reciclagem de escritório poderá
                    economizar o dinheiro da sua empresa.</strong></p>
            <p class="mb-3">O primeiro passo para configurar um programa eficaz de reciclagem é pesquisar seu local de
                trabalho e descobrir exatamente o que está acontecendo nas lixeiras. Em seguida, você pode descobrir
                quais produtos são recicláveis ​​e quais deseja incluir na sua iniciativa de reciclagem no local de
                trabalho. A maneira mais fácil de fazer isso é entrar em contato com quem coleta sua reciclagem, seja o
                seu programa de gerenciamento de resíduos municipais ou o gerenciamento de edifícios, e perguntando
                exatamente o que eles reciclam e o que não reciclam.</p>
            <p class="mb-3">Geralmente, faz sentido começar pequeno. Papel, plástico, vidro e latas são um bom ponto de
                partida. Alguns meses após o lançamento do programa, à medida que a participação e a conscientização dos
                funcionários aumentam, você pode passar para outros objetos recicláveis ​​maiores, como cartuchos de
                tinta, computadores e outros eletrônicos. Tudo o que você decidir reciclar, precisará nomear um
                coordenador para supervisionar e organizar o programa. Idealmente, essa pessoa deve estar entusiasmada
                com a sustentabilidade e disposta a ajudar a ver toda a iniciativa de reciclagem.</p>
            <p class="mb-3">A reciclagem no escritório não é apenas uma forma de investimento social corporativo, mas
                você pode colher os frutos com credenciais ecológicas, como créditos de carbono e desenvolvimento
                empresarial.</p>
            <h4 style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif;">
                Incentivar a participação</h4>
            <p class="mb-3">Mesmo que você tenha encontrado o coordenador do programa perfeito, uma iniciativa de
                reciclagem bem-sucedida precisa vir de cima para baixo para motivar os funcionários a participar. As
                pessoas tendem a responder mais fortemente quando o CEO incentiva e motiva a equipe. Seja estratégico
                sobre a colocação de lixeiras. Eles precisam ir a lugares onde é gerado mais desperdício, como salas de
                cópias, perto de impressoras, salas de diretoria e em lanchonetes da equipe. Eles também precisam ser
                facilmente identificáveis, com sinalização clara indicando que são apenas para materiais recicláveis.
                (Certifique-se de especificar qual material entra em qual lixeira.) Além de lixeiras práticas, outra
                maneira de incentivar os funcionários a participar é através de uma comunicação consistente. Verifique
                se todos os funcionários do escritório estão cientes do programa e de seus objetivos. Acompanhe o
                progresso em público, contando materiais reciclados,</p>
            <h4 style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif;">
                Funcionários em treinamento</h4>
            <p class="mb-3">É essencial entrar em contato com a gerência do prédio ou com o proprietário para
                notificá-los sobre sua iniciativa de reciclagem, para que eles possam garantir que toda a equipe de
                limpeza esteja na mesma página. Você precisa de um programa educacional contínuo que permita que seus
                funcionários saibam os detalhes do seu programa e o que eles podem e não podem reciclar.</p>
            <h4 style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif;">
                Organização da coleção</h4>
            <p class="mb-3">Uma das partes mais importantes do processo é decidir como coletar e descartar os materiais
                recicláveis.</p>
            <p class="mb-3">Existem muitos tipos diferentes de produtos de papel, como papel para impressora, revistas,
                papelão e papel de construção.</p>
            <ul>
                <li>Você pode separar cada tipo específico, o que pode tornar seus materiais recicláveis ​​mais valiosos
                    se descartá-los em um centro de entrega e aumentar a conscientização dos funcionários sobre os
                    detalhes específicos da reciclagem.</li>
                <li>Você também pode coletar todos os produtos de papel em uma lixeira e plásticos em outra, em um
                    método chamado coleção de vinagre. Isso é menos trabalhoso, mas os materiais podem ser contaminados
                    facilmente quando são misturados.</li>
                <li>Muitas empresas estão localizadas em municípios com serviços de reciclagem ou em complexos de
                    escritórios onde a gerência é responsável pela disposição de resíduos. Entre em contato com quem
                    cuida do seu lixo para providenciar o descarte e a coleta adequados dos materiais que você reciclar.
                </li>
                <li>Pode ser necessário contratar um serviço externo. Isso dependerá do tamanho da sua empresa, pois
                    muitos recicladores comerciais exigem um volume específico de resíduos que pode ser mais do que a
                    sua empresa gera. Considere fazer parceria com outras empresas, contratar empresas menores ou
                    providenciar para deixar a reciclagem nos pontos de coleta. Outra opção viável é doar para
                    instituições de caridade. Muitas organizações locais se oferecerão para buscar materiais reciclados,
                    principalmente eletrônicos. É outra maneira de incentivar os funcionários, criando um senso de boa
                    vontade.</li>
            </ul>
            <h4 style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif;">
                Colocando mais etapas</h4>
            <p class="mb-3">Os programas de reciclagem costumam ser apenas uma parte menor de um programa mais amplo no
                local de trabalho para incentivar práticas comerciais sustentáveis. Se você deseja economizar em custos,
                combinar seu programa de reciclagem com um esforço para reduzir o desperdício de escritório e reutilizar
                os produtos existentes pode ser uma estratégia comercial inteligente. Ao auditar o que entra nas
                lixeiras, você pode perceber que está desperdiçando muito papel. Tente encontrar tarefas que possam não
                ter papel ou produtos que possam ser reutilizados.</p>
            <p class="mb-5">A reciclagem, a redução e a reutilização não precisam parar no local de trabalho, mas também
                podem ser feitas em casa.</p>
            <p></p>
        </div>
    </div>
</main>

<main class="container-fluid no-gutters mt-5">
    <div class="container em-casa">
        <div class="wrapper">
            <p></p>
            <h3
                style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif; text-transform: uppercase;">
                Na escola</h3>
            <p class="mb-3"><strong style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">Os
                    benefícios de programas de reciclagem escolar bem administrados podem ir muito além do recinto da
                    escola; eles podem alcançar as comunidades vizinhas que podem se beneficiar de instalações de
                    entrega ou unidades de coleta de PET. Os alunos também transmitem o estilo de vida da reciclagem
                    para suas famílias e amigos.</strong></p>
            <p class="mb-3">Um programa de reciclagem escolar pode ser uma 'lição' prática e interdisciplinar que educa
                os alunos sobre o meio ambiente e como reduzir o desperdício (incluindo materiais PET valiosos) que vão
                para o aterro, assegurando ao mesmo tempo responsabilidade e orgulho pessoais pela manutenção da escola
                motivos.</p>
            <p class="mb-3">A venda de materiais recicláveis ​​também pode se tornar uma fonte de receita para a sua
                escola e ser usada para financiar excursões esportivas, livros, computadores, programas de computador e
                muito mais.</p>
            <p class="mb-3">Antes de sua escola iniciar um programa de reciclagem, há três etapas importantes que
                precisam ser concluídas primeiro:</p>
            <p class="mb-3"><strong style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">Etapa
                    1:</strong> Criar um comitê de gerenciamento de resíduos <br>
                <strong style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">Etapa 2:</strong>
                Realizar uma auditoria de resíduos <br>
                <strong style="font-weight: 700; font-family: 'Roboto', sans-serif; font-size: 16px;">Etapa 3:</strong>
                Configurar o centro de coleta de reciclagem da escola</p>
            <p class="mb-3">Faça o download do nosso 'Guia da Escola para Reciclagem' completo para obter dicas e
                truques sobre como iniciar a reciclagem de PET na escola.<br>
            </p>
            <div class="downloads"><a
                    href="#">Guia da Escola de
                    Reciclagem</a></div>
            <p></p>
            <p class="mb-3"> Entre em contato conosco para mais informações <a
                    href="mailto:contato@reciclamaps.com.br">contato@reciclamaps.com.br</a> .</p>
            <p></p>
        </div>
    </div>
</main>
<main class="container-fluid no-gutters blue mt-5 pb-3 pt-3">
    <div class="container blue em-casa">
        <div class="wrapper">
            <p></p>
            <h3
                style="vertical-align: inherit; font-size: 200%; padding: 0.25em 0; font-family: 'Roboto', sans-serif; text-transform: uppercase;">
                Na Universidade</h3>
            <p class="mb-3">Siga estas etapas principais para iniciar um programa de reciclagem em seu campus:</p>
            <ul>
                <li>Obtenha adesão de um gerente acadêmico e / ou administrativo da universidade;</li>
                <li>Nomear um coordenador do projeto e um comitê de redução de resíduos no campus;</li>
                <li>Analisar diferentes aspectos da operação de um campus para identificar possíveis fontes de resíduos
                    evitáveis ​​por meio de uma auditoria de resíduos;</li>
                <li>Treinar a equipe do departamento de gerenciamento de instalações para identificar os principais
                    fluxos de resíduos e fontes de materiais recicláveis;</li>
                <li>Configurar uma infraestrutura de coleta;</li>
                <li>Estabelecer processos relevantes de treinamento e comunicação;</li>
                <li>Comunique-se efetivamente no campus sobre o programa.</li>
            </ul>
            <p></p>
            <div class="downloads"><a
                    href="#">Guia
                    de Iniciativas de Reciclagem Universitária</a></div>
            <p></p>
            <p></p>
        </div>
    </div>
</main>




@endsection
