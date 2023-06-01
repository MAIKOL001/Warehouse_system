<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productlistController extends Controller
{
    //
    public function list()
    {
        return view('productlist');
    }

     public function details()
    {
        return view('productdetails');
    }

}
