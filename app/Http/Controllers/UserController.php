<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index() {

    $user = UserModel::findOr(20,['username','nama'], function () {
        abort(404);
    });
    return view('user',['data'=> $user]);
    }

    public function user($id,$name){
        return "Halaman User<br>ID: $id<br>Nama: $name";
    }

    public function transaction($id,$product){
        return "ID belanja anda adalah : $id<br> Nama product : $product";
    }
}
