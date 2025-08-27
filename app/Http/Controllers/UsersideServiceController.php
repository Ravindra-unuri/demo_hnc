<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersideServiceController extends Controller
{
     public function index()
    {
        return view('service');
    }
}
