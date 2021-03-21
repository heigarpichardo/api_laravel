<?php

namespace App\Http\Controllers;

use App\Vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Vehicles::all();
        return response()->json($result);
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
        $result = Vehicles::create($request->all());
        return response()->json($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Vehicles::find($id);;
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    
     public function showbyplate($plate)
    {
        $result = Vehicles::where("plate",$plate)->get();;;
        return response()->json($result);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicles $vehicles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicles $vehicles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicles  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicles $vehicles)
    {
        //
    }
}
