<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceivingController extends Controller
{
    //
    public function form()
    {
        return view('receiving');
    }


     public function list()
    {
        return view('stocklist');
    }


}
