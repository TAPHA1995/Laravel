<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesCotroller extends Controller
{
   
    public function about(){
        return view('about.about');
    }
    
    public function contact(){
        return view('about.contact');
    }
    public function index(){
        return view('about.index');
    }
}
