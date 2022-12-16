@extends('kasir.template.main')
@include('kasir.template.sidebar')

@section('content')
    


        {{-- detail pesanan --}}
        <div class="bg-primary w-full h-screen px-16 flex flex-col justify-between  overflow-auto scrollbar-hide">
            <div>
                <div class="bg-primary sticky top-0 py-10">
                    <h1 class="text-4xl text-secondary font-bold tracking-wide">Detail Pesanan</h1>
                </div>
                <div class="min-h-screen">
                    <div class="w-full text-secondary space-y-2 mb-8">
                        <div class="flex justify-between">
                            <div>
                                Transcation
                            </div>
                            <div class="font-bold">P-{{ $details[0]->id_pemesanan }}</div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                Kasir
                            </div>
                            <div class="font-bold">{{ $profil[0]->nama }}</div>
                        </div>
                    </div>
                    <div class="w-full rounded-2xl h-auto bg-warna-2 text-secondary px-4 py-6">
                       
                        <table class="w-full">
                            <tr>
                                <th class="py-6"></th>
                                <th class="text-left">ITEM</th>
                                <th >QTY</th>
                                <th>TOTAL</th>
                            </tr>
                            <?php $total=0; $i=1; ?>
                            @foreach($details as $detail)
                            <tr>
                                <td class="py-6 px-2">{{ $i }}</td>
                                <td class="text-left ">
                                    <h1 class="font-semibold">{{ $detail->nama_menu }}</h1>
                                    <p>RP. {{ $detail->harga }}</p>
                                </td>
                                <td class=" text-center">{{ $detail->jumlah }}</td>
                                <td class="text-center">RP. {{ $detail->harga*$detail->jumlah }}</td>
                            </tr>
                            <?php $total+=($detail->harga*$detail->jumlah);$i++; ?>
                            @endforeach
                        </table>

                    </div>
                </div>

            

            {{-- total harga --}}
            <div class="flex items-center pb-10 pt-4 bg-primary justify-between sticky bottom-0 justify-self-end text-secondary">
                <div>
                    <p class="font-light">Total Harga</p>
                    <h1 id="totalhg" class="text-4xl font-bold text-warna-3 ">Rp. {{ $total }}</h1>
                </div>
                <div>
                    <a href="{{ route('kasir.pemesanan') }}" class="bg-secondary text-primary text-xl py-5 px-10 rounded-xl mr-6 font-semibold">Kembali</a>
                    <button type="submit" class="bg-sidebar text-secondary text-xl py-5 px-10 rounded-xl font-semibold">Cetak</button>
                </div>
            </div>
            {{-- end total harga --}}
        </div>
        {{-- end detail pesanan --}}

@endsection