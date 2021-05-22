<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view("home_0277");
    }

    public function artikel(){
        return view("artikel_0277");
    }
}
