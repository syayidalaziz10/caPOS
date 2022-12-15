<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use App\Models\Pemesanan;
use App\Models\Menu;
use Illuminate\Http\Request;

class DetailPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pemesanan)
    {
        // ddd($pemesanan);
        $data['title'] = 'Menu';
        $data['details'] = DetailPemesanan::where('detail_pemesanan.id_pemesanan', '=', $pemesanan )->join('menu', 'detail_pemesanan.id_menu','=','menu.id_menu')->join('pemesanan', 'detail_pemesanan.id_pemesanan','=','pemesanan.id_pemesanan')->get();
        // $data['details'] = DetailPemesanan::get();
        // ddd($data);
        return view('pemesanan.detail', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPemesanan $detailPemesanan)
    {
        //
    }
}
