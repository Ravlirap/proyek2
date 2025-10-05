<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
{
    //
    public function index()
    {
        // return view('mhs');
        $mhs = "Ravli";
        return view('mhs', compact('mhs'));
    }  
}
