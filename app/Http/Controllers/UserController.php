<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    //
    public function home(){
        if(Auth::check()){
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            }
            else if ($user->level == 'kasir') {
                return redirect()->intended('kasir');
            }
            else if ($user->level == 'manajer') {
                return redirect()->intended('manajer');
            }
            return redirect()->intended('/');
        }

        $data['title'] = 'Home';
        return view('home', $data);
    }
    public function register(){
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function createKasir(){
        $data['title'] = 'Register';
        return view('user/createkasir', $data);
    }
    public function createManajer(){
        $data['title'] = 'Register';
        return view('user/createmanajer', $data);
    }
    public function kasir(Request $request){
        $data = [
            'title' => "Data Kasir",
            'page'  => "kasir",
            'q'     => $request->get('q')
        ];
       
        $data['users'] = User::where('level', '=', 'kasir')
        ->where(function($query) use($data){
            $query->where('nama', 'like', '%' .$data['q']. '%')
            ->orWhere('username', 'like', '%' .$data['q']. '%')
            ->orWhere('no_hp', 'like', '%' .$data['q']. '%');})->get();
        return view('', $data);
    }
    public function adminKasir(Request $request){
        $data = [
            'title' => "Data Kasir",
            'page'  => "kasir",
            'q'     => $request->get('q')
        ];
       
        $data['users'] = User::where('level', '=', 'kasir')->get();
        return view('admin/kasir', $data);
    }
    public function adminManajer(Request $request){
        $data = [
            'title' => "Data Manajer",
            'page'  => "manajer",
            'q'     => $request->get('q')
        ];
       
        $data['users'] = User::where('level', '=', 'manajer')->get();
        return view('admin/manager', $data);
    }
    public function manajer(Request $request){
        $data['title'] = 'Data Manajer';
        $data['q'] = $request->get('q');
        $data['users'] = User::where('level', '=', 'manajer')
        ->where(function($query) use($data){$query->where('nama', 'like', '%' .$data['q']. '%')->orWhere('username', 'like', '%' .$data['q']. '%')->orWhere('no_hp', 'like', '%' .$data['q']. '%');})->get();
        return view('user/manajer', $data);
    }
    
    public function adminMenu(Request $request){
        $data = [
            'title' => "Data Menu",
            'page'  => "menu",
            'q'     => $request->get('q')
        ];
       
        $data['menu'] = Menu::get();
        return view('admin/menu', $data);
    }
    public function register_action(Request $request){
        ddd($request);
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:50',
        //     'username' => 'required|unique:user|max:16|min:8',
        //     'password' => 'required|min:8',
        //     'password_confirmation' => 'required|same:password',
        //     'level' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'no_hp' => 'required|numeric',
        //     'gambar' => 'required'
        // ]);
        // $validatedData['password'] = Hash::make($validatedData['password']);
        // if($request->file('gambar')){
        //     $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        // }
        
        // // $user->save();
        // User::create($validatedData);
        // // $validatedData->save();
        // if ($request->level == 'kasir') {
        //     return redirect()->route('admin')->with('success', 'Registration Success Please Login');
        // } else if($request->level == 'manajer'){
        //     return redirect()->route('admin.manajer')->with('success', 'Registration Success Please Login');
        // }
        // return redirect()->route('home')->with('success', 'Registration Success Please Login');

    }

    public function login(){
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function login_action(request $request){

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credential = $request->only('username', 'password');
        if(Auth::attempt($credential)){
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            }
            else if ($user->level == 'kasir') {
                return redirect()->intended('kasir');
            }
            else if ($user->level == 'manajer') {
                return redirect()->intended('manajer');
            }
            return redirect()->intended('/');
        }
        return back()->withErrors('password', 'Wrong username or passord !!!');
        
    }

    public function password(){
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(request $request){

        $validatedData = $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required|same:new_password',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed');
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function edit(User $user)
    {
        $data['title'] = 'User';
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:50',
            'username' => 'required|unique:user|max:16|min:8',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'level' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|numeric',
            'gambar' => 'required|mimes:jpg,jpeg,png|file|max:2000'
        ]);
        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('menu-images');
        }

        User::where('id_menu', $menu->id_menu)->update($validatedData);
        if ($user->level == 'admin') {
            return redirect()->route('user.admin')->with('success', 'Success Deleting Menu');
        }
        else if ($user->level == 'kasir') {
            return redirect()->route('user.kasir')->with('success', 'Success Deleting Menu');
        }
        else if ($user->level == 'manajer') {
            return redirect()->route('user.manajer')->with('success', 'Success Deleting Menu');
        }
    }

    public function destroy(User $user)
    {
        if ($user->gambar) {
            Storage::delete($user->gambar);
        }
        User::destroy($user->id_user);
        if ($user->level == 'kasir') {
            return redirect()->route('user.kasir')->with('success', 'Registration Success Please Login');
        } else if($user->level == 'manajer'){
            return redirect()->route('user.manajer')->with('success', 'Registration Success Please Login');
        }
        return redirect()->route('home')->with('success', 'Registration Success Please Login');
    }
}

