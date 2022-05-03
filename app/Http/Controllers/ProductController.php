<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cctv()
    {
        return view('cctv');
    }

    public function physical_intrusion()
    {
        return view('physical_intrusion');
    }

    public function access_control()
    {
        return view('access_control');
    }

    public function fire_detection()
    {
        return view('fire_detection');
    }

    public function building_management()
    {
        return view('building_management');
    }

    public function contact()
    {
        return view('contact');
    }

    public function cyber_security_training()
    {
        return view('cyber_security_training');
    }
}
