<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class InternaLojaController extends Controller
{
    public function interna(){
        return view('internaProduto');
    }

    public function exibirProdutoUnico(Request $request, $id){
        $produto = Produto::find($id);
        return view("internaProduto",['produto'=>$produto]);

}

}
