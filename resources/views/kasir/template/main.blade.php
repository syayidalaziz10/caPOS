<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>caPOS | {{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .addorder {
            border: 2px solid white;
        }
        ::-webkit-scrollbar {
            width: 5px;
            border-radius:1rem;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #1E2541;
            border-radius:1rem;
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
</head>
<body class="font-body bg-primary">
    <div class="flex">
        <div class="bg-warna-2">
            <sidebar class="flex h-screen w-36 bg-sidebar rounded-r-3xl flex-col justify-between p-10"> @yield('sidebar') </sidebar>
        </div>
        @yield('content')
    </div>


    <script>

        let valM    = document.getElementById('valMenu');
        let valJ    = document.getElementById('valJml');
        let lm      = document.getElementById('listmenu');  
        var ttlObj  = document.getElementById('totalhg');  

        let lstm    =[];
        let lstidm  =[];
        let lstNm   =[];
        let lstVal  =[];
        let lsthg   =[];
        let lstGb   =[];

        let buttons = document.querySelectorAll('.btn');
        var total   = 0;
        
        function tmbh(d)
        {
            valM.value = lstidm;
            valJ.value = lstVal;
            console.log(valJ.value);
        }

        buttons.forEach(button => {
            button.addEventListener('click', function (){
                this.classList.add('addorder');
            });
        })


        function hasClass( target, className ) {
            return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
        }

        function cobu(d){
            const ss    =  d.getAttribute("data-idmenu");
            const nama  =d.getAttribute("data-namamenu");
            const harga =d.getAttribute("data-hargamenu");
            const gambar=d.getAttribute("data-gambar");
            const hg    =d.getAttribute("data-hg");
            let da      = document.getElementById(d.getAttribute("data-idm")+"-inp");

            if (!hasClass(d,"terklik")) {
                lstidm.push(ss);
                lstVal.push(1);
                lstNm.push(nama);
                lsthg.push(hg);

                lstGb.push(gambar);
                console.log(lsthg);
                lstm.push(`<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${ss} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${gambar})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${nama}</h1>
                                        <p class="font-extralight">${hg}</p>
                                    </div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${ss}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=1>
                            </div>
                        </div>`);


                let cobustr = '';
                for(let i=0;i<lstm.length;i++)
                {
                    cobustr = `<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${lstidm[i]} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${lstGb[i]})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${lstNm[i]}</h1>
                                        <p class="font-extralight">Rp. ${lsthg[i]}</p>
                                    </div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${lstidm[i]}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=${lstVal[i]}>
                            </div>
                        </div>`+cobustr ;
                }
                // console.log(lstidm);
                // console.log(lstVal);
                lm.innerHTML = cobustr;
                d.classList.add('terklik');
                total+= Number(hg);
                ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
            }
            
            // alert(d.getAttribute("data-idmenu")+cobustr);
        }



        function hps(d)
        {
            let buttons = document.querySelectorAll('.addorder');
            const hg    = d.getAttribute("data-hg");

            let ssd = document.getElementById(d.getAttribute("data-idm"));
            let da  = document.getElementById(d.getAttribute("data-idm")+"-inp");
            ssd.classList.remove('addorder');
            ssd.classList.remove('terklik');

            let a1 = lstidm.indexOf(d.getAttribute("data-idm"));
            total-=Number(lsthg[a1]*da.value);
            lstm.splice(a1,1);
            lstidm.splice(a1,1);
            lstVal.splice(a1,1);
            lstNm.splice(a1,1);
            lsthg.splice(a1,1);
            lstGb.splice(a1,1);

            let cobustr = '';
            for(let i=0;i<lstm.length;i++)
            {
                cobustr = `<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${lstidm[i]} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${lstGb[i]})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${lstNm[i]}</h1>
                                        <p class="font-extralight">Rp. ${lsthg[i]}</p>
                                    </div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${lstidm[i]}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=${lstVal[i]}>
                            </div>
                        </div>`+cobustr ;   
            }
            // console.log(cobustr);
            lm.innerHTML = cobustr;
            
            ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');

        }





        /* --------------------- FUNGSI TAMBAH DAN KURANG VALUE MENU  --------------------- */
        function tmbhval (d) {
            const nama = d.getAttribute("data-idm");
            const hg   = d.getAttribute("data-hg");

            let ssd   = document.getElementById(nama+"-inp");
            let a1    = lstidm.indexOf(nama);
            ssd.value = Number(ssd.value)+1;
            lstVal[a1]+=1;
            total+= Number(hg);
            console.log(hg);
            ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
        }

        function krval (d) {
            const nama = d.getAttribute("data-idm");
            const hg   = d.getAttribute("data-hg");

            let ssd = document.getElementById(nama+"-inp");
            let a1  = lstidm.indexOf(nama);

            if(Number(ssd.value) > 1)
            {
                lstVal[a1]-=1;
                ssd.value = Number(ssd.value)-1;
                total-=Number(hg);
                console.log(total);
                ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
            }
            

        }
        /* --------------------- END FUNGSI TAMBAH DAN KURANG VALUE MENU  --------------------- */

        /* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}


    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>