<?php

namespace App\Http\Controllers;

use App\Models\b2;
use Illuminate\Http\Request;

class B2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('niveau-tests.b2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b2 = b2::all();

        return view('niveau-tests.b2', [
            'b2' => $b2
        ]);
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
     * @param  \App\Models\b2  $b2
     * @return \Illuminate\Http\Response
     */
    public function show(b2 $b2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\b2  $b2
     * @return \Illuminate\Http\Response
     */
    public function edit(b2 $b2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\b2  $b2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, b2 $b2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\b2  $b2
     * @return \Illuminate\Http\Response
     */
    public function destroy(b2 $b2)
    {
        //
    }
}
