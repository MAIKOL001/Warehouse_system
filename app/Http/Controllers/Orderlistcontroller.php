<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orderlistcontroller extends Controller
{
    //
    public function list()
    {
        return view('orderlist');
    }

    public function index()

    {
        return view('ordersprocessing');
    }
}
