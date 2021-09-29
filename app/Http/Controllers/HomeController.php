<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function form()
    {
        return view('pages.form-film');
    }
    public function lomba()
    {
        return view('pages.lomba');
    }
    public function film()
    {
        return view('pages.kegiatan.film');
    }
    public function filmUmum()
    {
        return view('pages.kegiatan.film-umum');
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
    public function pubg()
    {
        return view('pages.kegiatan.pubg');
    }
    public function bultang()
    {
        return view('pages.kegiatan.bultang');
    }
    public function futsal()
    {
        return view('pages.kegiatan.futsal');
    }
    public function semnas()
    {
        return view('pages.kegiatan.semnas');
    }
    public function workshop()
    {
        return view('pages.kegiatan.workshop');
    }
    public function success()
    {
        return view('pages.success');
    }

}
