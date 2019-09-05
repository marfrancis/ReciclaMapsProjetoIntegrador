<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{

    public function sobre(Request $request){
        return view('sobre');
    }
}
