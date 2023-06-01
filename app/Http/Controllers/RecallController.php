<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecallController extends Controller
{
    //
    public function recall()
    {
        return view('newrecall');
    }

    public function list()
    {
        return view('recalllist');
    }
}
