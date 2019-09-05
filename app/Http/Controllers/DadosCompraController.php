<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Pagamento;

class DadosCompraController extends Controller
{


    public function dadosCompra(Request $request){

        if(!session()->has('carrinho')) return redirect('/');

        $pagamentos = Pagamento::all();
        return view("dadoscompra",[
            'produtos'=> Produto::all()->whereIn('id', session()->get('carrinho')) ,
        'pagamentos' => $pagamentos,
        'carrinhoCount' => session()->has('carrinho') ? sizeof(session()->get('carrinho')) : 0,
        ]);

}
}
