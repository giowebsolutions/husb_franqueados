@extends('layouts.default')

@section('content')

@section('title')
Login
@endsection
<div class="container">

    <form class="form form-login" method="POST" action="{{ route('user.login')}}" method="POST">
        @csrf
        <h2>Entrar</h2>
        <div class="">
        <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email">
                <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
                <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                <label for="paswword">Senha</label>
            </div>
            <input type="submit" class="btn btn-success" value="Entrar">
        </div>
        <div class="mt-3">
            <p class="text-center"><a href="/login/recuperar-senha">Esqueceu a senha?</a></p>
            <p class="text-center"><a href="/login/criar-conta">Crie sua conta</a></p>
        </div>
        
            
        {{-- @include('includes.danger-alert') --}}
                
    </form>
        <p>Você está logado como <strong>{{@session('USER')}}</strong>. Deseja fazer <a href="/logout">logout</a> ou ir para o <a href="/dashboard">dashboard</a>?</p>

</div>
@endsection