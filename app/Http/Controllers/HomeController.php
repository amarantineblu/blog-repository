<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
    }
    function about() {
        return view('about');
    }
    function contact() {
        return view('contact');
    }
    function allblogs() {
        return view('allblogs');
    }
    function singleblog() {
        return view('single_blog');
    }
    // function index() {
    //     return view('welcome');
    // }
    //
}
