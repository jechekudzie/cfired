<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    //
    public function index()
    {
        $about = \App\Models\Introduction::first();
        $mission = \App\Models\Mission::first();
        $vision = \App\Models\Vision::first();
        $journey = \App\Models\Journey::first();
        $values = \App\Models\CoreValue::all();
        return view('website.index', compact('about', 'mission', 'vision', 'journey','values'));
    }

    public function about()
    {
        $about = \App\Models\Introduction::first();
        $mission = \App\Models\Mission::first();
        $vision = \App\Models\Vision::first();
        $journey = \App\Models\Journey::first();
        $values = \App\Models\CoreValue::all();
        $approach = \App\Models\OurApproach::first();
        return view('website.about', compact('about', 'mission', 'vision', 'journey','values','approach'));
    }

    //contact
    public function contact()
    {
        return view('website.contact');
    }

    //services
    public function services()
    {
        $intro = \App\Models\Introduction::first();
        $services = \App\Models\Service::all();
        return view('website.services',compact('services','intro'));
    }
    public function serviceDetails($service)
    {
        $service = Service::find($service);
        $otherServices = \App\Models\Service::all();
        return view('website.service_details',compact('otherServices','service'));
    }

    //send email using Contact Mailer
    public function store(Request $request)
    {
        $details = $request->only(['first_name', 'last_name', 'email', 'phone_number', 'message']);

        // Send email
        Mail::to('info@c4impacteval.org')->send(new Contact($details));

        return back()->with('success', 'Thanks for contacting us!');
    }
}