<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Models::all();
        return $result->toJson();
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
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Models::find($id);
        return $result->toJson();
    }

    public function showbybrand($idbrand)
    {
        $result = Models::where("idbrand",$idbrand)->get();
        //return $result->toJson();
        return response($result->toJson());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function destroy(Models $models)
    {
        //
    }
}
