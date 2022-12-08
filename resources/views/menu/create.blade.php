@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Nama Menu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_menu" value="{{ old('nama_menu') }}">
            </div>
            <div class="mb-3">
                <label for="">Harga <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="harga" value="{{ old('harga') }}">
            </div>
            <div class="mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                @foreach ($kategori as $kategori)
                <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                </select>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar" onchange="previewImage()">
              </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ route('home') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endSection