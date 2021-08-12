@extends('layouts.main-layout')
@section('content')
<main class="create-testimonial">
    <form method="POST" action="{{ route('storeTestimonial') }}">
        @csrf
        @method('POST')

        <div class="container-testimonial">
            <div class="container-2">

                <h2>Create Testimonial</h2>
                <div class="testimonial">
                    <ul>
                        <li>Author</li>
                        <li>Description</li>
                    </ul>
                </div>

                <div class="testimonial">
                    <ul>
                        <li><input type="text" name="author" placeholder="Author"></li>
                        <li><input type="text" name="description" placeholder="Description"></li>
                    </ul>
                </div>

                <div class="new-testimonial">
                    <button type="submit" class="home">Ad Testimonial</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection
