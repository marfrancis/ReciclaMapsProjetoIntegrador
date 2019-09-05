<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\Validator;
use App\Post;

class NewsletterController extends Controller
{

    public function home(Request $request){
        if($request->isMethod('GET')){
            return view("home",[
                'ultimos' => Post::paginate(3)
            ]);
        }

        $messages = [
            'unique'=> "Esse email já existe!",
            'required' => "Você deve digitar um e-mail",
            'email' => "Você deve digitar um email valido!"
        ];

        $xpto = Validator::make($request->all(), [
            'email' => 'required|Unique:Newsletters|email'
        ],$messages)->validate();

        $novaNews = new Newsletter();
        $novaNews->name = $request->name;
        $novaNews->email = $request->email;
        $resultado = $novaNews->save();



            return view ('home',["resultado"=>$resultado]);

    }

    public function cadastrarNewsletter(Request $request){
        $newsletter = new newsletter();
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        $newsletter->save();

        // return view('add-newsletter', [
        //     'success' => "Cadastro realizado com sucesso!"
        // ]);



    }

    public function addnewsletter(Request $request){
        if($request->isMethod('GET')){
            return view('add-newsletter');
        }
    }
    public function apagarNews(Request $request, $id){
        $newsletter = newsletter::find($id);
        $newsletter->delete();

        return redirect('/relatorio-Newsletter');
    }

    public function editarNews(Request $request,$id) {
        if($request->isMethod('GET')){
            $newsletter = Newsletter::find($id);
            return view('/editar-news',['newsletter'=>$newsletter]);
        }

        $newsletter = newsletter::find($id);
        $newsletter->name = $request->name;
        $newsletter->email = $request->email;
        $resultado = $newsletter->save();

        return redirect ('/relatorio-Newsletter');

}

}
