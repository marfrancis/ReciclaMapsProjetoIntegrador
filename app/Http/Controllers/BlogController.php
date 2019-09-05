<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function blog(Request $request) {
        $posts = Post::All();
        if($request->isMethod('GET')){
            return view('blog', [
                'posts' => $posts,
                'postagens' => Post::orderBy('id', 'DESC')->paginate(6),
                'ultimos' => Post::take(3)->orderBy('id', 'DESC')->get()
            ]);
        }
}

    public function blogdetails(Request $request, $id) {
        $post = Post::find($id);
        $posts = Post::All();
        if($request->isMethod('GET')){
            return view('blog-details', [
                'post' => $post,
                'posts' => $posts,
                'ultimos' => Post::take(3)->orderBy('id', 'DESC')->get()
            ]);
        }
    }

    public function addPostagem(Request $request) {
        if($request->isMethod('GET')){
            return view('add-postagens');
        }

    }

    public function cadastrarPostagem(Request $request){
        $post = new post();
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->data = date("Y-m-d H:i:s", strtotime($request->data));

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $post->imagem = $filename;
        }
        $post->save();

        // return redirect('relatorio-Posts');
    }

    public function editarPost(Request $request, $id){

        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->data = date("Y-m-d H:i:s", strtotime($request->data));

        if($request->hasfile('imagem'))
        {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage/img/', $filename);
            $post->imagem = $filename;
        }
        $post->save();

        return redirect('relatorio-Posts');
    }

    public function apagarPost(Request $request, $id){
        $post = Post::find($id);
        $post->delete();

        return redirect('relatorio-Posts');
    }

    public function viewEditarPost(Request $request,$id) {
        if($request->isMethod('GET')){
            $post = Post::find($id);
            return view('editar-post',['post'=>$post]);
        }
    }




}
