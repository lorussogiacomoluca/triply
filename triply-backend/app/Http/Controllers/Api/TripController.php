<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return response()->json(
            [
                "success" => true,
                "data" => $trips
            ]
        );
    }

    public function show(Trip $trip)
    {
        $trip->load('category', 'tags');
        return response()->json(
            [
                "success" => true,
                "data" => $trip
            ]
        );
    }
}
