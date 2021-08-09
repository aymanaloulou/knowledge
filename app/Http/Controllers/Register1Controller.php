<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\views;

class Register1Controller extends Controller
{
    public function index()
    {
        return view('register');
    }
}
