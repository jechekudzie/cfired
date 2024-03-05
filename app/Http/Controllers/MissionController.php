<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    //
    public function index()
    {
        $missions = Mission::all();
        return view('administration.our_mission.index',compact('missions'));
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

        // Create and save the new mission
        $mission = Mission::create($validatedData);

        // Redirect or return a response
        return redirect()->route('mission.index')->with('success', 'Mission created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($mission, 201);
    }

    public function create()
    {
        return view('administration.our_mission.create');
    }

    public function show(Mission $mission)
    {
        return view('administration.our_mission.show',compact('mission'));
    }

    public function edit(Mission $mission)
    {
        return view('administration.our_mission.edit',compact('mission'));
    }

    public function update(Request $request, Mission $mission)
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

        // Update the mission
        $mission->update($validatedData);

        // Redirect or return a response
        return redirect()->route('mission.index')->with('success', 'Mission updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($mission, 200);
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();
        return redirect()->route('mission.index')->with('success', 'Mission deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
