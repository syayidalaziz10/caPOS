@extends('admin.template.main')
@include('admin.template.sidebar')

@section('content')
<?php $i=1; ?>
{{-- main menu --}}
<div class="flex w-full justify-center">
    {{-- <input type="text" placeholder="Cari Menu" class="text-white w-full rounded-2xl my-12 py-3 px-16 bg-warna-2 text-secondary text-md"> --}}
</div>
<div class="flex mt-5 justify-between w-full items-center">
    <h1 class="text-secondary text-2xl font-bold">Manajemen Menu</h1>
    <button type="button" data-modal-toggle="staticModal" class="py-2 px-8 bg-componen rounded-lg font-semibold text-sm ">Tambah Menu</button>
</div>
<div class="flex ustify-center rounded-xl my-10">
    <table class="w-full text-center rounded-xl bg-warna-2 border-separate border-spacing-y-2 border-spacing-x-2 text-secondary">
        <thead class="bg-componen">
            <tr>
                <th class="py-4 rounded-xl">No</th>
                <th class="rounded-xl">Menu</th>
                <th class="rounded-xl">Harga</th>
                <th class="rounded-xl">Kategori</th>
                <th class="rounded-xl">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- data user --}}
            @foreach($menu as $mn)
            <tr>
                <td class="bg-primary rounded-xl">{{ $i }}</td>
                <td class="bg-primary rounded-xl ">{{ $mn->nama_menu }}</td>
                <td class="bg-primary rounded-xl">{{ $mn->harga }}</td>
                <td class="bg-primary rounded-xl">{{ $mn->nama_kategori }}</td>
                <td class="bg-primary rounded-xl rounded-r-xl">
                    <form method="POST" class="inline" action="{{ route('menu.destroy', ['menu' => $mn->id_menu]) }}" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-3 bg-primary rounded-lg m-2">
                            <svg width="23" height="25" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </button>
                    </form>
                    <button class="p-3 bg-primary rounded-lg" data-modal-toggle="staticModalEdit" onclick="edtMdl(this);" 
                    data-idMenu="{{$mn->id_menu}}" data-namaMenu="{{$mn->nama_menu}}" data-harga={{$mn->harga}} data-idKategori="{{$mn->id_kategori}}" data-gambar="{{asset('storage/'.$mn->gambar)}}" data-gambarSkg="{{$mn->gambar}}">
                        <svg width="20" height="25" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2719 2H8.55734C4.271 2 2.55646 4 2.55646 9V15C2.55646 20 4.271 22 8.55734 22H13.701C17.9873 22 19.7018 20 19.7018 15V13" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.5925 3.02025L7.83724 10.9003C7.58005 11.2003 7.32287 11.7903 7.27144 12.2203L6.90281 15.2303C6.76565 16.3203 7.42575 17.0803 8.36017 16.9303L10.9406 16.5003C11.3006 16.4403 11.8064 16.1403 12.0721 15.8403L18.8274 7.96025C19.9933 6.60025 20.542 5.02025 18.8274 3.02025C17.1129 1.02025 15.7584 1.66025 14.5925 3.02025V3.02025Z" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.6238 4.15039C13.9081 5.32786 14.4468 6.40046 15.1883 7.26544C15.9298 8.13042 16.8493 8.7588 17.8587 9.09039" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
</div>
{{-- end main menu --}}

