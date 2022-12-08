@extends('app')
@section('content')

<p>Welcome <b>{{  Auth::user()->name  }}</b> </p>
<a class="btn btn-primary"href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger"href="{{ route('logout') }}">Logout</a>

@endSection