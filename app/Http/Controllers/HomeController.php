<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Index

    public function index(){
        $glide = false;
        return view('home.index');
    }
}
