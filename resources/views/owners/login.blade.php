@extends('layouts.login')

@section('title','Login de Empresas')
@section('body-title','Login de Empresas')
@section('action','/owners')
@section('fields')
<p>
    <label for="name">Usuário</label>
    <input type="text" name="name" id="name" placeholder="Usuário">
</p>
<p>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" placeholder="Senha">
</p>
<p>
    <a href="/owners/register">Não é cadastrado? Registre-se</a>
</p>
@endsection