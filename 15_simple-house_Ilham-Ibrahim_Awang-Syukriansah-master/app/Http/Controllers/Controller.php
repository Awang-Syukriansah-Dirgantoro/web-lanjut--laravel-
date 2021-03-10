<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index() {
        $pizza = Post::all()->where('jenis','pizza');
        $noodle = Post::all()->where('jenis','noodle');
        $salad = Post::all()->where('jenis','salad');
        return view('index', ['menu1' => $pizza, 'menu2' => $salad, 'menu3' => $noodle]);
       }
       public function tentang() {
        return view('about');
       }
       public function kontak() {
        return view('contact');
       }
}
