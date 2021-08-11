<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Slide;
use App\Plate;
use App\Testimonial;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function alldata()
    {
        $slides = Slide::all();
        $plates = Plate::all();
        $testimonials = Testimonial::all();
        return view('pages.management', compact('slides', 'plates', 'testimonials'));
    }
}
