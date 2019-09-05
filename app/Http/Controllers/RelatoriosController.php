<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\empresa;
use App\cidade;
use App\material;
use App\Newsletter;
use App\Post;
use App\Produto;
use App\Categoria;
use App\Pagamento;

class RelatoriosController extends Controller
{

    public function relatorioAdmins (Request $request){
        $query = User::query();
        $query->where('nivel_user','=', 0);
        $users = $query->paginate(5);

        return view('relatorio-Admins', ['admin'=>$users]);
        }

    public function relatorioUsers (Request $request){
        $users = User::paginate(5);
                return view('relatorio-Users',['users'=>$users]);
        }

    public function relatorioEmpresas (Request $request){
        $empresas = Empresa::paginate(5);
                return view('relatorio-Empresas',['empresas'=>$empresas]);
        }

    public function relatorioCidades (Request $request){
        $cidades = Cidade::paginate(5);
                return view('relatorio-Cidades',['cidades'=>$cidades]);
        }

    public function relatorioPosts (Request $request){
        $posts = Post::paginate(5);
                return view('relatorio-Posts',['posts'=>$posts]);
        }

    public function relatorioMateriais (Request $request){
        $materiais = Material::Paginate(5);
                return view('relatorio-Materiais',['materiais'=>$materiais]);
        }

    public function relatorioNewsletter (Request $request){
        $newsletters = Newsletter::paginate(5);
                return view('relatorio-Newsletter',['newsletters'=>$newsletters]);
            }

    public function relatorioProdutos (Request $request){
        $produtos = Produto::paginate(5);
            return view('relatorio-Produtos', ['produtos'=>$produtos]);
    }

    public function relatorioCategorias (Request $request){
        $categorias = Categoria::paginate(5);
            return view('relatorio-Categorias', ['categorias'=>$categorias]);
    }

    public function relatorioPagamentos (Request $request){
        $pagamentos = Pagamento::paginate(5);
            return view('relatorio-Pagamentos', ['pagamentos'=>$pagamentos]);
    }

}
