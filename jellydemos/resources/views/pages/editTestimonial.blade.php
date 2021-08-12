@extends('layouts.main-layout')
@section('content')
<main class="edit-testimonial">
    <form method="POST" action="{{ route('updateTestimonial', $testimonial -> id) }}">
        @csrf
        @method('POST')

        <div class="container-testimonial">
            <div class="container-2">

                <h2>Edit Testimonial</h2>
                <div class="testimonial">
                    <ul>
                        <li>Author</li>
                        <li>Description</li>
                    </ul>
                </div>

                <div class="testimonial">
                    <ul>
                        <li><input type="text" name="author" placeholder="Author" value="{{ $testimonial -> author }}"></li>
                        <li><input type="text" name="description" placeholder="Description" value="{{ $testimonial -> description }}"></li>
                    </ul>
                </div>

                <div class="edit-testimonial">
                    <button type="submit" class="home">Edit Testimonial</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection
