<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login()
{
    return view('login');
}
    public function register()
    {
        return view('register');
    }

    public function createThread()
    {
        return view('create-thread');
    }
    public function about()
    {
        return view('about');
    }
    public function contactUs()
    {
        return view('contact-us');
    }
}
