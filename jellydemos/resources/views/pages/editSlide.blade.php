@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('updateSlide', $slide -> id) }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Edit Slide:</h1>
                </li>
                <li><input type="text" name="category" placeholder="Category" value="{{ $slide -> category }}"></li>
                <li><input type="text" name="img" placeholder="Img" value="{{ $slide -> img }}"></li>
            </ul>
            <button type="submit" class="home">Update Slide</button>
        </form>
    </div>
</main>
@endsection
