<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function homePage() {
        $colors = ['blue', 'green', 'red'];
        return view('welcome',compact('colors'));
    }

    public function aboutUs()
    {
        return view('about_us');
    }
}
