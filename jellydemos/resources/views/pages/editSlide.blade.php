@extends('layouts.main-layout')
@section('content')
<main class="edit-slide">
    <form method="POST" action="{{ route('updateSlide', $slide -> id) }}">
        @csrf
        @method('POST')

        <div class="container-slide">
            <div class="container-2">

                <h2>Edit Slide</h2>
                <div class="slide">
                    <ul>
                        <li>Category</li>
                        <li>Img</li>
                        <li>Text</li>
                    </ul>
                </div>

                <div class="slide">
                    <ul>
                        <li>
                            <select name="category">
                                <option value="Slide" @if ($slide -> category == "Slide") selected @endif>Slide</option>
                                <option value="Text-slide" @if ($slide -> category == "Text-slide") selected @endif>Text-slide</option>
                            </select>
                        </li>
                        <li><input type="file" name="img" placeholder="Img" value="{{ $slide -> img }}"></li>
                        <li><input type="text" name="text" placeholder="If 'Text-slide'" value="{{ $slide -> text }}"></li>
                    </ul>
                </div>

                <div class="edit-slide">
                    <button type="submit" class="home">Edit Slide</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection
