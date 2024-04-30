@extends('layouts.app')
@section('title', 'Add Car')


@section('content')

    <div class='product'>
        @foreach ($cars as $car)
            <div class='product-container'>
                <img src='{{ asset('images/' . $car->image) }}' alt='Product Image' class='product-image'>
                <div class='product-details'>
                    <p>Car Name: <b>{{ $car->name }}</b></p>
                    <p>Price: <b>{{ $car->price }} </b></p>
                    <p>Year: <b>{{ $car->manufacturing_year }}</b></p>
                    <p>Color: <b>{{ $car->color }} </b></p>
                    <p>Category: <b>{{ $car->category }} </b></p>
                    <p>Condition: <b>{{ $car->condition }} </b></p>
                    <p>Body: <b>{{ $car->body }} </b></p>
                    <button class='btn-buy'>Buying</button>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this Car?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn category-btn">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


@endsection
