<?php

namespace App\Http\Controllers;

use App\Models\CoreValue;
use Illuminate\Http\Request;

class CoreValueController extends Controller
{
    //
    public function index()
    {
        $values = CoreValue::all();
        return view('administration.our_core_values.index',compact('values'));
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

        // Create and save the new coreValue
        $coreValue = CoreValue::create($validatedData);

        // Redirect or return a response
        return redirect()->route('core-values.index')->with('success', 'CoreValue created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($coreValue, 201);
    }

    public function create()
    {
        return view('administration.our_core_values.create');
    }

    public function show(CoreValue $coreValue)
    {
        return view('administration.our_core_values.show',compact('coreValue'));
    }

    public function edit(CoreValue $coreValue)
    {
        return view('administration.our_core_values.edit',compact('coreValue'));
    }

    public function update(Request $request, CoreValue $coreValue)
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

        // Update the coreValue
        $coreValue->update($validatedData);

        // Redirect or return a response
        return redirect()->route('core-values.index')->with('success', 'Core Value updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($coreValue, 200);
    }

    public function destroy(CoreValue $coreValue)
    {
        $coreValue->delete();
        return redirect()->route('core-values.index')->with('success', 'Core Value deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
