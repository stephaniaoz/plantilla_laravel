<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    //
    public function index(){
        return view('basicos.pais.index');
    }
}
