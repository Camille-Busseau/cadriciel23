<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercice1Controller extends Controller
{
    public function index(){
        return view ('home');
    }

    public function portfolio(){
        return view ('portfolio');
    }

    public function contact(){
        return view ('contact');
    }

    public function formContact(Request $request){
        return view ('contact', ['data' => $request]);
    }

    public function about(){
        return view ('about');
    }
}
