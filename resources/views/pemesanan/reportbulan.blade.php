@extends('app')
@section('content')
<div class="card">
    @if (session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
    @endif
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="date" name="q" value="{{ $q }}" placeholder="Search Here....">
            </div>
            <div class="col">
                <input class="form-control" type="date" name="r" value="{{ $r }}" placeholder="Search Here....">
            </div>
            <div class="col">
                <button class="btn btn-success">Search</button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>#</th>
                <th>Tanggal Pemesanan</th>
                <th>Total Biaya</th>
                <th>Kasir</th>
                <th>Aksi</th>
            </thead>
            <?php $no=1 ?>
            @foreach ($pemesanan as $pemesanan)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pemesanan->tanggal_pemesanan }}</td>
                    <td>{{ $pemesanan->total_biaya }}</td>
                    <td>{{ $pemesanan->nama }}</td>
                    <td>
                        <a class ="btn btn-sm btn-warning" href="{{ route('detailpemesanan.detail', ['pemesanan' => $pemesanan->id_pemesanan]) }}">Detail Report</a>
                        {{-- <a class ="btn btn-sm btn-warning" href="{{ route('menu.edit', $menu) }}">Edit</a> --}}
                        {{-- <form method="POST" action="{{ route('detailpemesanan.index', $pemesanan) }}" style="display: inline;">
                            @csrf
                            <input type="hidden" name="id_pemesanan" value="{{$pemesanan->id_pemesanan}}">
                            <button class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endSection