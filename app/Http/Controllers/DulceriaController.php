<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DulceriaController extends Controller
{
    public function index(){
        return view('dulceria');
    }
}
