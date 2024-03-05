<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    //
    public function index()
    {
        $visions = Vision::all();
        return view('administration.our_vision.index',compact('visions'));
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

        // Create and save the new vision
        $vision = Vision::create($validatedData);

        // Redirect or return a response
        return redirect()->route('vision.index')->with('success', 'Vision created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($vision, 201);
    }

    public function create()
    {
        return view('administration.our_vision.create');
    }

    public function show(Vision $vision)
    {
        return view('administration.our_vision.show',compact('vision'));
    }

    public function edit(Vision $vision)
    {
        return view('administration.our_vision.edit',compact('vision'));
    }

    public function update(Request $request, Vision $vision)
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

        // Update the vision
        $vision->update($validatedData);

        // Redirect or return a response
        return redirect()->route('vision.index')->with('success', 'Vision updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($vision, 200);
    }

    public function destroy(Vision $vision)
    {
        $vision->delete();
        return redirect()->route('vision.index')->with('success', 'Vision deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
