<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{
    public function addPagamento (){
        return view ('add-pagamento');
    }

    public function cadastrarPagamento (Request $request){
        $pagamento = new Pagamento();
        $pagamento->modo_pagamento = $request->modo_pagamento;
        $pagamento->save();
    }

    public function apagarPagamento (Request $request, $id){
        $pagamento = Pagamento::find($id);
        $pagamento->delete();
    }

    public function editarPagamento(Request $request, $id){

        $pagamento = Pagamento::find($id);
        $pagamento->modo_pagamento = $request->modo_pagamento;

        $pagamento->save();

        return redirect('relatorio-Pagamentos');
    }

    public function viewEditarPagamento(Request $request, $id) {
        if($request->isMethod('GET')){
            $pagamento = Pagamento::find($id);
            return view('editar-Pagamento',['pagamento'=>$pagamento]);
        }
    }
}
