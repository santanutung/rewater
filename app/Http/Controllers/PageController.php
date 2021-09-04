<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        // return view('frontend.index');
        return view('frontend.home');
    }
    public function about(){

        return view('frontend.home');
    }
    public function service(){

        return view('frontend.service');
    }
    public function service_details(){

        return view('frontend.service-details');
    }
    public function blog(){

        return view('frontend.blog');
    }
    public function blog_details(){

        return view('frontend.blog-details');
    }
    public function contact(){

        return view('frontend.contact');
    }
}
