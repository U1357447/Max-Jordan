<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $people = ['Max', 'Jordan', 'Test'];
        return view('pages.about', compact('people'));
    }

    public function login()
    {
        return view('pages.login');
    }
}
