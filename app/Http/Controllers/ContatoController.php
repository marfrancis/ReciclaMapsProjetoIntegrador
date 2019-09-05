<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MsgContactMailable;
use App\Mail\FormularioContato;

class ContatoController extends Controller
{
    function contato (){
        return view('contato');
    }

    function sendMail(Request $request) {
        try {
            Mail::to(config('mail.to.address'))->send(new FormularioContato($request));
            return view('contato', ['msg' => 'Mensagem enviada com sucesso!']);
        } catch (\Exception $e) {
            //echo $e->getMessage();
            $msgRetorno = "Ocorreu um erro ao tentar enviar sua mensagem. Por favor, tente novamente mais tarde";
            return view('contato', ['msg' => $msgRetorno]);
        }
    }
}
