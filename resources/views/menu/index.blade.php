@extends('app')
@section('content')
<div class="card">
    @if (session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
    @endif
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search Here....">
            </div>
            <div class="col">
                <button class="btn btn-success">Search</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('menu.create') }}">Add</a>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>#</th>
                <th>gambar</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </thead>
            <?php $no=1 ?>
            @foreach ($menu as $menu)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ asset('storage/'.$menu->gambar) }}" class="img-fluid"></td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ $menu->harga }}</td>
                    <td>{{ $menu->nama_kategori }}</td>
                    <td>
                        <a class ="btn btn-sm btn-warning" href="{{ route('menu.edit', $menu) }}">Edit</a>
                        <form method="POST" action="{{ route('menu.destroy', $menu) }}=" style="display: inline;"
                        onsubmit=" return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endSection