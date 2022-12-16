
@extends('kasir.template.main')
@include('kasir.template.sidebar')

@section('content')
    

<div class="w-1/2 bg-primary"">
    <div class="bg-warna-2 h-screen py-10 rounded-r-3xl flex flex-col items-center">
        {{-- <div class="flex items-center justify-between w-8/12  bg-primary pr-4 rounded-2xl mb-6">
            <input type="text" placeholder="Cari Menu " style="background-color: transparent" class="w-full rounded-2xl py-2.5 pl-8 text-secondary bg-transparent text-md">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.8959 26.2816C7.06883 26.2816 1.5105 20.7232 1.5105 13.8962C1.5105 7.06908 7.06883 1.51074 13.8959 1.51074C20.723 1.51074 26.2813 7.06908 26.2813 13.8962C26.2813 20.7232 20.723 26.2816 13.8959 26.2816ZM13.8959 3.32324C8.05967 3.32324 3.323 8.07199 3.323 13.8962C3.323 19.7203 8.05967 24.4691 13.8959 24.4691C19.7322 24.4691 24.4688 19.7203 24.4688 13.8962C24.4688 8.07199 19.7322 3.32324 13.8959 3.32324ZM26.5834 27.4911C26.3538 27.4911 26.1242 27.4065 25.943 27.2253L23.5263 24.8086C23.3578 24.6381 23.2633 24.408 23.2633 24.1682C23.2633 23.9284 23.3578 23.6983 23.5263 23.5278C23.8767 23.1774 24.4567 23.1774 24.8072 23.5278L27.2238 25.9445C27.5742 26.2949 27.5742 26.8749 27.2238 27.2253C27.0426 27.4065 26.813 27.4911 26.5834 27.4911Z" fill="#EEFDFF"/>
            </svg>
        </div> --}}
        <h1 class="text-secondary text-2xl font-semibold mr-80 pb-4">Daftar Menu</h1>
        <div class="overflow-auto w-full flex flex-col items-center">
            
            {{-- daftar menu --}}
            @foreach($menu as $mn)
            <button id="{{$mn->id_menu}}" data-idmenu="{{$mn->id_menu}}" data-namamenu='{{$mn->nama_menu}}' data-hargamenu="Rp. {{$mn->harga}}" data-gambar = '{{ asset('storage/'. $mn->gambar) }}' data-hg={{$mn->harga}}  onclick="cobu(this);" class="btn w-8/12 mt-10 shadow rounded-2xl bg-primary p-4 flex">
                <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url('{{ asset('storage/'. $mn->gambar) }}')"></div>
                <div class="py-3 text-secondary">
                    <h1 class="font-semibold tracking-wider">{{$mn->nama_menu}}</h1>
                    <p class="font-extralight text-left">Rp. {{$mn->harga}}</p>
                </div>
            </button>
            {{-- end daftar menu --}}
            @endforeach
        </div>
    </div>
</div>
{{-- end list menu --}}

{{-- detail pesanan --}}
<div class="bg-primary w-1/2 h-screen px-16 flex flex-col justify-between  overflow-auto scrollbar-hide">
    <div>
        <div class="bg-primary sticky top-0 py-10">
            <h1 class="text-4xl text-secondary  font-semibold tracking-wide">Detail Pesanan</h1>
        </div>
        <div id='listmenu' class="min-h-screen"></div>
    
        </div>
    {{-- total harga --}}
    <div class="flex items-center pb-10 pt-4 bg-primary justify-between sticky bottom-0 justify-self-end text-secondary">
        <div>
            <p class="font-light">Total Harga</p>
            <h1 id="totalhg" class="text-4xl font-bold text-warna-3 ">Rp. 0</h1>
        </div>
        <div>
            <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input id="valMenu" type="hidden" name="nama_menu">
                <input id="valJml" type="hidden" name="jumlah">
                <button type="submit" onclick="tmbh();" class="bg-sidebar text-secondary text-xl py-5 px-10 rounded-xl font-semibold">Submit</button>
            </form>
        </div>
    </div>
    {{-- end total harga --}}
</div>
{{-- end detail pesanan --}}


@endsection