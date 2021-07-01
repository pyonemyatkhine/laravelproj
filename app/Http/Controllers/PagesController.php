<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function aboutus(){
        return view('pages.aboutus');
    }

    function welcome(){
        return view('welcome');
    }

    function widgets(){
        return view('pages.widgets');
    }

    function calendar(){
        return view('pages.calendar');
    }
}