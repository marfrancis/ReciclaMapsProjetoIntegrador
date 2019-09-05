<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{
    public function addAdmin(Request $request){
        if($request->isMethod('GET')){
            return view('add-admin');
        }
    }


    protected function cadastrarAdmin(Request $request)
    { 
        $admin =  User::create([
            'name' => $request -> name,
            'sobrenome' => "Admin",
            'cep' => "00000000",
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
            'nivel_user'=> 0,
            
        ]);
        $admin->save();
        return redirect('/add-admin');
    }

    //Function mostrarLista é apenas de teste//
    protected function mostrarLista(){  
        $adminlista = User::where('nivel_user', 0)->get();
        return view('mostrarAdmin', ['adminLista' => $adminlista]);
    }


    public function deletarAdmin($id){
        $deletado = User::find($id);
        $deletado->delete();

        return redirect('/relatorio-Admins');
   }


   public function viewEditarAdmin(Request $request,$id){
       if ($request->ismethod('GET')){
            $editado = User::find($id);
           return view('editar-admin', ['editado'=>$editado]);
       }
    }


   public function editarAdmin(Request $request, $id){
    if ($request->ismethod('POST')){
        $editado = User::find($id);
        $editado->name = $request->name;
        $editado->email = $request->email;
        $editado->password = Hash::make($request->password);
     
        $editado->save();

       return redirect('/relatorio-Admins');
    }
   }
   
}