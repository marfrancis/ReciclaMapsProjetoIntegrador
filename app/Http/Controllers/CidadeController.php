<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\cidade;

class CidadeController extends Controller
{
    public function obterJson(Request $request) {
        if($request->isMethod('GET')){
            return view('cidades', [
                'cidades' => cidade::All()
            ]);
        }
    }

    public function addCidade(Request $request) {
        if($request->isMethod('GET')){
            return view('add-cidade');
        }
    }

    public function cadastrarCidade(Request $request){

        $cidade = new cidade();
        $cidade->cidade = $request->cidade;
        //$cidade->imagem = 'https://dummyimage.com/75x76/b8b8b8/fff/?text='.$request->cidade;

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $cidade->imagem = $filename;
        }
        $cidade->save();
    }

    public function editarCidade(Request $request, $id){

        $cidade = Cidade::find($id);
        $cidade->cidade = $request->cidade;
        //$cidade->imagem = 'https://dummyimage.com/75x76/b8b8b8/fff/?text='.$request->cidade;

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $cidade->imagem = $filename;
        }
        $cidade->save();

        return redirect('relatorio-Cidades');
    }

    public function apagarCidade(Request $request, $id){
        $cidade = Cidade::find($id);
        $cidade->delete();

        return redirect('relatorio-Cidades');
    }

    public function viewEditarCidade(Request $request,$id) {
        if($request->isMethod('GET')){
            $cidade = Cidade::find($id);
            return view('editar-cidade',['cidade'=>$cidade]);
        }
    }
}
