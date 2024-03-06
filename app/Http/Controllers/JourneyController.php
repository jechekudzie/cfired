<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    //
    public function index()
    {
        $journeys = Journey::all();
        return view('administration.our_journey.index',compact('journeys'));
    }

    public function store(Request $request)
    {
        // Validate the request data, including the image file
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'text' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
        ]);

        // Check if an image file was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension(); // Create a unique name for the image

            // Move the image to the desired location and update the $validatedData array
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName); // Move the image to the /public/images directory
            $validatedData['image'] = "/images/$imageName"; // Store the path in the $validatedData array
        }

        // Create and save the new journey
        $journey = Journey::create($validatedData);

        // Redirect or return a response
        return redirect()->route('our-journey.index')->with('success', 'Journey created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($journey, 201);
    }

    public function create()
    {
        return view('administration.our_journey.create');
    }

    public function show(Journey $journey)
    {
        return view('administration.our_journey.show',compact('journey'));
    }

    public function edit(Journey $journey)
    {
        return view('administration.our_journey.edit',compact('journey'));
    }

    public function update(Request $request, Journey $journey)
    {
        // Validate the request data, including the image file
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'text' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
        ]);

        // Check if an image file was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension(); // Create a unique name for the image

            // Move the image to the desired location and update the $validatedData array
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName); // Move the image to the /public/images directory
            $validatedData['image'] = "/images/$imageName"; // Store the path in the $validatedData array
        }

        // Update the journey
        $journey->update($validatedData);

        // Redirect or return a response
        return redirect()->route('our-journey.index')->with('success', 'Journey updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($journey, 200);
    }

    public function destroy(Journey $journey)
    {
        $journey->delete();
        return redirect()->route('our-journey.index')->with('success', 'Journey deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
