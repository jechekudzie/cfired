<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    //
    public function index()
    {
        $introductions = Introduction::all();
        return view('administration.introductions.index',compact('introductions'));
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

        // Create and save the new introduction
        $introduction = Introduction::create($validatedData);

        // Redirect or return a response
        return redirect()->route('introduction.index')->with('success', 'Introduction created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($introduction, 201);
    }

    public function create()
    {
        return view('administration.introductions.create');
    }

    public function show(Introduction $introduction)
    {
        return view('administration.introductions.show',compact('introduction'));
    }

    public function edit(Introduction $introduction)
    {
        return view('administration.introductions.edit',compact('introduction'));
    }

    public function update(Request $request, Introduction $introduction)
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

        // Update the introduction
        $introduction->update($validatedData);

        // Redirect or return a response
        return redirect()->route('introduction.index')->with('success', 'Introduction updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($introduction, 200);
    }

    public function destroy(Introduction $introduction)
    {
        $introduction->delete();
        return redirect()->route('introduction.index')->with('success', 'Introduction deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
