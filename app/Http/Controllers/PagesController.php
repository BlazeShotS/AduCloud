<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Inicio()
    {
        return view('inicio');
    }

    public function Acercade()
    {
        return view('acercaDe');
    }


}
