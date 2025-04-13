<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) { // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    // form untuk register

    public function register(Request $request) 
    {
       $request->validate([
        'username' => 'required|string|min:3|max:50|unique:m_user,username',
        'nama' => 'required|string|max:100',
        'password'=> 'required|string|min:5|confirmed',
       ]);

       $level = \App\Models\LevelModel::where('Level_kode', 'STF')->first();

       if(!$level) {
        return back()->with('error', 'level STF tidak ditemukan');
       }

       $lastId = DB::table('m_user')->max('user_id');
       $newUserId = $lastId ? $lastId + 1 : 1;

       \App\Models\UserModel::create([
        'user_id' => $newUserId,
        'username' => $request->username,
        'nama' => $request->nama,
        'password'=> Hash::make($request->password),
        'level_id' => $level->level_id,
       ]);
       return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan Login.');

    }
    public function showRegisterForm()
{
    return view('auth.register'); 
}


}
