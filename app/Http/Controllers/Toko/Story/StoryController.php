<?php

namespace App\Http\Controllers\Toko\Story;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return view('story');
    }
}
