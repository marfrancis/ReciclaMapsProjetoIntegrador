@extends('layouts.app')
@section('content')

<?php
$root = 'http://www.reciclamaps.com.br';
$foto = 'mapahome.png';
$title = $facebook_title = "Tabela Recicláveis";
$keywords = 'reciclamaps,reciclagem, reciclar, doar, descarte, consumo, consciente, descartar, como, descartar, Construção e Demolição, Diversos, Eletrodomésticos, Eletrônicos, Embalagens longa vida, Lâmpadas, Líquidos e Produtos Químicos, Materiais Orgânicos, Metais, Móveis, Óleos, Papel e Papelão, Pilhas e Baterias, Plástico, Veículos, Vestuário, Vidro';
$description = $facebook_description = substr(strip_tags('<p>Você pode ajudar o meio ambiente com uma ação muito simples. O mapa interativo do ReciclaMaps mostra os pontos de coleta mais próximos a você.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container-fuid mx-2 mt-2 mb-2">
<div class="tg-wrap">
    <table class="table table-light text-center ">
        <thead class="thead-light">
                <tbody>
                        <tr>
                            <th> TABELA DE MATERIAIS RECICLÁVEIS OU NÃO RECICLÁVEIS</th>
                        </tr>
                    </tbody>
        </thead>

    </table>
    <table class="tg mceItemTable " style="width:100%">
    <colgroup>
    <col style="width:10%">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:20%">
    </colgroup>

      <tbody><tr>
        <th class="tg-tq8n text-black-50">Reciclável?</th>
        <th class="tg-cvx0 text-black-50">Papéis</th>
        <th class="tg-whg9 text-black-50">Plásticos</th>
        <th class="tg-kc6g text-black-50">Vidros</th>
        <th class="tg-zk3q text-black-50">Metais</th>
      </tr>
      <tr>
        <td class="tg-h2ec" rowspan="7">Sim</td>
        <td class="tg-vzrn">Papéis de escritório, usados para escrever e/ou imprimir (papéis de caderno, jornais, revistas, pan etos etc.)</td>
        <td class="tg-b1z4">Embalagens e tampas de xampus, detergentes, garrafas PET e outros produtos de uso doméstico</td>
        <td class="tg-bmil">Garrafas de bebidas</td>
        <td class="tg-zkv2">Latas de óleo, de sardinha, de creme de leite</td>
      </tr>
      <tr>
        <td class="tg-vzrn">Cartões e cartolinas, caixas de papelão</td>
        <td class="tg-b1z4">Embalagens plásticas de alimentos</td>
        <td class="tg-bmil">Frascos em geral (molhos, condimentos, remédios, perfumes, produtos de limpeza etc.)</td>
        <td class="tg-zkv2">Alumínio (latas de refrigerantes, de cerveja, de chás, tampa do iogurte, folhas de alumínio etc.)</td>
      </tr>
      <tr>
        <td class="tg-vzrn">Embalagem longa vida</td>
        <td class="tg-b1z4">Utensílios plásticos (canetas esferográ cas, escovas de dentes, baldes, artigos de cozinha, copos etc.)</td>
        <td class="tg-bmil">Cacos de vidro</td>
        <td class="tg-zkv2">Ferragens</td>
      </tr>
      <tr>
        <td class="tg-vzrn">Papéis de embalagem, papéis de embrulho de presentes</td>
        <td class="tg-b1z4">Sacolas plásticas</td>
        <td class="tg-bmil"><br mce_bogus="1"></td>
        <td class="tg-zkv2">Arame</td>
      </tr>
      <tr>
        <td class="tg-vzrn">Papel de seda</td>
        <td class="tg-b1z4">Isopor</td>
        <td class="tg-bmil"><br mce_bogus="1"></td>
        <td class="tg-zkv2">Fios de cobre</td>
      </tr>
      <tr>
        <td class="tg-vzrn"><br mce_bogus="1"></td>
        <td class="tg-b1z4">Canos e tubos de PVC</td>
        <td class="tg-bmil"><br mce_bogus="1"></td>
        <td class="tg-zkv2">Panela sem cabo</td>
      </tr>
      <tr>
        <td class="tg-vzrn"><br mce_bogus="1"></td>
        <td class="tg-b1z4">Acrílico</td>
        <td class="tg-bmil"><br mce_bogus="1"></td>
        <td class="tg-zkv2">Embalagem de marmitex</td>
      </tr>
      <tr>
        <td class="tg-bfah" rowspan="8">Não</td>
        <td class="tg-4jib">Papéis sanitários (papel higiênico e lenços de papel)</td>
        <td class="tg-6l7w">Plástico tipo celofane</td>
        <td class="tg-b8mg">Vidros de janelas</td>
        <td class="tg-s9lv">Esponja de aço</td>
      </tr>
      <tr>
        <td class="tg-4jib">Papéis sujos, engordurados ou contaminados com substâncias nocivas à saúde</td>
        <td class="tg-6l7w">Embalagens plásticas metalizadas, como de alguns salgadinhos</td>
        <td class="tg-b8mg">Vidros de automóveis</td>
        <td class="tg-s9lv">Lata de tinta</td>
      </tr>
      <tr>
        <td class="tg-4jib">Papéis encerados, com substâncias impermeáveis, e revestidos com silicone ou para na</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg">Tubos de televisão e válvulas</td>
        <td class="tg-s9lv">Lata de verniz</td>
      </tr>
      <tr>
        <td class="tg-4jib">Papel vegetal</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg">Espelho</td>
        <td class="tg-s9lv"><br mce_bogus="1"></td>
      </tr>
      <tr>
        <td class="tg-4jib">Papéis de cupom  scal, de comprovante de cartão de crédito/débito, de extrato bancário</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg">Cristal</td>
        <td class="tg-s9lv"><br mce_bogus="1"></td>
      </tr>
      <tr>
        <td class="tg-4jib">Papel fotográfico, fotografias</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg"><br mce_bogus="1"></td>
        <td class="tg-s9lv"><br mce_bogus="1"></td>
      </tr>
      <tr>
        <td class="tg-4jib">Fitas e etiquetas adesivas</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg"><br mce_bogus="1"></td>
        <td class="tg-s9lv"><br mce_bogus="1"></td>
      </tr>
      <tr>
        <td class="tg-4jib">Papéis recobertos com outro tipo de material, como o plástico (papéis plasti cados) ou alumínio (papéis laminados)</td>
        <td class="tg-6l7w"><br mce_bogus="1"></td>
        <td class="tg-b8mg"><br mce_bogus="1"></td>
        <td class="tg-s9lv"><br mce_bogus="1"></td>
      </tr>
    </tbody>
    </table>
    </div>
</div>



@endsection
