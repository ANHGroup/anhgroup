<?php

namespace App\Http\Controllers;

use App\Models\Anh;
use Illuminate\Http\Request;

class AnhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
     * @param  \App\Models\AnhController  $anhController
     * @return \Illuminate\Http\Response
     */
    public function show(AnhController $anhController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnhController  $anhController
     * @return \Illuminate\Http\Response
     */
    public function edit(AnhController $anhController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnhController  $anhController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnhController $anhController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnhController  $anhController
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnhController $anhController)
    {
        //
    }
}
