<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function form()
    {
        return view('pages.form');
    }
    public function lomba()
    {
        return view('pages.lomba');
    }
    public function film()
    {
        return view('pages.kegiatan.film');
    }

}
