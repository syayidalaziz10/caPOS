@extends('app')
@section('content')
<div class="card">
    @if (session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
    @endif
    {{-- <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search Here....">
            </div>
            <div class="col">
                <button class="btn btn-success">Search</button>
            </div>
        </form>
    </div> --}}
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>#</th>
                <th>Nama Menu</th>
                <th>Jumlah Pesan</th>
                <th>Harga</th>
            </thead>
            <?php $no=1 ?>
            @foreach ($details as $detail)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $detail->nama_menu }}</td>
                    <td>{{ $detail->jumlah }}</td>
                    <td>{{ $detail->harga }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total Harga :</td>
                    <td>{{ $detail->total_biaya }}</td>
                </tr>
        </table>
        <a href="{{ route('pemesanan.index') }}" class="btn-danger">Back</a>
    </div>
</div>
@endSection