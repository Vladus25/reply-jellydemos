@extends('layouts.main-layout')

@section('content')

    <main class="admin-main">

        {{-- Slides --}}
        <section class="admin-slides">
            <div>
                <h2>Slides</h2>
                <div class="slides">
                    <ul>
                        <li>Category</li>
                        <li>Img-Text</li>
                        <li>Edit</li>
                        <li>Delete</li>
                    </ul>
                </div>

                <div class="slides">
                    @foreach ($slides as $slide)
                        <ul>
                            <li>{{$slide -> category}}</li>
                            @if ($slide -> img != '')
                                <li>{{$slide -> img}}</li>
                            @endif
                            @if ($slide -> text != '')
                                <li>{{$slide -> text}}</li>
                            @endif
                            <li><a href="{{route('editSlide', $slide -> id)}}"><i class="fas fa-edit"></i></a></li>
                            <li><a href="{{route('deleteSlide', $slide -> id)}}"><i class="fas fa-trash-alt"></i></a></li>
                        </ul>
                    @endforeach
                </div>

                <div class="new-slide">
                    <a class="home" href="http://localhost:8000/create/slide">New Slide</a>
                </div>
            </div>
        </section>

        {{-- Plates --}}
        <section class="admin-plates">
            <div>
                <h2>Plates</h2>
                <div class="menu">
                    <ul>
                        <li>Category</li>
                        <li>Name</li>
                        <li>Description</li>
                        <li>Price</li>
                        <li>Edit</li>
                        <li>Delete</li>
                    </ul>
                </div>

                <div class="menu">
                    @foreach ($plates as $plate)
                        <ul>
                            <li>{{$plate -> category}}</li>
                            <li>{{$plate -> name}}</li>
                            <li>{{$plate -> description}}</li>
                            <li>{{$plate -> price}}</li>
                            <li><a href="{{route('editPlate', $plate -> id)}}"><i class="fas fa-edit"></i></a></li>
                            <li><a href="{{route('deletePlate', $plate -> id)}}"><i class="fas fa-trash-alt"></i></a></li>
                        </ul>
                    @endforeach
                </div>

                <div class="new-plate">
                    <a class="home" href="http://localhost:8000/create/plate">New Plate</a>
                </div>
            </div>
        </section>

        {{-- Testimonials --}}
        <section class="admin-testimonials">
            <div>
                <h2>Testimonials</h2>
                <div class="testimonials">
                    <ul>
                        <li>Author</li>
                        <li>Description</li>
                        <li>Edit</li>
                        <li>Delete</li>
                    </ul>
                </div>

                <div class="testimonials">
                    @foreach ($testimonials as $testimonial)
                        <ul>
                            <li>{{$testimonial -> author}}</li>
                            <li>{{$testimonial -> description}}</li>
                            <li><a href="{{route('editTestimonial', $testimonial -> id)}}"><i class="fas fa-edit"></i></a></li>
                            <li><a href="{{route('deleteTestimonial', $testimonial -> id)}}"><i class="fas fa-trash-alt"></i></a></li>
                        </ul>
                    @endforeach
                </div>

                <div class="new-testimonial">
                    <a class="home" href="http://localhost:8000/create/testimonial">New Testimonial</a>
                </div>
            </div>
        </section>

    </main>

@endsection
