<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    { 
        return view('pages.home'); 
    }
    public function about() 
    { 
        return view('pages.about');
    }
    public function services() 
    { 
        return view('pages.services'); 
    }
    public function industries() 
    { 
        return view('pages.industries'); 
    }
    public function testimonials() 
    { 
        return view('pages.testimonials'); 
    }
    public function blog() 
    { 
        return view('pages.blog'); 
    }
    public function contact() 
    { 
        return view('pages.contact'); 
    }
    public function consultation() 
    { 
        return view('pages.consultation'); 
    }
}
