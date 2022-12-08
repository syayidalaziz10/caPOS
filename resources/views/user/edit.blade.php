@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('user.update',$user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}">
            </div>
            <div class="mb-3">
                <label for="">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}">
            </div>
            <div class="mb-3">
                <label for="">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}">
            </div>
            <div class="mb-3">
                <label for="">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tgl_lahir) }}">
            </div>
            <div class="mb-3">
                <label for="">Alamat <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $user->alamat) }}">
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
                <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gambar Sebelumnya</label>
                <img src="{{ asset('storage/'. $user->gambar) }}" class="img-fluid">
                <input type="hidden" name="oldImage" value="{{ $user->gambar }}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
              </div>
            <div class="mb-3">
                <button class="btn btn-primary">Update</button>
                <a href="{{ url()->previous() }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
@endSection