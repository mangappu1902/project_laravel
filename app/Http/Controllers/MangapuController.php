<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangapuController extends Controller
{
    public function index()
    {
        return view('MANGAPU.index');
    }
    publiC function index_next()
    {
        return view('MANGAPU.index_next');
    }
}
