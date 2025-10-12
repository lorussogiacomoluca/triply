<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('trips.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newTrip = new Trip();
        $newTrip->title = $data['title'];
        $newTrip->destination = $data['destination'];
        $newTrip->start_date = $data['start_date'];
        $newTrip->end_date = $data['end_date'];
        $newTrip->price = $data['price'];
        $newTrip->category = $data['category'];
        $newTrip->description = $data['description'];
        $newTrip->save();
        return redirect()->route('trips.show', $newTrip);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        return view('trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $data = $request->all();

        $trip->title = $data['title'];
        $trip->destination = $data['destination'];
        $trip->start_date = $data['start_date'];
        $trip->end_date = $data['end_date'];
        $trip->price = $data['price'];
        $trip->category = $data['category'];
        $trip->description = $data['description'];

        $trip->update();

        return redirect()->route('trips.show', $trip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
