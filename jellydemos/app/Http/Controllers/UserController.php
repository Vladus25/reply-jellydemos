<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide;
use App\Plate;
use App\Testimonial;

class UserController extends Controller
{
    public function home(){

        $slides = Slide::all();
        $plates = Plate::all();
        $testimonials = Testimonial::all();
        return view('pages.home', compact('slides', 'plates', 'testimonials'));
    }
}
