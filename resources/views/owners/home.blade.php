@extends('layouts.dashboard')

@section('title', 'HOME')
@section('profile', session('name'))

@section('content')
<a href="/owners/logout">Logout</a>
<p>
    Lorem Ipsum
</p>
@endsection