@extends('layouts.login')

@section('title','Login de Usuário')
@section('body-title','Login de Usuário')
@section('action','/users/login')
@section('fields')

<div class="user-box">
    <input type="text" name="name" id="name" required autocomplete="username">
    <label for="name">Usuário</label>
</div>
<div class="user-box">
    <input type="password" name="password" id="password" required autocomplete="password">
    <label for="password">Senha</label>
</div>
<p>
    <a href="/users/register" class="link-de-redirecionamento">Não é cadastrado? Registre-se</a>
</p>
@endsection