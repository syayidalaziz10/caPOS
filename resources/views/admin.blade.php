@extends('app')
@section('content')

<p>Welcome <b>{{  Auth::user()->nama  }}</b> </p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-success"href="{{ route('user.kasir') }}">Data Kasir</a>
<a class="btn btn-success"href="{{ route('user.manajer') }}">Data Manager</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
<a class="btn btn-success" href="{{ route('menu.index') }}">Menu</a>

@endSection