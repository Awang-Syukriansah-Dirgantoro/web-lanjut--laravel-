<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return view('home');
    }

    public function product($link){
        return view('product',['link' => $link]);
    }

    public function newsl($link){
        return view('news',['link' => $link]);
    }

    public function program($link){
        return view('program',['link' => $link]);
    }

    public function us(){
        return view('contact-us');
    }
}
