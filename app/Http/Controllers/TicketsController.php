<?php

namespace App\Http\Controllers;

use App\Vehicles;
use App\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Tickets::all();
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
        $vehicle = Vehicles::find($request->idvehicle);

        if ( is_null($vehicle)) {
            return response()->json($vehicle, 204);
        }

        $result = Tickets::create([
            "ticketnumber"  => 'TCK-00000001',
            "idvehicle"     => $vehicle->idvehicle,
            "join_datetime" => Carbon::now(),
            "exit_datetime" => Carbon::create(1900,01,01),
            "total_ticket"  => 0.00,
            "iduser"        => 0,
            "iddailyclose"  => 0
        ]);

        return response()->json($result, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
