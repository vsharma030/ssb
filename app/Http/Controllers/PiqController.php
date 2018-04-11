<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiqController extends Controller
{
    public function index()
    {
        return view('/piq/piqintro');
    }
}
