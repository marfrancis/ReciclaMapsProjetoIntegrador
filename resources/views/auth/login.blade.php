@extends('layouts.app')

@section('content')

<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Login";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header login-form">{{ __('Faça o login na sua conta') }}</div>

                <div class="card-body">
                        <div class="logo text-center">
                            <a href="index.html">
                                <img src="img/logologin.png" alt="">
                            </a>
                        </div>

                    <div class="container col-md-12">
                        <div class="row ">
                            <ul class="container text-center m-2">
                                <li class="list-inline-item m-3">
                                    <a href="/auth/facebook" >
                                        <img src="{{ asset('img/loginFacebook2.png') }}" style="width:45px; height:45px;">
                                    </a>
                                </li>
                                <li class="list-inline-item m-3">
                                    <a href="/auth/google" >
                                        <img src="{{ asset('img/loginGoogle2.png') }}" style="width:45px; height:45px;">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 mx-auto m-0">
                    <div class="row">
                    <ul class="container text-center "  style="list-style-type:none;">
                        <div class="login-or">
                            <li class="col-md-4 list-inline-item p-0 m-0">
                                <hr class="hr-or ">
                            </li>

                            <li class="col-md-2 list-inline-item m-0 p-0">
                                <span class="span-or " style="width:30px; height:30px;">ou</span>
                            </li>
                            
                            <li class="col-md-4 list-inline-item p-0 m-0">
                                <hr class="hr-or ">
                            </li>
                        </div>
                    </ul>
                    </div>
                    </div>
                    
                    <form class="login-form-text mt-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Manter Conectado') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENTRAR') }}
                                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6 offset-md-4 mt-1">

                            <p class="mt-3">Não tem uma conta? <a href="/register">Cadastre-se agora!</a>
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
