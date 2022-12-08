@extends('app')
@section('content')
@guest
    <a class="btn btn-primary"href="{{ route('login') }}">Login</a>
    <a class="btn btn-danger"href="{{ route('register') }}">Register</a>
@endguest
@endSection