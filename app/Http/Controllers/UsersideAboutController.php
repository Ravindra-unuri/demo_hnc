<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersideAboutController extends Controller
{
     public function index()
    {
        return view('about');
    }
}
