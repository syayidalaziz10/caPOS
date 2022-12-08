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
        <form action="{{ route('password.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Old Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="old_password">
            </div>
            <div class="mb-3">
                <label for="">New Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="new_password">
            </div>
            <div class="mb-3">
                <label for="">New Password Confirmation <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="new_password_confirmation">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Change</button>
                <a href="{{ route('home') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
@endSection