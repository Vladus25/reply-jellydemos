@extends('layouts.main-layout')
@section('content')
<main class="create-plate">
    <form method="POST" action="{{ route('storePlate') }}">
        @csrf
        @method('POST')

        <div class="container-plate">
            <div class="container-2">

                <h2>Create Plate</h2>
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
                                <option value="Prime Steaks">Prime Steaks</option>
                                <option value="Drinks & Wines">Drinks & Wines</option>
                                <option value="Desserts">Desserts</option>
                            </select>
                        </li>
                        <li><input type="text" name="name" placeholder="Name"></li>
                        <li><input type="text" name="description" placeholder="Description"></li>
                        <li><input type="number" step=".01" name="price" placeholder="Price"></li>
                    </ul>
                </div>

                <div class="new-plate">
                    <button type="submit" class="home">Ad Plate</button>
                </div>

            </div>
        </div>

    </form>
</main>
@endsection
