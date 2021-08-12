@extends('layouts.main-layout')
@section('content')
<main class="create-slide">
    <form method="POST" action="{{ route('storeSlide') }}">
        @csrf
        @method('POST')

        <div class="container-slide">
            <div class="container-2">

                <h2>Create Slide</h2>
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
                                <option value="Slide">Slide</option>
                                <option value="Text-slide">Text-slide</option>
                            </select>
                        </li>
                        <li><input type="file" name="img"></li>
                        <li><input type="text" name="img" placeholder="If 'Text-slide'"></li>
                    </ul>
                </div>

                <div class="new-slide">
                    <button type="submit" class="home">Ad Slide</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection
