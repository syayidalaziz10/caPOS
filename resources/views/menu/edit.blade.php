@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('menu.update',$menu) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">Nama Menu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_menu" value="{{ old('nama_menu', $menu->nama_menu) }}">
            </div>
            <div class="mb-3">
                <label for="">Harga <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="harga" value="{{ old('harga', $menu->harga) }}">
            </div>
            <div class="mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                @foreach ($kategori as $kategori)
                <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                    <option value="{{ $kategori->id_kategori, $menu->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                </select>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gambar Sebelumnya</label>
                <img src="{{ asset('storage/'.$menu->gambar) }}" class="img-fluid">
                <input type="hidden" name="oldImage" value="{{ $menu->gambar }}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
              </div>
            <div class="mb-3">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('menu.index') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
@endSection