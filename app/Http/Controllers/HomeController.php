<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        session()->flush();
        return view('themes.'.session('theme', 'classic').'.home');
    }
}
