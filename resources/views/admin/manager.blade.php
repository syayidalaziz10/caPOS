@extends('admin.template.main')
@include('admin.template.sidebar')

@section('content')
{{-- main menu --}}
<?php $i=1; ?>
<div class="w-full flex justify-center">
    <input type="text" placeholder="Cari User Manager" class="text-white w-full rounded-2xl my-12 py-3 px-16 bg-warna-2 text-secondary text-md">
</div>
<div class="flex justify-between w-full items-center">
    <h1 class="text-secondary text-2xl font-bold">Manajemen Manajer</h1>
    <button type="button" data-modal-toggle="staticModal" class="py-2 px-8 bg-componen rounded-lg font-semibold text-sm ">Tambah User</button>
</div>

<div class="flex justify-center rounded-xl my-10">
    <table class="w-full text-center rounded-xl bg-warna-2 border-separate border-spacing-y-2 border-spacing-x-2 text-secondary">
        <thead class="bg-componen">
            <tr>
                <th class="py-4 rounded-xl">No</th>
                <th class="rounded-xl">Nama User</th>
                <th class="rounded-xl">Username</th>
                <th class="rounded-xl">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- data user --}}
            @foreach($users as $user)
            <tr>
                <td class="bg-primary rounded-xl">{{$i}}</td>
                <td class="bg-primary rounded-xl ">{{$user->nama}}</td>
                <td class="bg-primary rounded-xl">{{$user->username}}</td>
                <td class="bg-primary rounded-xl rounded-r-xl">
                    <button class="p-3 bg-primary rounded-lg m-2">
                        <svg width="23" height="25" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </button>
                    <button class="p-3 bg-primary rounded-lg" data-modal-toggle="staticModalEdit">
                        <svg width="20" height="25" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2719 2H8.55734C4.271 2 2.55646 4 2.55646 9V15C2.55646 20 4.271 22 8.55734 22H13.701C17.9873 22 19.7018 20 19.7018 15V13" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.5925 3.02025L7.83724 10.9003C7.58005 11.2003 7.32287 11.7903 7.27144 12.2203L6.90281 15.2303C6.76565 16.3203 7.42575 17.0803 8.36017 16.9303L10.9406 16.5003C11.3006 16.4403 11.8064 16.1403 12.0721 15.8403L18.8274 7.96025C19.9933 6.60025 20.542 5.02025 18.8274 3.02025C17.1129 1.02025 15.7584 1.66025 14.5925 3.02025V3.02025Z" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.6238 4.15039C13.9081 5.32786 14.4468 6.40046 15.1883 7.26544C15.9298 8.13042 16.8493 8.7588 17.8587 9.09039" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
</div>
{{-- end main menu --}}


{{-- modal tambah user --}}
<div id="staticModal" data-modal-backdrop="static" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-5xl h-full md:h-auto">
        <!-- Modal content -->
        <form action="{{ route('register.action') }}" method="POST" enctype="multipart/form-data" class="relative rounded-xl shadow bg-warna-2">
            @csrf
            <!-- Modal header -->
            <div class="p-6">
    
                <div class="flex justify-between items-start p-4 rounded-xl">
                    <h3 class="text-xl font-bold text-secondary">
                        TAMBAH USER MANAGER
                    </h3>
                    <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <div class="flex items-start p-6 space-x-12">
                    {{-- form modal --}}
                    <div class="space-y-3 w-1/2">
                        <div>
                            <h2 class="text-xs font-bold text-secondary">AKUN USER MANAGER</h2>
                        </div>
                        <div>
                            <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                            <input type="text" id="username" name="username" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div class="flex justify-center items-center space-x-2">
                            <div class="w-1/2">
                                <label for="password" class=" text-secondary text-sm">Password</label>
                                <input type="password" id="password" name="password" class=" block w-full mt-2 bg-primary py-2 px-6 rounded-xl text-secondary">
                            </div>
                            <div class="w-1/2">
                                <label for="konfrimasi" class= "text-secondary text-sm">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="konfrimasi" class="block w-full bg-primary mt-2 py-2 px-6 rounded-xl text-secondary">
                            </div>
                        </div>
                        <div>
                            <label class="text-secondary text-sm">Gambar</label>
                            <label for="profil" class="block text-secondary mt-2">
                                <div class="bg-primary rounded-xl h-48 w-full flex justify-center items-center py-7 relative cursor-pointer">
                                    <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                    </svg>
                                    <span id="fileName"></span>
                                    <input type="file" name="gambar" id="profil" class="invisible absolute top-0">
                                </div>
                            </label>
                        </div>
                        <input type="hidden" name="level" value="manajer">

                    </div>
                    <div class="w-1/2 space-y-3">
                        <div>
                            <h2 class="text-xs font-bold text-secondary">BIODATA USER MANAGER</h2>
                        </div>
                        <div>
                            <label for="namalengkap" class="block text-secondary text-sm mb-2">Nama Lengkap</label>
                            <input type="text" id="namalengkap" name="nama" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="hp" class="block text-secondary text-sm mb-2">No Handphone</label>
                            <input type="text" id="hp" name="no_hp" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="ttl" class="block text-secondary text-sm mb-2">Tanggal Lahir</label>
                            <input type="date" id="ttl" name="tanggal_lahir" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="alamat" class="block text-secondary text-sm mb-2">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="gender" class="block text-secondary text-sm mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="gender" class="w-full bg-primary text-secondary py-2 px-6 rounded-xl">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                
                <!-- Modal footer -->
                <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                    <button data-modal-toggle="staticModal" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                    <button data-modal-toggle="staticModal" type="submit" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah User</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- end modal tambah user --}}

