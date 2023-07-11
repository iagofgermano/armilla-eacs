@extends('layouts.register')

@section('title','Cadastro de Empresas')
@section('body-title','Cadastro de Empresas')
@section('action','/owners/submit')
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
    <label for="phone">Telefone</label>
    <input type="text" name="phone" id="phone" placeholder="Telefone" required>
</p>
<p>
    <label for="password">Senha</label>
    <input type="password" name="password" id="password" placeholder="Senha" required>
</p>

<p>
    <label for="confirmpassword">Confirme a senha</label>
    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Senha">
</p>
@endsection