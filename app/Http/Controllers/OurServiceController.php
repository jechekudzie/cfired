<?php

namespace App\Http\Controllers;

use App\Models\OurService;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    //
    public function index()
    {
        $ourServices = OurService::all();
        return view('administration.service_introduction.index',compact('ourServices'));
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

        // Create and save the new ourService
        $ourService = OurService::create($validatedData);

        // Redirect or return a response
        return redirect()->route('our-services-introduction.index')->with('success', 'OurService created successfully!');
        // For an API, you might return a JSON response
        // return response()->json($ourService, 201);
    }

    public function create()
    {
        return view('administration.service_introduction.create');
    }

    public function show(OurService $ourService)
    {
        return view('administration.service_introduction.show',compact('ourService'));
    }

    public function edit(OurService $ourService)
    {
        return view('administration.service_introduction.edit',compact('ourService'));
    }

    public function update(Request $request, OurService $ourService)
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

        // Update the ourService
        $ourService->update($validatedData);

        // Redirect or return a response
        return redirect()->route('our-services-introduction.index')->with('success', 'Service Introduction updated successfully!');
        // For an API, you might return a JSON response
        // return response()->json($ourService, 200);
    }

    public function destroy(OurService $ourService)
    {
        $ourService->delete();
        return redirect()->route('our-services-introduction.index')->with('success', 'Service Introduction deleted successfully!');
        // For an API, you might return a JSON response
        // return response()->json(null, 204);
    }
}
