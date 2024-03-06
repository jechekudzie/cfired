<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view('administration.services.index',compact('services'));
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

        // Create and save the new service
        $service = Service::create($validatedData);

        // Redirect or return a response
        return redirect()->route('services.index')->with('success', 'Service created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($service, 201);
    }

    public function create()
    {
        return view('administration.services.create');
    }

    public function show(Service $service)
    {
        return view('administration.services.show',compact('service'));
    }

    public function edit(Service $service)
    {
        return view('administration.services.edit',compact('service'));
    }

    public function update(Request $request, Service $service)
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

        // Update the service
        $service->update($validatedData);

        // Redirect or return a response
        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($service, 200);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
