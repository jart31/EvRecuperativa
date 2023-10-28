<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function cafe()
    {
        $cafeProducts = Product::where('category', 'café')->get();
        return view('cafeProducts', ['products' => $cafeProducts]);
    }

    public function pasteleria()
    {
        $pasteleriaProducts = Product::where('category', 'pastelería')->get();
        return view('pasteleriaProducts', ['products' => $pasteleriaProducts]);
    }

    public function sandwich()
    {
        $sandwichProducts = Product::where('category', 'sándwich')->get();
        return view('sandwichProducts', ['products' => $sandwichProducts]);
    }
}
