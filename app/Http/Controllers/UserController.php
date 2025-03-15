<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index() {

        // Praktikum 2.1
    // // $user = UserModel::findOr(20,['username','nama'], function () {
    // //     abort(404);
    // });

    // Pratikum 2.2
        $user = Usermodel::where('username','manager9')->firstOrFail();
    return view('user',['data'=> $user]);
    }

    public function user($id,$name){
        return "Halaman User<br>ID: $id<br>Nama: $name";
    }

    public function transaction($id,$product){
        return "ID belanja anda adalah : $id<br> Nama product : $product";
    }
}
