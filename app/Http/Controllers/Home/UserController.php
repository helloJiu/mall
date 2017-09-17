<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class UserController extends Controller
{
    public function login(){
        return view('home.member.login');
    }

    public function index(){
        return view('home.shop.goods');
    }
}
