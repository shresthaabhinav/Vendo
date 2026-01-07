<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function productdetail($slug)
    {
        return view('product-detail');
    }
}
