@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('storePlate') }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Create Plate:</h1>
                </li>
                <li><input type="text" name="category" placeholder="Category"></li>
                <li><input type="text" name="name" placeholder="Name"></li>
                <li><input type="text" name="description" placeholder="Description"></li>
                <li><input type="number" step=".01" name="price" placeholder="Price"></li>
            </ul>
            <button type="submit" class="home">Ad Plate</button>
        </form>
    </div>
</main>
@endsection
