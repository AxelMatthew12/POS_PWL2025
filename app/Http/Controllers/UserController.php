<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index() {

        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username','customer-1')->update($data);    

        $user = UserModel::all();
        return view('user',['data'=> $user]);
    }

    public function user($id,$name){
        return "Halaman User<br>ID: $id<br>Nama: $name";
    }

    public function transaction($id,$product){
        return "ID belanja anda adalah : $id<br> Nama product : $product";
    }
}
