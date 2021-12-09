<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function brunch(){
        return view('/brunch');
    }

    public function bar(){
        return view('/bar');
    }

    public function fastfood(){
        return view('/fastfood');
    }

    public function casual(){
        return view('/casual');
    }

    public function ayce(){
        return view('/ayce');
    }

    public function beverages(){
        return view('/beverages');
    }

    public function livemusic(){
        return view('/livemusic');
    }

    public function finedining(){
        return view('/finedining');
    }

    public function streetfood(){
        return view('/streetfood');
    }

    public function register(){
        return view('/register');
    }

    public function login(){
        return view('/login');
    }

    public function home(){
        return view('/');
    }

}
