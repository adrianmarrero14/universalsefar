<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function documentos()
    {
        return view('documentos');
    }

    public function biblioteca()
    { 
        return view('biblioteca');
    }
}