{{-- modal tambah user --}}
<div id="staticModal" data-modal-backdrop="static" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-xl shadow bg-warna-2">
            <!-- Modal header -->
            <div class="p-6">
                <div class="flex justify-between items-start p-4 rounded-xl">
                    <h3 class="text-xl font-bold text-secondary">
                        TAMBAH MENU
                    </h3>
                    <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- form modal --}}
                        @csrf
                        <div>
                            <label for="namamenu" class="block text-secondary text-sm mb-2">Nama Menu</label>
                            <input name="nama_menu" type="text" id="namamenu" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                            
                        </div>
                        <div>
                            <label for="harga" class="block text-secondary text-sm mb-2">Harga</label>
                            <input name="harga" type="text" id="harga" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="kategori" class="block text-secondary text-sm mb-2">Kategori</label>
                            {{-- <input type="text" id="kategori" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary"> --}}
                            <select name="id_kategori" id="kategori" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-secondary text-sm">Gambar</label>
                            <label for="profil" class="block text-secondary mt-2">
                                <div class="bg-primary rounded-xl w-full flex flex-col justify-center items-center py-7 relative cursor-pointer">
                                    <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                    </svg>
                                    <span id="fileName" class="mt-4"></span>
                                    <input name="gambar" type="file" id="profil" class="invisible absolute top-0">
                                </div>
                            </label>
                        </div>

                </div>
            </div>
            <div>
                
                    <!-- Modal footer -->
                        <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                            <button data-modal-toggle="staticModal" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                            <button data-modal-toggle="staticModal" type="submit" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah Menu</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
{{-- end modal tambah user --}}

{{-- modal edit user --}}
<div id="staticModalEdit" data-modal-backdrop="static" tabindex="-1" aria-label="hidden" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <form action="{{ route('menu.update',1) }}" id="formSbm" method="POST" enctype="multipart/form-data" class="relative w-full max-w-lg h-full md:h-auto">
        @csrf
        @method('PUT')
        <!-- Modal content -->
        <div class="relative rounded-xl shadow bg-warna-2">
            <!-- Modal header -->
            <div class="p-6">
                <div class="flex justify-between items-start p-4 rounded-xl">
                    <h3 class="text-xl font-bold text-secondary">
                        EDIT MENU
                    </h3>
                    <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModalEdit">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-4">
                    {{-- form modal --}}
                    <div>
                        <input type="hidden" name="g" id="idUserEdit">
                        <label for="namaMenuEdit" class="block text-secondary text-sm mb-2">Nama Menu</label>
                        <input type="text" id="namaMenuEdit" name="nama_menu" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        
                    </div>
                    <div>
                        <label for="hargaEdit" class="block text-secondary text-sm mb-2">Harga</label>
                        <input type="text" id="hargaEdit" name="harga" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                    </div>
                    {{-- <div>
                        <label for="username" class="block text-secondary text-sm mb-2">Kategori</label>
                        <select name="kategori" id="kategori" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div> --}}

                    <div class="flex justify-center items-center space-x-12">
                        
                        <div class="w-full">
                            <label class="text-secondary text-sm">Gambar Sekarang</label>
                            <label class="block text-secondary mt-2">
                                <div id="gambarEdit" style="background-image: url('/img/profil.jpg'); " class="bg-primary rounded-xl w-full h-32 flex justify-center items-center relative bg-cover bg-center" >
                            
                                </div>
                                <input type="hidden" name="oldImage" id="gambarSedit">
                            </label>
                        </div>
                        <div class="w-full">
                            <label class="text-secondary text-sm">Gambar</label>
                            <label for="profilEdits" class="block text-secondary mt-2">
                                <div class="bg-primary rounded-xl w-full flex flex-col justify-center items-center py-7 relative cursor-pointer">
                                    <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                    </svg>
                                    <span id="fileNameEdit" class="mt-4"></span>
                                    <input type="file" name="gambar" id="profilEdits" class="invisible absolute top-0">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal footer -->
            <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                <button data-modal-toggle="staticModalEdit" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                <button data-modal-toggle="staticModalEdit" type="submit" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit Menu</button>
            </div>
            {{-- end modal footer --}}
        </div>
    </form>
</div>
{{-- end modal edit user --}}

<script>
    let idMenuObj      = document.getElementById('idUserEdit');
    let namaMenuObj    = document.getElementById('namaMenuEdit');
    let hargaObj       = document.getElementById('hargaEdit');
    let idKategoriObj  = document.getElementById('kategoriEdit');
    let gambarObj      = document.getElementById('gambarEdit');
    let gambarSObj     = document.getElementById('gambarSedit');
    let formSbm        = document.getElementById('formSbm');

    function edtMdl(obj)
    {
        console.log(obj);
        //obj
        const idMenu     = obj.getAttribute("data-idMenu");
        const namaMenu   = obj.getAttribute("data-namaMenu");
        const harga      = obj.getAttribute("data-harga");
        const idKategori = obj.getAttribute("data-idKategori");
        const gambar     = obj.getAttribute("data-gambar");
        const gambarS    = obj.getAttribute("data-gambarSkg");
        formSbm.action   = "http://localhost:8000/menu/"+String(idMenu);


        idMenuObj.value = idMenu;
        namaMenuObj.value=namaMenu;
        hargaObj.value = harga;
        gambarSObj.value = gambarS;

        // idKategoriObj =
        gambarObj.style.background      = `url('${gambar}') top center`;
        gambarObj.style.backgroundSize  = 'cover';
        
    }

</script>

@endsection