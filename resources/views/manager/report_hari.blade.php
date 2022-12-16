@extends('manager.template.main')
@include('manager.template.sidebar')

@section('content')
<div class="py-14 px-6">
    <div class="mb-10">
        <h1 class="text-secondary text-2xl font-bold m">LAPORAN HARIAN</h1>
    </div>

    <div class="flex justify-center h-24 mb-4 items-center h-screen w-full bg-warna-2 rounded-2xl">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="date" name="q" value="{{ $q }}" placeholder="Search Here....">
            </div>
            <div class="col">
                <button class="btn btn-success">Search</button>
            </div>
        </form>
    </div>

    <div class="flex justify-center items-center h-screen w-full bg-warna-2 rounded-2xl">
        <div class="h-full w-3/5 py-10 px-20">
            <div class="w-full mb-6">
                <div class="flex space-x-7 mb-7">
                    <div class="text-secondary bg-primary w-1/2 h-40 rounded-3xl px-8 py-6">
                        <p>Total Menu Yang Terjual</p>
                        @if($dataDetail != [])<h1 class="font-bold mt-6 text-5xl">{{ $banyakMenu->banyak }}</h1>@else<h1 class="text-componen font-bold text-2xl">Tidak ada Pemesanan</h1>@endif
                    </div>
                    <div class="text-secondary bg-primary w-1/2 h-40 rounded-3xl px-8 py-6">
                        <p>Jumlah Menu Yang Terjual</p>
                        @if($dataDetail != [])<h1 class="font-bold mt-6 text-5xl">{{ $jumlahMenu->jumlah }}</h1>@else<h1 class="text-componen font-bold text-2xl">Tidak ada Pemesanan</h1>@endif
                    </div>
                </div>
                <div class="text-secondary bg-primary w-full h-40 rounded-3xl px-8 py-6">
                    <p>Total Pemesanan Yang dibuat</p>
                    @if($dataDetail != [])<h1 class="font-bold mt-6 text-5xl"> {{$totalPesanan}} </h1>@else<h1 class="text-componen font-bold text-2xl">Tidak ada Pemesanan</h1>@endif
                </div>
            </div>
            <div class="w-full space-y-4">
                <div class="text-secondary font-bold">
                    MENU YANG TERJUAL
                </div>
                {{-- div item menu --}}
                <div class="h-80 overflow-auto space-y-2 flex flex-col mb-10 pr-4">
                    @if($dataDetail != [])
                    @foreach($dataDetail as $detail)
                    <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between">
                        <div class="flex items-center space-x-10">
                            <div class="bg-warna-3 w-20 h-20 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('storage/'. $detail["menu"][0]->gambar) }}')"></div>
                            <div class="text-secondary">
                                <h1 class="font-bold">{{ $detail["menu"][0]->nama_menu }}</h1>
                                <p class="font-light">Rp. {{ $detail["menu"][0]->harga }}</p>
                            </div>
                        </div>
                        <div>
                            <div class="w-20 h-20 rounded-3xl bg-warna-3 font-bold text-4xl flex items-center justify-center">{{$detail["jmlMenu"]->jml}}</div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="text-componen font-bold text-2xl">Tidak ada Pemesanan</p>
                    @endif
                </div>
                {{-- end div items menu --}}
            </div>
        </div>

        <div class="h-full w-2/5 rounded-l-2xl shadow-2xl py-8 px-12">
            <div class="overflow-auto py-6 px-8 bg-primary rounded-2xl space-y-6 h-5/6 mb-12">
                <h1 class="font-bold text-secondary">DETAIL PENJUALAN</h1>

                {{-- div detail menu dan harga --}}
                @foreach($dataDetail as $detail)
                <div class="flex items-center justify-between">
                    <div class="text-secondary">
                        <h1 class="font-bold">{{ $detail["menu"][0]->nama_menu }}</h1>
                        <p class="font-light">Rp. {{ $detail["menu"][0]->harga }} x {{ $detail["jmlMenu"]->jml }}</p>
                    </div>
                    <div>
                        <h1 class="font-light text-warna-3">Rp. {{ $detail["menu"][0]->harga*$detail["jmlMenu"]->jml }}</h1>
                    </div>
                </div>
                @endforeach
                {{-- end div detail menu dan harga --}}
                
            </div>
            <div>
                <p class="font-light font-sm text-secondary">PENDAPATAN HARIAN</p>
                <h1 class="font-bold text-4xl text-warna-3">RP. {{ $totalPendapatan->total }}</h1>
            </div>
        </div>

    </div>
</div>

@endsection