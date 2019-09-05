<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class UserPerfilController extends Controller
{
    public function userPerfil(Request $request) {
        $user = auth()->user();
        return view('editar-userPerfil', ['authUser' => $user] );
    }

    public function editarPerfil (Request $request){
        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->sobrenome = $request->sobrenome;

        $avatar = $request['avatar'];
        if ($avatar != null) {
            $caminhoPrivadoImg = $avatar->store('avatars', ['disk' => 'public_uploads']);
            $caminhoPublicoImg = "uploads/$caminhoPrivadoImg";
            $user->img = $caminhoPublicoImg;
        }

        $password = $request->password;
        if(strlen(trim($password)) != 0) {
            $user->password = Hash::make($password);
        }

        $user->save();

        return response()->json($user);
    }
}
