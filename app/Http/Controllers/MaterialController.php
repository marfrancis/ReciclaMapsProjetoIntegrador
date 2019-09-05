<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\material;

class MaterialController extends Controller
{
    public function addMaterial(Request $request) {
        if($request->isMethod('GET')){
            return view('add-material');
        }
    }

    public function cadastrarMaterial(Request $request){
        $material = new material();
        $material->tipoMaterial = $request->tipoMaterial;
        $material->save();


    }

    public function apagarMaterial(Request $request, $id){
        $material = Material::find($id);
        $material->delete();

        return redirect('/relatorio-Materiais');
    }

    public function viewEditarMaterial(Request $request,$id) {
        if($request->isMethod('GET')){
            $material = Material::find($id);
            return view('editar-material',['material'=>$material]);
        }
    }



    public function editarMaterial(Request $request, $id){
        $material = Material::find($id);
        $material->tipoMaterial = $request->tipoMaterial;
        $material->save();

        return redirect('relatorio-Materiais');
    }


}
