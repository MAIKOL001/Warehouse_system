<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovementController extends Controller
{
    //
    public function movement()
    {
        return view('newmovement');
    }

     public function list()
    {
        return view('movementlist');
    }
}
