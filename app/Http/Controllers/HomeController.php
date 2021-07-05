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
    public function cerdas()
    {
        return view('pages.kegiatan.cerdas');
    }
    public function iot()
    {
        return view('pages.kegiatan.iot');
    }
    public function ui()
    {
        return view('pages.kegiatan.ui');
    }
    public function moba()
    {
        return view('pages.kegiatan.moba');
    }

}
