<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() 
{
    return view('home.mainHome', [
        'produks' => produks::all(),
        'users' => users::all(),
    ]);
}
}
