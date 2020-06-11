<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function support()
    {
        return view('support');
    }

    public function template()
    {
        return view('template');
    }

    public function price()
    {
        return view('price');
    }

    public function cart()
    {
        return view('cart');
    }
}
