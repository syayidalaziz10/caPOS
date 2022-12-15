@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
            @endforeach
        @endif
        <form action="{{ route('pemesanan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Nama Menu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_menu" value="{{ old('nama_menu') }}">
            </div>
            <div class="mb-3">
                <label for="">Jumlah <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="jumlah" value="{{ old('harga') }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a href="{{ route('home') }}" class="btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>

@endSection