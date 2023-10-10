<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view ('front_home');
    }

    public function about()
    {
        $data["title"] = "About";
        return view('front_about',$data); 
    }

     public function services()
    {
        $data["title"]= "Services";
        return view('front_services',$data); 
    }
    public function package()
    {
        $data["title"]="package";
        return view('front_package',$data);
    }
    public function contact()
    {
        $data["title"]="contact";
        return view('front_contact',$data);
    }
    public function destination()
    {
        $data["title"]="Destination";
        return view('front_destination',$data);
    }
    public function guides()
    {
        $data["title"]="Guides";
        return view('front_guides',$data);
    }
    public function booking()
    {
        $data["title"]="Booking";
        return view('front_booking',$data);
    }
     public function error()
    {
        $data["title"]="error";
        return view('front_error',$data);
    }
    public function testimonial()
    {
        $data["title"]="Testimonial";
        return view('front_testimonial',$data);
    }
     
}
