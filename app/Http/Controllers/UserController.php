<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user($id,$name){
        return "Halaman User<br>ID: $id<br>Nama: $name";
    }

    public function transaction($id,$product){
        return "ID belanja anda adalah : $id<br> Nama product : $product";
    }
}
