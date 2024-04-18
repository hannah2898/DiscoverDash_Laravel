<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;


class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destinations.index',['destinations'=>Destination::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create',['destinations'=>Destination::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinationRequest $request)
    {
        $destination =  Destination::create($request -> validated());
        $destination ->destinations()->attach($request->destination);
        return redirect()->route('destinations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('destinations.show',compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        return view('destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->update($request -> validated());
        return view('destinations.show',compact('destination'));
        //return redirect()->route('destinations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        Destination::destroy($id);
        return redirect()->route('destinations.index');
    }
    public function destroy(Destination $destination)
    {
        //
    }
}
