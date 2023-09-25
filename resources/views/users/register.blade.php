@extends('layouts.register')

@section('title','Cadastro de Usuário')
@section('body-title','Cadastro de Usuário')
@section('action','/users/submit')
@section('fields')
<div class="user-box">
    <input type="text" name="username" id="username" required autocomplete="username">
    <label for="name">Usuário</label>
</div>

<div class="user-box">
    <input type="email" name="email" id="email" required autocomplete="email">
    <label for="email">E-mail</label>
</div>

<div class="user-box">
    <input type="password" name="password" id="password" required autocomplete="password">
    <label for="name">Senha</label>
</div>

<div class="user-box">
    <input type="password" name="confirmpassword" id="confirmpassword" required autocomplete="confirmpassword">
    <label for="confirmpassword">Confirme a senha</label>
</div>
@endsection