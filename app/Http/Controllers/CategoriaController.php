<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function categorias(){
        return view ('add-categoria');
    }

    public function cadastrarCategoria(Request $request){
        $categoria = new Categoria();
            $categoria->nome_categoria = $request->nome_categoria;
            $categoria->save();


    }

    public function apagarCategoria(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect('relatorio-Categorias');
    }

    public function viewEditarCategoria (Request $request, $id){
        if($request->isMethod('GET')){
            $categoria = Categoria::find($id);
            return view('editar-categoria',['categoria'=>$categoria]);
        }
    }

    public function editarCategoria(Request $request, $id){

        $categoria = Categoria::find($id);
        $categoria->categoria = strtoupper($request->categoria);
        //$cidade->imagem = 'https://dummyimage.com/75x76/b8b8b8/fff/?text='.$request->cidade;
        $categoria->save();

        return redirect('relatorio-Categorias');
    }

}
