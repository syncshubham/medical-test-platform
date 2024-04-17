<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function index()
    {
        return view("platform.home");
    }

    public function about_us()
    {
        return view("platform.aboutus");
    }

    public function contact_us()
    {
        return view("platform.contactus");
    }

    public function privacy_policy()
    {
        return view("platform.privacypolicy");
    }

    public function terms_conditions()
    {
        return view("platform.termsconditions");
    }

    public function refund_policy()
    {
        return view("platform.refundpolicy");
    }


    
    
}