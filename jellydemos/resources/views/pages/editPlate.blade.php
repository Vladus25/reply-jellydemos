@extends('layouts.main-layout')
@section('content')
<main class="edit-plate">
    <form method="POST" action="{{ route('updatePlate', $plate -> id) }}">
        @csrf
        @method('POST')

        <div class="container-plate">
            <div class="container-2">

                <h2>Edit Plate</h2>
                <div class="plate">
                    <ul>
                        <li>Category</li>
                        <li>Name</li>
                        <li>Description</li>
                        <li>Price</li>
                    </ul>
                </div>

                <div class="plate">
                    <ul>
                        <li>
                            <select name="category">
                                <option value="Prime Steaks" @if ($plate -> category == "Prime Steaks") selected @endif>Prime Steaks</option>
                                <option value="Drinks & Wines" @if ($plate -> category == "Drinks & Wines") selected @endif>Drinks & Wines</option>
                                <option value="Desserts" @if ($plate -> category == "Desserts") selected @endif>Desserts</option>
                            </select>
                        </li>
                        <li><input type="text" name="name" placeholder="Name" value="{{ $plate -> name }}"></li>
                        <li><input type="text" name="description" placeholder="Description" value="{{ $plate -> description }}"></li>
                        <li><input type="number" step=".01" name="price" placeholder="Price" value="{{ $plate -> price }}"></li>
                    </ul>
                </div>

                <div class="edit-plate">
                    <button type="submit" class="home">Edit Plate</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection

{{-- @extends('layouts.main-layout')
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
@endsection --}}
