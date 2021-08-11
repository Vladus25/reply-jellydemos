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

    public function createPlate() {

        return view ('pages.createPlate');
    }

    public function storePlate(Request $request) {


        $validate = $request -> validate ([
            'category' => 'nullable|max:64',
            'name' => 'nullable|max:64',
            'description' => 'nullable|max:1024',
            'price' => 'nullable|numeric',
        ]);

        $plate = Plate::create($validate);
        return redirect() -> route('admin');
    }

    public function createSlide() {

        return view ('pages.createSlide');
    }

    public function storeSlide(Request $request) {


        $validate = $request -> validate ([
            'category' => 'nullable|max:64',
            'img' => 'nullable|max:64',
        ]);

        $slide = Slide::create($validate);
        return redirect() -> route('admin');
    }

    public function createTestimonial() {

        return view ('pages.createTestimonial');
    }

    public function storeTestimonial(Request $request) {


        $validate = $request -> validate ([
            'author' => 'nullable|max:64',
            'description' => 'nullable|max:1024',
        ]);

        $testimonial = Testimonial::create($validate);
        return redirect() -> route('admin');
    }

    public function editPlate($id) {

        $plate = Plate::findorFail($id);

        return view ('pages.editPlate', compact('plate'));
    }

    public function updatePlate(Request $request, $id) {

        $validate = $request -> validate ([
            'category' => 'nullable|max:64',
            'name' => 'nullable|max:64',
            'description' => 'nullable|max:1024',
            'price' => 'nullable|numeric',
        ]);

        $plate = Plate::findorFail($id);

        $plate -> update($validate);

        return redirect() -> route('admin');
    }

    public function editSlide($id) {

        $slide = Slide::findorFail($id);

        return view ('pages.editSlide', compact('slide'));
    }

    public function updateSlide(Request $request, $id) {

        $validate = $request -> validate ([
            'category' => 'nullable|max:64',
            'img' => 'nullable|max:64',
        ]);

        $slide = Slide::findorFail($id);

        $slide -> update($validate);

        return redirect() -> route('admin');
    }

    public function editTestimonial($id) {

        $testimonial = Testimonial::findorFail($id);

        return view ('pages.editTestimonial', compact('testimonial'));
    }

    public function updateTestimonial(Request $request, $id) {

        $validate = $request -> validate ([
            'author' => 'nullable|max:64',
            'description' => 'nullable|max:1024',
        ]);

        $testimonial = Testimonial::findorFail($id);

        $testimonial -> update($validate);

        return redirect() -> route('admin');
    }

    public function deletePlate($id) {

        $plate = Plate::findorFail($id);

        $plate -> delete();

        return redirect() -> route('admin');
    }

    public function deleteSlide($id) {

        $slide = Slide::findorFail($id);

        $slide -> delete();

        return redirect() -> route('admin');
    }

    public function deleteTestimonial($id) {

        $testimonial = Testimonial::findorFail($id);

        $testimonial -> delete();

        return redirect() -> route('admin');
    }
}
