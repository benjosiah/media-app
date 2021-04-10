<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function welcome(){
        $video = Video::all();
        return view('welcome', ['videos'=> $video]);
    }

    public function profile(){

        return view('profile');
    }
}
