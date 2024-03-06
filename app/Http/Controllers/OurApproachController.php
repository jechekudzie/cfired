<?php

namespace App\Http\Controllers;

use App\Models\OurApproach;
use Illuminate\Http\Request;

class OurApproachController extends Controller
{
    //
    public function index()
    {
        $ourApproaches = OurApproach::all();
        return view('administration.our_approach.index',compact('ourApproaches'));
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

        // Create and save the new ourApproach
        $ourApproach = OurApproach::create($validatedData);

        // Redirect or return a response
        return redirect()->route('our-approach.index')->with('success', 'OurApproach created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($ourApproach, 201);
    }

    public function create()
    {
        return view('administration.our_approach.create');
    }

    public function show(OurApproach $ourApproach)
    {
        return view('administration.our_approach.show',compact('ourApproach'));
    }

    public function edit(OurApproach $ourApproach)
    {
        return view('administration.our_approach.edit',compact('ourApproach'));
    }

    public function update(Request $request, OurApproach $ourApproach)
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

        // Update the ourApproach
        $ourApproach->update($validatedData);

        // Redirect or return a response
        return redirect()->route('our-approach.index')->with('success', 'Our Approach updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($ourApproach, 200);
    }

    public function destroy(OurApproach $ourApproach)
    {
        $ourApproach->delete();
        return redirect()->route('our-approach.index')->with('success', 'Our Approach deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
