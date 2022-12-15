@extends('admin.template.main')
@include('admin.template.sidebar')

@section('content')

<style>
    ::-webkit-scrollbar {
    width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #1E2541;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #F0719C;
    border-radius: 1rem;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #FFA46B ;
    }
</style>

<div class="py-14 px-6">
    <div class="mb-10">
        <h1 class="text-secondary text-2xl font-bold m">PENJUALAN HARI INI</h1>
    </div>
    <div class="flex justify-center items-center h-screen w-full bg-warna-2 rounded-2xl">
        <div class="h-full w-3/5 py-10 px-20">
            <div class="w-full mb-6">
                <div class="flex space-x-7 mb-7">
                    <div class="text-secondary bg-primary w-1/2 h-40 rounded-3xl px-8 py-6">
                        <p>Total Menu Yang Terjual</p>
                        <h1 class="font-bold mt-6 text-5xl">10</h1>
                    </div>
                    <div class="text-secondary bg-primary w-1/2 h-40 rounded-3xl px-8 py-6">
                        <p>Jumlah Menu Yang Terjual</p>
                        <h1 class="font-bold mt-6 text-5xl">34</h1>
                    </div>
                </div>
                <div class="text-secondary bg-primary w-full h-40 rounded-3xl px-8 py-6">
                    <p>Total Pemesanan Yang dibuat</p>
                    <h1 class="font-bold mt-6 text-5xl">21</h1>
                </div>
            </div>
            <div class="w-full space-y-4">
                <div class="text-secondary font-bold">
                    MENU YANG TERJUAL
                </div>
                {{-- div item menu --}}
                <div class="h-80 overflow-auto space-y-2 flex flex-col mb-10 pr-4">
                    <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between">
                        <div class="flex items-center space-x-10">
                            <div class="bg-warna-3 w-20 h-20 rounded-3xl"></div>
                            <div class="text-secondary">
                                <h1 class="font-bold">Ice Americano</h1>
                                <p class="font-light">Rp. 5000</p>
                            </div>
                        </div>
                        <div>
                            <div class="w-20 h-20 rounded-3xl bg-warna-3 font-bold text-4xl flex items-center justify-center">3</div>
                        </div>
                    </div>
                    <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between">
                        <div class="flex items-center space-x-10">
                            <div class="bg-warna-3 w-20 h-20 rounded-3xl"></div>
                            <div class="text-secondary">
                                <h1 class="font-bold">Ice Americano</h1>
                                <p class="font-light">Rp. 5000</p>
                            </div>
                        </div>
                        <div>
                            <div class="w-20 h-20 rounded-3xl bg-warna-3 font-bold text-4xl flex items-center justify-center">3</div>
                        </div>
                    </div>
                    <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between">
                        <div class="flex items-center space-x-10">
                            <div class="bg-warna-3 w-20 h-20 rounded-3xl"></div>
                            <div class="text-secondary">
                                <h1 class="font-bold">Ice Americano</h1>
                                <p class="font-light">Rp. 5000</p>
                            </div>
                        </div>
                        <div>
                            <div class="w-20 h-20 rounded-3xl bg-warna-3 font-bold text-4xl flex items-center justify-center">3</div>
                        </div>
                    </div>
                    <div class="flex w-full h-28 bg-primary rounded-3xl p-4 justify-between">
                        <div class="flex items-center space-x-10">
                            <div class="bg-warna-3 w-20 h-20 rounded-3xl"></div>
                            <div class="text-secondary">
                                <h1 class="font-bold">Ice Americano</h1>
                                <p class="font-light">Rp. 5000</p>
                            </div>
                        </div>
                        <div>
                            <div class="w-20 h-20 rounded-3xl bg-warna-3 font-bold text-4xl flex items-center justify-center">3</div>
                        </div>
                    </div>
                </div>
                {{-- end div items menu --}}
            </div>
        </div>
        <div class="h-full w-2/5 rounded-l-2xl shadow-2xl py-8 px-12">
            <div class="overflow-auto py-6 px-8 bg-primary rounded-2xl space-y-6 h-5/6 mb-12">
                <h1 class="font-bold text-secondary">DETAIL PENJUALAN</h1>

                {{-- div detail menu dan harga --}}
                <div class="flex items-center justify-between">
                    <div class="text-secondary">
                        <h1 class="font-bold">Ice Americano</h1>
                        <p class="font-light">Rp. 30000 x 3</p>
                    </div>
                    <div>
                        <h1 class="font-light text-warna-3">Rp. 90000</h1>
                    </div>
                </div>
                {{-- end div detail menu dan harga --}}
            </div>
            <div>
                <p class="font-light font-sm text-secondary">PENDAPATAN BULANAN</p>
                <h1 class="font-bold text-4xl text-warna-3">RP. 1000000</h1>
            </div>
        </div>
    </div>
</div>

@endsection