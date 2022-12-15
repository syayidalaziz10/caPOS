<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>caPOS | {{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-body bg-primary flex w-full">

    <sidebar class="flex h-screen w-32 bg-sidebar rounded-r-3xl flex-col justify-between p-10"> @yield('sidebar') </sidebar>
    <content class="w-full h-screen overflow-auto px-16"> @yield('content') </content>

    <script>
        let fileinput = document.getElementById('profil');
        let spanfile  = document.getElementById('fileName');
        let aa;
        fileinput.onchange = function () {
            aa = this.value.split("\\");
            spanfile.innerHTML = aa[aa.length-1];
        };
    
        let idUserObj      = document.getElementById('idUserEdit');
        let usernameObj    = document.getElementById('usernameEdit');
        let profilObj      = document.getElementById('profilEdit');
        let namaLengkapObj = document.getElementById('namalengkapEdit');
        let hpObj          = document.getElementById('hpEdit');
        let alamatObj      = document.getElementById('alamatEdit');
        let genderObj      = document.getElementById('genderEdit');
        let tanggalObj     = document.getElementById('ttlEdit');
        let gambarSkgObj   = document.getElementById('gambarEditSkg');

    
        function editModal(obj)
        {
            //obj
            const idUser   = obj.getAttribute("data-idUser");
            const username = obj.getAttribute("data-username");
            const namaUser = obj.getAttribute("data-namaUser");
            const tanggal  = obj.getAttribute("data-tanggal");
            const alamat   = obj.getAttribute("data-alamat");
            const gender   = obj.getAttribute("data-jenisKelamin");
            const no       = obj.getAttribute("data-noHp");
            const gambar   = obj.getAttribute("data-gambar");
            const gambarS  = obj.getAttribute("data-gambarSkg");

            // console.log(gambarS);
            idUserObj.value      = idUser;
            usernameObj.value    = username;
            namaLengkapObj.value = namaUser;
            tanggalObj.value     = tanggal;
            alamatObj.value      = alamat;
            hpObj.value          = no;
            gambarSkgObj.value   = gambarS;

            profilObj.style.background      = `url('${gambar}') top center`;
            profilObj.style.backgroundSize  = 'cover';
            
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>