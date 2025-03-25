<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.index'); //resource/front/index.blade.php
    }

    public function detail($id) {
        return view('front.detail'); //resource/front/index.blade.php
    }
}
