<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    public function GetProducts()
    {
        return view('products');
    }
    public function AboutUs()
    {
        return view('abouts');
    }

    public function CallUs()
    {
        return view('callus');
    }
    public function MyProducts()
    {
        return view('myproducts');
    }
}
