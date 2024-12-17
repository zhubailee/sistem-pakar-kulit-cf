<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function daftar(){
        return view('auth.daftar');
    }

    public function loginProcess(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'username'  =>  'required',
            'password'  =>  'required'
        ],[
            'required'  =>  ':attribute tidak boleh kosong'
        ]);
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $masuk = auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']));
        if($masuk){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard')->withSuccess('Welcome, '.Auth::user()->nama);
            }elseif(Auth::user()->role == 'user'){
                return redirect()->route('user.dashboard')->withSuccess('Welcome, '.Auth::user()->nama);
            }else{
                return redirect()->route('auth.login')->withErrors('Login gagal');
            }
        }else{
            return redirect()->route('auth.login')->withErrors('Login gagal');
        }
    }

    public function daftarProcess(Request $request){
        $this->validate($request,[
            'name'          =>  'required',
            'email'         =>  'required|email|unique:users,email',
            'username'      =>  'required|unique:users,username',
            'alamat'        =>  'required',
            'tanggal_lahir' =>  'required|date',
            'tempat_lahir'  =>  'required',
            'no_hp'         =>  'required',
            'jenis_kelamin' =>  'required',
        ],[
            'required'  =>  ':attribute wajib diisi',
            'email'     =>  ':attribute tidak valid',
            'unique'    =>  ':attribute sudah terdaftar',
            'date'      =>  ':attribute harus berupa tanggal',
        ]);
        $user = new User();
        $tambah = $user->factory()->create([
            'nama'          =>  $request->name,
            'email'         =>  $request->email,
            'username'      =>  $request->username,
            'alamat'        =>  $request->alamat,
            'tanggal_lahir' =>  $request->tanggal_lahir,
            'tempat_lahir'  =>  $request->tempat_lahir,
            'hp'            =>  $request->no_hp,
            'gender'         =>  $request->jenis_kelamin,
            'password'      =>  bcrypt('password'),
            'role'          =>  'user',
        ]);
        return $tambah ? redirect( route('auth.login'))->withSuccess('Akun berhasil dibuat') : redirect()->back()->withErrors('Akun gagal dibuat');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));
    }
}