{{-- modal edit user --}}
<div id="staticModalEdit" data-modal-backdrop="static" tabindex="-1" aria-label="hidden" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-5xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-xl shadow bg-warna-2">
            <!-- Modal header -->
            <div class="p-6">
    
                <div class="flex justify-between items-start p-4 rounded-xl">
                    <h3 class="text-xl font-bold text-secondary">
                        EDIT USER MANAGER
                    </h3>
                    <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModalEdit">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <!-- Modal body -->
                <div class="w-full flex items-start p-6 space-x-12">
                    {{-- form modal --}}
                    <div class="w-1/2 space-y-3">
                        <div>
                            <h2 class="text-xs font-bold text-secondary">AKUN USER MANAGER</h2>
                        </div>
                        <div>
                            <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                            <input type="text" id="username" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div class="flex justify-center items-center space-x-2">
                            <div class="w-full">
                                <label for="password" class=" text-secondary text-sm">Password</label>
                                <input type="password" id="password" class=" block w-full mt-2 bg-primary py-2 px-6 rounded-xl text-secondary">
                            </div>
                            <div class="w-full">
                                <label for="konfrimasi" class="block text-secondary text-sm mb-2">Konfirmasi Password</label>
                                <input type="password" id="konfrimasi" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                            </div>
                        </div>
                        <div class="flex justify-center items-center space-x-2">
                            <div class="w-full">
                                <label class="text-secondary text-sm">Gambar</label>
                                <label class="block text-secondary mt-2">
                                    <div style="background-image: url('/img/profil.jpg'); " class="bg-primary rounded-xl w-full h-48 flex justify-center items-center relative bg-cover bg-center" ></div>
                                </label>
                            </div>
                            <div class="w-full">
                                <label class="text-secondary text-sm">Gambar</label>
                                <label for="profil" class="block text-secondary mt-2">
                                    <div class="bg-primary rounded-xl w-full h-48 flex justify-center items-center py-7 relative cursor-pointer">
                                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                        </svg>
                                        <input type="file" id="profil" class="invisible absolute top-0">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 space-y-3">
                        <div>
                            <h2 class="text-xs font-bold text-secondary">BIODATA USER MANAGER</h2>
                        </div>
                        <div>
                            <label for="namalengkap" class="block text-secondary text-sm mb-2">Nama Lengkap</label>
                            <input type="text" id="namalengkap" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="hp" class="block text-secondary text-sm mb-2">No Handphone</label>
                            <input type="text" id="hp" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="ttl" class="block text-secondary text-sm mb-2">Tanggal Lahir</label>
                            <input type="date" id="ttl" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="alamat" class="block text-secondary text-sm mb-2">Alamat</label>
                            <input type="text" id="alamat" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                        </div>
                        <div>
                            <label for="gender" class="block text-secondary text-sm mb-2">Alamat</label>
                            <select name="" id="gender" class="w-full bg-primary text-secondary py-2 px-6 rounded-xl">
                                <option value="man">Laki-Laki</option>
                                <option value="woman">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal footer -->
            <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                <button data-modal-toggle="staticModalEdit" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                <button data-modal-toggle="staticModalEdit" type="button" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah User</button>
            </div>
            {{-- end modal footer --}}
        </div>
    </div>
</div>
{{-- end modal edit user --}}



{{-- script modal --}}
<script>
    let fileinput = document.getElementById('profil');
    let spanfile = document.getElementById('fileName');
    let aa;
    fileinput.onchange = function () {
        aa = this.value.split("\\");
        spanfile.innerHTML = aa[aa.length-1];
    };
</script>


@endsection
