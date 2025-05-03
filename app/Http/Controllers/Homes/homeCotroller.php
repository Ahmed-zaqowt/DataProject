<?php

namespace App\Http\Controllers\Homes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeCotroller extends Controller
{
    public function home()
    {
        return view('home');
    }
}
