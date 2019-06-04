<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $items = ['First item', 'Second item', 'Third item'];
        $alt_tekst = 'my fantastic homepage';    
        return view('welcome', ['items' => $items, 'title' => $alt_tekst]);    
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
