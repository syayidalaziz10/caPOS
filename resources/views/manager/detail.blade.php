@extends('manager.template.main')
@include('manager.template.sidebar')

@section('content')
<div class="py-14 px-6">

    <div class="mb-5">
        <a href="{{ str_replace(url('/'), '', url()->previous()) }}" class="text-componen border border-componen py-1 px-8 rounded-2xl">Kembali</a>
    </div>
    <div class="mb-10">
        <h1 class="text-secondary text-2xl font-bold m">DETAIL PEMESANAN TANGGAL {{ $details[0]->tanggal_pemesanan }}</h1>
    </div>

    <div class="bg-warna-2 w-full rounded-3xl">
        <div class="p-10 space-y-4">
            {{-- div menu detail --}}
            <?php $total=0; ?>
            @foreach($details as $detail)
            <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between items-center pr-16">
                <div class="flex items-center space-x-10">
                    <div class="bg-warna-3 w-20 h-20 rounded-3xl bg-cover bg-center" style="background-image: url('{{ asset('storage/'. $detail->gambar) }}')"></div>
                    <div class="text-secondary">
                        <h1 class="font-bold">{{ $detail->nama_menu }}</h1>
                        <p class="font-light">Rp. {{ $detail->harga }} x {{ $detail->jumlah }} </p>
                    </div>
                </div>
                <div>
                    <div class="text-warna-3 font-bold text-xl">Rp. {{ $detail->harga*$detail->jumlah }}</div>
                </div>
            </div>
            <?php $total+=($detail->harga*$detail->jumlah); ?>
            @endforeach
            {{-- end div menu detail --}}
        </div>

        {{-- div total --}}
        <div class="border-t-4 border-black border-opacity-10 rounded-3xl w-full flex justify-between py-8 px-12 items-center">
            <div class="text-secondary font-bold text-3xl">TOTAL</div>
            <div class="text-warna-3 font-bold text-3xl">RP. {{ $total }}</div>
        </div>
        {{-- end div total --}}
        
    </div>

</div>

@endsection