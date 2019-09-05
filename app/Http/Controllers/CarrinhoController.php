<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CarrinhoController extends Controller
{
    public function carrinho(Request $request){
        if ($request->session() -> has('carrinho')) {
            $carrinho = session() ->get('carrinho');
        }
    }

    public function carrinhoProduto(Request $request){
        if(!$request->session()->has('carrinho')) return redirect('/');
        $produto = Produto::all()->whereIn('id', $request->session()->get('carrinho'));
        return view("carrinho",['produtos'=>$produto]);
    }

    public function addCarrinho(Request $request, $id) {
        $carrinho = $request->session()->has('carrinho') ? $request->session()->get('carrinho') : [];
        if(array_search($carrinho, [$id]) === false) {
            $carrinho[] = $id;
            $request->session() ->put('carrinho', $carrinho);
        }
        return redirect('/carrinho');
    }

    public function remover(Request $request, $id) {
        if ($request->session()->has('carrinho')) {
            $carrinho = session()->get('carrinho');
            foreach($carrinho as $key => $produto_id) {
                if( $produto_id == $id ) unset($carrinho[$key]);
            }
            $carrinho = session()->put('carrinho', $carrinho);
        }
        return redirect('/carrinho');
    }
}
