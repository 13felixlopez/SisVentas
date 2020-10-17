<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Producto extends Controller
{
    //
    public function index(){
    	return \App\Models\Producto::all();
    }
}
