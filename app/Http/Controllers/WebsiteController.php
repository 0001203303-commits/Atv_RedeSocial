<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller 
{
    public function login()
    {
        return view('login');
    }
  
        // Lógica para logout
    
    public function home()
    {
        return view('home');
    }

    public function explore()
    {
        return view('explore');
    }

     public function reels()
    {
        return view('reels');
    }
    
    public function messages()
    {
        return view('messages');
    }

    public function notification()
    {
        return view('notification');
    }

    public function profile()
    {
        return view('profile');
    }
   
}
