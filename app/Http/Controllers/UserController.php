<?php

namespace App\Http\Controllers;

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
        $user = Usermodel::where('level_id', 2)->count();
        
        
    return view('user',['data'=> $user]);
    }

    public function user($id,$name){
        return "Halaman User<br>ID: $id<br>Nama: $name";
    }

    public function transaction($id,$product){
        return "ID belanja anda adalah : $id<br> Nama product : $product";
    }
}
