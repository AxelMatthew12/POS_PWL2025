<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function products(){
        return view('products');
    }
    public function foodbeverage(){
        return view('category.foodbeverage');
    }

    public function beautyhealth(){
       return view('category.beautyhealth');
    }

    public function homecare(){
       return view('category.homecare');
    }

    public function babykid(){
        return view('category.babykid');
    }
}
