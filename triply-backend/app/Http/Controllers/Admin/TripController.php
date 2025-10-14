<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Trip;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $tags = Tag::all();
        return view('trips.create', compact('categories', 'tags'));
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
        $newTrip->category_id = $data['category_id'];
        $newTrip->description = $data['description'];
        if (array_key_exists("image", $data)) {
            $img_url = Storage::putFile("trips", $data['image']);
            $newTrip->cover_image = $img_url;
        }
        $newTrip->save();
        if ($request->has('tags')) {
            $newTrip->tags()->attach($data['tags']);
        }
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
        $categories  = Category::all();
        $tags = Tag::all();
        return view('trips.edit', compact('trip', 'categories', 'tags'));
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
        $trip->category_id = $data['category_id'];
        $trip->description = $data['description'];
        if (array_key_exists('image', $data)) {
            if ($trip->cover_image) {
                Storage::delete($trip->cover_image);
            }
            $img_url = Storage::putFile('trips', $data['image']);
            $trip->cover_image = $img_url;
        }
        $trip->update();

        if ($request->has('tags')) {
            $trip->tags()->sync($data['tags']);
        } else {
            $trip->tags()->detach();
        }

        return redirect()->route('trips.show', $trip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->tags()->detach();
        if ($trip->cover_image) {
            Storage::delete($trip->cover_image);
        }
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
