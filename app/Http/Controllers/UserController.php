<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index() {

        // Praktikum 2.1
    // // $user = UserModel::findOr(20,['username','nama'], function () {
    // //     abort(404);aa
    // });

    // Pratikum 2.2

    // Praktikum 2.3
        // $user = Usermodel::where('level_id', 2)->count();
        
        // Praktikum 2.4
        // $user = Usermodel::firstOrNew(
        //     [
        //         'username'=> 'manager',
        //         'nama'=> 'Manager',
        //     ],
        // );
        
        // Praktikum 2.5
        // $user = Usermodel::create([
        //     'username' => 'manager11',
        //     'nama'=> 'Manager11',
        //     'password'=>Hash::make('12345'),
        //     'level_id'=>2,
        // ]);
        // $user->username = 'manager12';

    
        // $user->save();

        // $user->wasChanged();
        // $user->wasChanged('username');
        // $user->wasChanged(['username','level_id']);
        // $user->wasChanged('nama');
        // dd($user->wasChanged(['nama','username']));

        // Praktikum 2.5

           // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama','username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama','username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();

        // dd($user->isDirty());

        $user = Usermodel::with('level')->get();

        // dd($user);
        return view('user', ['data' => $user]);
  
    }

    // public function user($id,$name){
    //     return "Halaman User<br>ID: $id<br>Nama: $name";
    // }

    // public function transaction($id,$product){
    //     return "ID belanja anda adalah : $id<br> Nama product : $product";
    // }

    public function tambah(){
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) {
        Usermodel::create([
            'username'=> $request->username,
            'nama'=> $request->nama,
            'password'=> Hash::make('$request->password'),
            'level_id'=> $request->level_id
        ]);
        return redirect('/user');
       
    }

    public function ubah($id) {
        $user = Usermodel::find($id);
        return view('user_ubah',['data'=> $user]);
    }

    public function ubah_simpan($id, Request $request) {
        $user = Usermodel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');

    }

    public function hapus($id){
        $user = Usermodel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
