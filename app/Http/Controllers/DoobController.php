<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoobController extends Controller
{
    public function index(){
        return view('Doob.index');
    }

    public function contact(){
        return view('Doob.contact');
    }

    public function services(){
        return view('Doob.services');
    }

    public function about_us(){
        return view('Doob.about_us');
    }

    public function portfolio(){
        return view('Doob.portfolio');
    }
    public function blog(){
        return view('Doob.blog');
    }


}
