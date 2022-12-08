@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
            </div>
            <div class="mb-3">
                <label for="">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}">
            </div>
            <div class="mb-3">
                <label for="">Password Confirmation<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
            </div><div class="mb-3">
                <label for="">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            </div>
            <div class="mb-3">
                <label for="">Alamat <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
            </div>
            <div class="mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
                <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin">
                    <option value="laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Nomor <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
            </div>
            <div class="mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Level</label>
                <select class="form-select" id="inputGroupSelect01" name="level">
                    <option value="kasir">Kasir</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
              </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ route('user.kasir') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
@endSection