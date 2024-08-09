<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function index() 
    {
        $title = "Global";
        $nama = ['Ica', 'alma'];
    //return view("welcome", ['title' => $title, 'names' => $nama]);
    return view("welcome", compact('title', 'nama'));
    }

    function produk()
    {
        $title = "Produk";
        $produk = Product::get();
        //dd($produk);
        return view("produk", compact('title', 'produk'));
    }

    function cart()
    {
        $title = "keranjang";
        return view("cart", compact('title'));
    }
}
