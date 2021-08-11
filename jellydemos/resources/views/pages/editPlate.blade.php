@extends('layouts.main-layout')
@section('content')
<main>
    <div>
        <form method="POST" action="{{ route('updatePlate', $plate -> id) }}">
            @csrf
            @method('POST')

            <ul>
                <li>
                    <h1>Edit Plate:</h1>
                </li>
                <li><input type="text" name="category" placeholder="Category" value="{{ $plate -> category }}"></li>
                <li><input type="text" name="name" placeholder="Name" value="{{ $plate -> name }}"></li>
                <li><input type="text" name="description" placeholder="Description" value="{{ $plate -> description }}"></li>
                <li><input type="number" name="price" step=".01" placeholder="Price" value="{{ $plate -> price }}"></li>

            </ul>
            <button type="submit" class="home">Update Plate</button>
        </form>
    </div>
</main>
@endsection
