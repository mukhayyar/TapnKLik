<?php

namespace App\Http\Controllers\Toko\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
}
