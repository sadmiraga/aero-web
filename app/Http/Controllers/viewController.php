<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function references()
    {
        return view('references');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function contact()
    {
        return view('contact');
    }

    public function home()
    {
        return view('home');
    }


    public function changeLang($lang)
    {
        App::setLocale($lang);
        return redirect()->back();
    }
}
