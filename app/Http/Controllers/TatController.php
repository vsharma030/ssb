<?php

namespace App\Http\Controllers;

use App\tat;
use Illuminate\Http\Request;

class TatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('psychology/psytat/tat_test');
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
     * @param  \App\tat  $tat
     * @return \Illuminate\Http\Response
     */
    public function show(tat $tat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tat  $tat
     * @return \Illuminate\Http\Response
     */
    public function edit(tat $tat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tat  $tat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tat $tat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tat  $tat
     * @return \Illuminate\Http\Response
     */
    public function destroy(tat $tat)
    {
        //
    }
}
