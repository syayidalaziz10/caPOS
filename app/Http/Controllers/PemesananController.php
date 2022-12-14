<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Menu';
        $data['q'] = $request->get('q');
        $data['menu'] = Menu::where('nama_menu', 'like', '%' .$data['q']. '%')->join('kategori', 'menu.id_kategori', '=', 'kategori.id_kategori')->get();
        return view('pemesanan.index', $data);
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
