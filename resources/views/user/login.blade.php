@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if (session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
            </div>
            <div class="mb-3">
                <label for="">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a href="{{ route('home') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
@endSection
