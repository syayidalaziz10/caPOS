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
                <a class="btn btn-primary" href="{{ route('user.createManajer') }}">Add</a>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>#</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            <?php $no=1 ?>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->no_hp }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>
                        <a class ="btn btn-sm btn-warning" href="{{ route('user.edit', $user) }}">Edit</a>
                        <form method="POST" action="{{ route('user.destroy', $user) }}=" style="display: inline;"
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