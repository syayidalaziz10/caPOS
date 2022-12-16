<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $data['title'] = 'Menu';
    //     $data['q'] = $request->get('q');
    //     $data['menu'] = Menu::where('nama_menu', 'like', '%' .$data['q']. '%')->join('kategori', 'menu.id_kategori', '=', 'kategori.id_kategori')->get();
    //     return view('pemesanan.index', $data);
    // }

    //SUM PENDAPATAN PERBULAN
    // SELECT SUM(dp.jumlah*mn.harga) FROM detail_pemesanan as dp
    // INNER JOIN pemesanan as ps, menu as mn
    // WHERE dp.id_menu = mn.id_menu 
    // AND ps.id_pemesanan = dp.id_pemesanan 
    // AND ps.tanggal_pemesanan 
    // BETWEEN  "2022-12-14" AND "2022-12-25"

    //GET DATA PEMESANAN PERBULAN
    // SELECT * FROM detail_pemesanan as dp
    // INNER JOIN pemesanan as ps, menu as mn
    // WHERE dp.id_menu = mn.id_menu 
    // AND ps.id_pemesanan = dp.id_pemesanan 
    // AND ps.tanggal_pemesanan 
    // BETWEEN  "2022-12-14" AND "2022-12-25"

    //GET JUMLAH MENU YANG DIPESAN PERBULAN
    // SELECT SUM(dp.jumlah) FROM detail_pemesanan as dp
    // INNER JOIN pemesanan as ps, menu as mn
    // WHERE dp.id_menu = mn.id_menu 
    // AND ps.id_pemesanan = dp.id_pemesanan 
    // AND dp.id_menu = 8
    // AND ps.tanggal_pemesanan 
    // BETWEEN  "2022-12-14" AND "2022-12-21";



    public function index(Request $request)
    {
        // ddd($request);
        $now = date('Y-m-d');
        $data = [
            'title' => 'Data Penjualan Hari Ini',
            'page'  => 'beranda',
            'q'     => $request->get('q'),
            'dataDetail' => []
        ];
        $data['totalPendapatan'] = DB::select(DB::raw("SELECT SUM(dp.jumlah*mn.harga) AS total
                                                       FROM detail_pemesanan AS dp 
                                                       INNER JOIN pemesanan AS ps, menu AS mn 
                                                       WHERE dp.id_menu = mn.id_menu 
                                                       AND ps.id_pemesanan = dp.id_pemesanan
                                                       AND ps.tanggal_pemesanan = '".$now."'"))[0];

        $data['jumlahMenu'] = DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jumlah
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan 
                                                  AND ps.tanggal_pemesanan ='".$now."'"))[0];

        $data['banyakMenu'] = DB::select(DB::raw("SELECT COUNT(DISTINCT dp.id_menu) AS banyak
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND ps.tanggal_pemesanan ='".$now."'"))[0];

        $data['totalPesanan'] = Pemesanan::where('tanggal_pemesanan','like','%' .$now. '%')->get()->count();
        $dataNow =  DB::select(DB::raw("SELECT DISTINCT dp.id_menu AS idMenu
        FROM detail_pemesanan AS dp
        INNER JOIN pemesanan AS ps
        WHERE ps.id_pemesanan = dp.id_pemesanan
        AND ps.tanggal_pemesanan ='".$now."'"));

        foreach($dataNow as $dn)
        {
            $dataCount = [
                "jmlMenu" => DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jml
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND dp.id_menu = ".$dn->idMenu."
                                                  AND ps.tanggal_pemesanan ='".$now."'"))[0],
                "menu" => Menu::where('id_menu', '=', $dn->idMenu)->get()

                                    
            ];
            array_push($data["dataDetail"],$dataCount);
        }


        // ddd($data["dataDetail"]);
        // $data['q'] = $request->get('q');
        
        // if ($data['q'] === null ) {
        //     $data['q'] = Carbon::today()->toDateString();
        // }
        // $data['pemesanan']       = Pemesanan::where('tanggal_pemesanan','like','%' .$data['q']. '%')->join('menu','pemesanan.id_menu','=','menu.id_menu')->get();
        // $data['jumlahPenjualan'] = Pemesanan::where('tanggal_pemesanan','like','%' .$data['q']. '%')->get()->count();
        // ddd($data['pemesanan']);
        // ddd($data['totalPendapatan']);
        // return view('pemesanan.report', $data);
        return view('manager.beranda', $data);
    }
    
    public function reportBulan(Request $request)
    {
        // ddd($request);
        $data = [
            'title' => 'Data Penjualan Per Bulan',
            'page'  => 'bulanan',
            'q'     => $request->get('q'),
            'r'     => $request->get('r'),
            'dataDetail' => []
        ];
        
        if ($data['q'] === null &&  $data['r'] === null) {
            $data['q'] = Carbon::today()->startOfMonth()->toDateString();
            $data['r'] = Carbon::today()->endOfMonth()->toDateString();
        }
        
        $data['totalPendapatan'] = DB::select(DB::raw("SELECT SUM(dp.jumlah*mn.harga) AS total
                                                       FROM detail_pemesanan AS dp 
                                                       INNER JOIN pemesanan AS ps, menu AS mn 
                                                       WHERE dp.id_menu = mn.id_menu 
                                                       AND ps.id_pemesanan = dp.id_pemesanan
                                                       AND ps.tanggal_pemesanan BETWEEN '".$data['q']."' AND '".$data['r']."'"))[0];

        $data['jumlahMenu'] = DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jumlah
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan 
                                                  AND ps.tanggal_pemesanan BETWEEN '".$data['q']."' AND '".$data['r']."'"))[0];

        $data['banyakMenu'] = DB::select(DB::raw("SELECT COUNT(DISTINCT dp.id_menu) AS banyak
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND ps.tanggal_pemesanan BETWEEN '".$data['q']."' AND '".$data['r']."'"))[0];

        $data['totalPesanan'] = Pemesanan::whereBetween('tanggal_pemesanan',[$data['q'],$data['r']])->get()->count();
        $dataNow =  DB::select(DB::raw("SELECT DISTINCT dp.id_menu AS idMenu
        FROM detail_pemesanan AS dp
        INNER JOIN pemesanan AS ps
        WHERE ps.id_pemesanan = dp.id_pemesanan
        AND ps.tanggal_pemesanan BETWEEN'".$data['q']."' AND '".$data['r']."'"));

        foreach($dataNow as $dn)
        {
            $dataCount = [
                "jmlMenu" => DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jml
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND dp.id_menu = ".$dn->idMenu."
                                                  AND ps.tanggal_pemesanan BETWEEN '".$data['q']."' AND '".$data['r']."'"))[0],
                "menu" => Menu::where('id_menu', '=', $dn->idMenu)->get()

                                    
            ];
            array_push($data["dataDetail"],$dataCount);
        }

        // ddd($data);

        // $data['pemesanan'] = Pemesanan::whereBetween('tanggal_pemesanan', [$data['q'], $data['r']])->join('user','pemesanan.id_user','=','user.id_user')->get();
        // ddd($data['pemesanan']);
        // return view('pemesanan.reportbulan', $data);
        return view('manager.report', $data);
    }

    public function reportHarian(Request $request)
    {
        // ddd($request);
        $data = [
            'title' => 'Data Penjualan Per Hari',
            'page'  => 'harian',
            'q'     => $request->get('q'),
            'dataDetail' => []
        ];
        
        if ($data['q'] === null) {
            $data['q'] = Carbon::today()->toDateString();
        }
        
        $data['totalPendapatan'] = DB::select(DB::raw("SELECT SUM(dp.jumlah*mn.harga) AS total
                                                       FROM detail_pemesanan AS dp 
                                                       INNER JOIN pemesanan AS ps, menu AS mn 
                                                       WHERE dp.id_menu = mn.id_menu 
                                                       AND ps.id_pemesanan = dp.id_pemesanan
                                                       AND ps.tanggal_pemesanan= '".$data['q']."'"))[0];

        $data['jumlahMenu'] = DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jumlah
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan 
                                                  AND ps.tanggal_pemesanan= '".$data['q']."'"))[0];

        $data['banyakMenu'] = DB::select(DB::raw("SELECT COUNT(DISTINCT dp.id_menu) AS banyak
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND ps.tanggal_pemesanan= '".$data['q']."'"))[0];

        $data['totalPesanan'] = Pemesanan::where('tanggal_pemesanan',$data['q'])->get()->count();
        $dataNow =  DB::select(DB::raw("SELECT DISTINCT dp.id_menu AS idMenu
        FROM detail_pemesanan AS dp
        INNER JOIN pemesanan AS ps
        WHERE ps.id_pemesanan = dp.id_pemesanan
        AND ps.tanggal_pemesanan='".$data['q']."'"));

        foreach($dataNow as $dn)
        {
            $dataCount = [
                "jmlMenu" => DB::select(DB::raw("SELECT SUM(dp.jumlah) AS jml
                                                  FROM detail_pemesanan AS dp
                                                  INNER JOIN pemesanan AS ps
                                                  WHERE ps.id_pemesanan = dp.id_pemesanan
                                                  AND dp.id_menu = ".$dn->idMenu."
                                                  AND ps.tanggal_pemesanan= '".$data['q']."'"))[0],
                "menu" => Menu::where('id_menu', '=', $dn->idMenu)->get()

                                    
            ];
            array_push($data["dataDetail"],$dataCount);
        }

        // ddd($data);

        // $data['pemesanan'] = Pemesanan::whereBetween('tanggal_pemesanan', [$data['q'], $data['r']])->join('user','pemesanan.id_user','=','user.id_user')->get();
        // ddd($data['pemesanan']);
        // return view('pemesanan.reportbulan', $data);
        return view('manager.report_hari', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = explode(',',$request->nama_menu);
        $raw = explode(',',$request->jumlah);
        $pemesanan = new Pemesanan([
            'id_user' => Auth::user()->id_user,
            'tanggal_pemesanan' => Carbon::today()->toDateString(),
            'total_biaya' => 0
        ]);
        $pemesanan->save();
        // $validatedData->id_pemesanan;
        // $pemesanan = Pemesanan::create($validatedData);
        $pemesanan->id_pemesanan;
        for ($i=0; $i < count($row); $i++) { 
            $detailPemesanan = new DetailPemesanan([
                'id_pemesanan' => $pemesanan->id_pemesanan,
                'id_menu' => "".$row[$i],
                'jumlah' => $raw[$i],
            ]);
            $detailPemesanan->save();
        }
        return redirect()->route('kasir.pemesanan')->with('success', 'Success Creating pemesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
