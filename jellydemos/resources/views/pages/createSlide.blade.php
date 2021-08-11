@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('storeSlide') }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Create Slide:</h1>
                </li>
                <li><input type="text" name="category" placeholder="Category"></li>
                <li><input type="text" name="img" placeholder="Img"></li>
            </ul>
            <button type="submit" class="home">Ad Slide</button>
        </form>
    </div>
</main>
@endsection
