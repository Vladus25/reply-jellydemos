@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('updateTestimonial', $testimonial -> id) }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Edit Testimonial:</h1>
                </li>
                <li><input type="text" name="author" placeholder="Author" value="{{ $testimonial -> author }}"></li>
                <li><input type="text" name="description" placeholder="Description" value="{{ $testimonial -> description }}"></li>
            </ul>
            <button type="submit" class="home">Update Testimonial</button>
        </form>
    </div>
</main>
@endsection
