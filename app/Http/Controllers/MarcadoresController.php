<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;
use App\material;
use App\cidade;
use Illuminate\Support\Facades\DB;

class MarcadoresController extends Controller
{
    private function getEmpresasFields() {
        return "`empresas`.`id` AS empresas_id, `empresas`.`nome` AS empresas_nome, `empresas`.`endereco` AS empresas_endereco, `empresas`.`numero` AS empresas_numero, `empresas`.`complemento` AS empresas_complemento, `empresas`.`cep` AS empresas_cep, `empresas`.`bairro` AS empresas_bairro, `empresas`.`estado` AS empresas_estado, `empresas`.`telefone` AS empresas_telefone, `empresas`.`latitude` AS empresas_latitude, `empresas`.`longitude` AS empresas_longitude,`empresas`.`site` AS empresas_site";
    }

    private function getCidadesFields() {
        return "`cidades`.`id` AS cidades_id, `cidades`.`cidade` AS cidades_cidade, `cidades`.`imagem` AS cidades_imagem";
    }

    function getMateriaisFields() {
        return "`materiais`.`id` AS materiais_id, `materiais`.`tipoMaterial` AS materiais_tipoMaterial";
    }

    public function marcadores($cidadeID = '', $materiaisIDs = '') {

        $empresasFields = $this->getEmpresasFields();
        $cidadesFields = $this->getCidadesFields();
        $materiaisFields = $this->getMateriaisFields();

        $marcadores = DB::select( DB::raw("SELECT {$empresasFields}, {$cidadesFields}, {$materiaisFields}
        FROM materiais, materiais_empresas, empresas, cidades_empresas, cidades

        WHERE
        `materiais`.`id` = `materiais_empresas`.`materiaisReciclados_id` AND
        `materiais_empresas`.`cadastroEmpresas_id` = `empresas`.`id` AND
        `cidades_empresas`.`cadastroEmpresas_id` = `empresas`.`id` AND
        `cidades`.`id` = `cidades_empresas`.`cidades_id` AND

        `cidades`.`id` in ({$cidadeID}) AND
        `materiais`.`id` in ({$materiaisIDs})"));

        $empresas = [];

        foreach($marcadores as $marcador) {
            foreach($marcador as $campo => $valor) {
                if( $campo != 'materiais_tipoMaterial' ) {
                    $empresas[$marcador->empresas_id][$campo] = $valor;
                } else {
                    if( !isset($empresas[$marcador->empresas_id]['materiais_tipoMaterial']) ) $empresas[$marcador->empresas_id]['materiais_tipoMaterial'] = [];
                    $empresas[$marcador->empresas_id]['materiais_tipoMaterial'][] = str_slug($valor);
                }
            }
        }

        $retorno = [];

        foreach($empresas as $v) { $retorno[] = $v; }

        // dd($marcadores,$retorno);

        //GROUP BY empresas.id

        return json_encode($retorno);
    }
}
