<?php

namespace App\Http\Controllers\Toko\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function render()
    {
        return view('order');
    }
}
