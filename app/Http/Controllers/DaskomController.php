<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaskomController extends Controller
{
    public function index() {
        return view('home0293');
    }

    public function article() {
        return view('article0293');
    }

    public function contact() {
        return view('contact0293');
    }
}
