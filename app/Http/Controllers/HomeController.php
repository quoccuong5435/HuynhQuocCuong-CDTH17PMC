<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
    	return view('master');
    }
     public function profile()
    {
    	return view('profile');
    }
      public function index()
    {
    	return view('index');
    }

}
