<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioskopController extends Controller
{
    public function index() 
    {
        return view('page.homepage');
    }
    public function show720() 
    {
        return view('page.720p');
    }
    public function faq()
    {
        return view('page.faq');
    }
    public function show1080()
    {
        return view('page.1080p');
    }
    public function play()
    {
        return view('page.nonton');
    }
    
}
