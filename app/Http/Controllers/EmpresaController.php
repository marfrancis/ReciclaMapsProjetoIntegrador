<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;
use App\material;
use App\cidade;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function addEmpresa(Request $request) {
        return view('add-empresa',[
            'materiais' =>  material::All(),
            'cidades' =>  cidade::All(),
            ]
        );
    }

    public function cadastrarEmpresa(Request $request){
        $empresa = new Empresa();
        $empresa->nome = $request->nome;
        $empresa->endereco = $request->endereco;
        $empresa->numero = $request->numero;
        $empresa->complemento = $request->complemento;
        $empresa->cep = $request->cep;
        $empresa->bairro = $request->bairro;
        $empresa->complemento = $request->complemento;
        $empresa->estado = $request->estado;
        $empresa->telefone = $request->telefone;
        $empresa->site = $request->site;
        $empresa->complemento = $request->complemento;
        $empresa->latitude = $request->latitude;
        $empresa->longitude = $request->longitude;
        $empresa->save();

        DB::insert('INSERT INTO `cidades_empresas` (`cidades_id`, `cadastroEmpresas_id`) VALUES (?,?);', [$request->cidade, $empresa->id]);

        foreach($request->materiais as $material_id) {
            DB::insert('INSERT INTO `materiais_empresas` (`materiaisReciclados_id`,`cadastroEmpresas_id`) VALUES (?,?);', [$material_id, $empresa->id]);
        }


    }

    public function apagarEmpresa(Request $request, $id){
        $empresa = Empresa::find($id);
        $empresa->delete();

        return redirect('relatorio-Empresas');
    }

    public function ViewEditarEmpresa(Request $request, $id) {
        $empresa = Empresa::find($id);
        return view('editar-empresa',[
            'empresa'=> $empresa,
            'materiais' =>  material::All(),
            'cidades' =>  cidade::All(),
            ]
        );
    }

    public function editarEmpresa(Request $request,$id){
        $empresa = Empresa::find($id);
        $empresa->nome = $request->nome;
        $empresa->endereco = $request->endereco;
        $empresa->numero = $request->numero;
        $empresa->complemento = $request->complemento;
        $empresa->cep = $request->cep;
        $empresa->bairro = $request->bairro;
        $empresa->complemento = $request->complemento;
        $empresa->estado = $request->estado;
        $empresa->telefone = $request->telefone;
        $empresa->site = $request->site;
        $empresa->complemento = $request->complemento;
        $empresa->latitude = $request->latitude;
        $empresa->longitude = $request->longitude;
        $empresa->save();

        DB::insert('INSERT INTO `cidades_empresas` (`cidades_id`, `cadastroEmpresas_id`) VALUES (?,?);', [$request->cidade, $empresa->id]);

        foreach($request->materiais as $material_id) {
            DB::insert('INSERT INTO `materiais_empresas` (`materiaisReciclados_id`,`cadastroEmpresas_id`) VALUES (?,?);', [$material_id, $empresa->id]);
        }

        return redirect('relatorio-Empresas');

    }


}
