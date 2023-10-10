@extends('layouts.login')

@section('title','Login de Empresas')
@section('body-title','Login de Empresas')
@section('action','/owners/login')
@section('fields')
<br><br>
<div class="user-box">
    <input type="text" name="name" id="name" required autocomplete="username">
    <label for="name">Usuário</label>
</div>
<div class="user-box">
    <input type="password" name="password" id="password" required autocomplete="password">
    <label for="password">Senha</label>
</div>

@error('name')
    <span class="alert-danger">{{$message}} </span>
@enderror


<p>
    <a href="/owners/register" class="link-de-redirecionamento">Não é cadastrado? Registre-se</a>
</p>
@endsection