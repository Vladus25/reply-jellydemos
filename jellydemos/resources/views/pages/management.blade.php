@extends('layouts.main-layout')

@section('content')

    <main>

        {{-- Slides --}}
        <section>
            <ul>
                @foreach ($slides as $slide)
                    <li>
                        {{$slide -> category}}
                        {{$slide -> img}}
                    </li>
                    <li>
                        <a href="{{route('editSlide', $slide -> id)}}">edit</a>
                        <a href="{{route('deleteSlide', $slide -> id)}}">delete</a>
                    </li>
                @endforeach
            </ul>
            <a class="home" href="http://localhost:8000/create/slide">New Slide</a>
        </section>

        {{-- Plates --}}
        <section>
            <ul>
                @foreach ($plates as $plate)
                    <li>
                        {{$plate -> category}}
                        {{$plate -> name}}
                        {{$plate -> description}}
                        {{$plate -> price}}
                    </li>
                    <li>
                        <a href="{{route('editPlate', $plate -> id)}}">edit</a>
                        <a href="{{route('deletePlate', $plate -> id)}}">delete</a>
                    </li>
                @endforeach
            </ul>
            <a class="home" href="http://localhost:8000/create/plate">New Plate</a>
        </section>

        {{-- Testimonials --}}
        <section>
            <ul>
                @foreach ($testimonials as $testimonial)
                    <li>
                        {{$testimonial -> author}}
                        {{$testimonial -> description}}
                    </li>
                    <li>
                        <a href="{{route('editTestimonial', $testimonial -> id)}}">edit</a>
                        <a href="{{route('deleteTestimonial', $testimonial -> id)}}">delete</a>
                    </li>
                @endforeach
            </ul>
            <a class="home" href="http://localhost:8000/create/testimonial">New Testimonial</a>
        </section>

    </main>

@endsection
