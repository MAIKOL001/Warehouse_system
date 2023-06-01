<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class merchantlistController extends Controller
{
    //
    public function list()
    {
        return view('merchantlist');
    }
}
