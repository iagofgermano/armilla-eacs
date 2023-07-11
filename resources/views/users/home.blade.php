@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('username'))

@section('content')
<a href="/users/logout">Logout</a>
<p>
    Lorem Ipsum
</p>
@endsection