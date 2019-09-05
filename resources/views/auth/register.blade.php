@extends('layouts.app')

@section('content')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="jumbotron col-md-8 border rounded border-success">
        <div class="col-md-12">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 container  p-4 text-center">
                <div class="logoRegister mb-4">
                        <a href="index.html">
                            <img class="logoRegister mb-3" src="img/logologin.png" alt>
                        </a>
                    <div>
                    <div class="form-group row">
                    
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sobrenome" class="col-md-4 col-form-label text-md-right">{{ __('Sobrenome') }}</label>

                        <div class="col-md-6">
                            <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="sobrenome" autofocus>

                            @error('sobrenome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                        <div class="col-md-6">
                            <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{ old('data_nascimento') }}" required autocomplete="data_nascimento" style="font-style:italic">

                            @error('data_nascimento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                        <div class="col-md-6">
                            <input id="telefone" type="number" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" mask="(__) _____-____" placeholder="Ex: (xx) xxxx-xxxx"style="font-style:italic">

                            @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                        <div class="col-md-6">
                            <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" required autocomplete="cep" mask="_____-___" placeholder="Ex: xxxxx-xxx" style="font-style:italic">

                            @error('cep')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                        <div class="col-md-6">
                            <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" required autocomplete="endereco">

                            @error('endereco')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>

                        <div class="col-md-6">
                            <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" required autocomplete="numero">

                            @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                        <div class="col-md-6">
                            <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" required autocomplete="complemento">

                            @error('complemento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                        <div class="col-md-6">
                            <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" required autocomplete="bairro">

                            @error('bairro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="estado" class="col-md-4 col-form-label text-md-right">{{ _('Estado') }}</label>
                        <div class="col-md-6">
                            <select id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" required autocomplete="estado">
                            <option selected>Selecione</option>
                            <option>São Paulo</option>
                            </select>
                            @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ _('Cidade') }}</label>
                        <div class="col-md-6">
                            <select id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" required autocomplete="cidade">
                            <option selected>Selecione</option>
                            <option>São Paulo</option>
                            </select>
                            @error('cidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="display:none" for="nivelUser" class="col-md-4 col-form-label text-md-right">{{ __('Nivel usuário') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="hidden" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Insira sua foto</label>
                            <div class="col-md-6">
                                <input type="file" name="avatar" id="avatar" accept="image/png,image/jpg">
                            </div>
                        </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Cadastrar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection
