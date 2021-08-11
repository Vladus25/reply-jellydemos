@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('storeTestimonial') }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Create Testimonial:</h1>
                </li>
                <li><input type="text" name="author" placeholder="Author"></li>
                <li><input type="text" name="description" placeholder="Description"></li>
            </ul>
            <button type="submit" class="home">Ad Testimonial</button>
        </form>
    </div>
</main>
@endsection
