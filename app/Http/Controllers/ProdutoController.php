<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;


class ProdutoController extends Controller
{
    public function addProduto(Request $request){
        return view ('add-produto', [
            'categorias' => categoria::All()
        ]);

    }



    public function cadastrarProduto(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->quantidade_estoque = $request->quantidade_estoque;
        $produto->categorias_id = $request->categorias_id;
        $produto->save();

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $produto->imagem = $filename;
        }
        $produto->save();



    }

    public function exibirProdutos(Request $request){
        $produto = Produto::all();
        var_dump($produto);
        $produtos = $produto->paginate(6);
        $categorias = Categoria::all();
        return view("loja",['produtos'=>$produtos,
         'categorias'=>$categorias,
         'ultimosProdutos' => Produto::take(3)->orderBy('id', 'DESC')->get()]);

    }

    public function editarProduto(Request $request, $id){

        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->quantidade_estoque = $request->quantidade_estoque;
        $produto->categorias_id = $request->categorias_id;
        $produto->save();

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $produto->imagem = $filename;
        }
        $produto->save();
        return redirect('relatorio-Produtos');
    }

    public function viewEditarProduto(Request $request,$id) {
        if($request->isMethod('GET')){
            $produto = Produto::find($id);
            return view('editar-Produto',['produto'=>$produto]);
        }
    }

    public function apagarProduto(Request $request, $id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('relatorio-Produtos');
    }

}










