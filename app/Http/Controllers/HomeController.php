<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Default Homepage
     * @return string
     */
    public function index(){
        return view('welcome');
    }
}
