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

    public function typography(){
        return view('typography');
    }

    public function alerts(){
        return view('alerts');
    }

    public function buttons(){
        return view ('buttons');
    }

    public function email(){
        return view('emails');
    }

}
