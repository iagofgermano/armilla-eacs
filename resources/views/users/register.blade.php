@extends('layouts.login')

@section('title','Cadastro de Usuário')
@section('body-title','Cadastro de Usuário')
@section('action','/users/submit')
@section('fields')
<p>
    <label for="name">Usuário</label>
    <input type="text" name="name" id="name" placeholder="Usuário" required>
</p>

<p>
    <label for="email">E-Mail</label>
    <input type="email" name="email" id="email" placeholder="Email" required>
</p>
<p>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" placeholder="Senha" required>
</p>

<p>
    <label for="confirmpassword">Confirme a senha</label>
    <input type="confirmpassword" name="confirmpassword" id="confirmpassword" placeholder="Senha" required>
</p>
@endsection