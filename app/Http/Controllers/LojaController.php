<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class LojaController extends Controller
{
    public function loja(Request $request) {
        // if($request->isMethod('GET')){
        //     return view('loja');
        // }
        $produto = new Produto();
        $produtos = $produto->paginate(6);
        $categorias = Categoria::all();
        return view("loja",['produtos'=>$produtos,
         'categorias'=>$categorias,
         'ultimosProdutos' => Produto::take(3)->orderBy('id', 'DESC')->get(),
         'carrinhoCount' => session()->has('carrinho') ? sizeof(session()->get('carrinho')) : 0,
         ]);

    }
}
