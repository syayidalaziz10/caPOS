<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
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
        $data['menu'] = Menu::where('nama_menu', 'like', '%' . $data['q'] . '%')->join('kategori', 'menu.id_kategori', '=', 'kategori.id_kategori')->get();
        return view('menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Menu';
        $data['kategori'] = Kategori::get();
        return view('menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|file|max:2000'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('menu-images');
        }
        // $menu->save();
        Menu::create($validatedData);
        return redirect()->route('admin.menu')->with('success', 'Success Creating Menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $data['title'] = 'Menu';
        $data['kategori'] = Kategori::get();
        $data['menu'] = $menu;
        return view('menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            // 'id_kategori' => 'required',
            'gambar' => 'image|file|max:2000'
        ]);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('menu-images');
        }

        Menu::where('id_menu', $menu->id_menu)->update($validatedData);
        return redirect()->route('admin.menu')->with('success', 'Success Editing Menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->gambar) {
            Storage::delete($menu->gambar);
        }
        Menu::destroy($menu->id_menu);
        return redirect()->route('admin.menu')->with('success', 'Success Deleting Menu');
    }
}
