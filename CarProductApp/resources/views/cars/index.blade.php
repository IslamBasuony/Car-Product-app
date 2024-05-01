@extends('layouts.app')
@section('title', 'Add Car')


@section('content')
    <form class="card spase" role="search" action="{{ route('cars.index') }}" method="GET" onsubmit="handleSearch(event)">
        <input class="sign_up_controle" placeholder="Search" aria-label="Search" name="q"
            onkeydown="fetchSearchResult(event)">
        <button class="btn icon" type="submit">Search</button>
    </form>
    <div class='product'>
        {{-- @dd($cars) --}}
        @foreach ($cars as $car)
            <div class='product-container'>
                <img src='{{ asset('images/' . $car->image) }}' alt='car Image' class='product-image'>
                <div class='product-details'>
                    <p>Car Name: <b>{{ $car->name }}</b></p>
                    <p>Price: <b>{{ $car->price }} </b></p>
                    <p>Year: <b>{{ $car->manufacturing_year }}</b></p>
                    <p>Color: <b>{{ $car->color }} </b></p>
                    <p>Category: <b>{{ $car->category }} </b></p>
                    <p>Condition: <b>{{ $car->condition }} </b></p>
                    <p>Body: <b>{{ $car->body }} </b></p>
                    <a href="#" class="btn icon open-modal" data-car-id="{{ $car->id }}">Details</a>
                    <a class='btn icon'>Buying</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this Car?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </div>
            </div>



            <div class="modal hidden" id="{{ $car->id }}">
                <div class="mod">
                    <div class="modal_replace">

                        <div class="modal_img">
                            <img class="modal_img_photo" src='{{ asset('images/' . $car->image) }}' alt="car">
                        </div>
                        <div class="modal_info">
                            <h4 class="modal_title">info car</h4>
                            <p>name: <b>{{ $car->name }}</b></p>
                            <p>Price: <b>{{ $car->price }}</b></p>
                            <p>Year: <b>{{ $car->manufacturing_year }}</b></p>
                            <p>Color: <b>{{ $car->color }}</b></p>
                            <p>Category: <b>{{ $car->category }}</b></p>
                            <p>Condition: <b>{{ $car->condition }}</b></p>
                            <p>Body: <b>{{ $car->body }}</b></p>
                            <a class="modal_btn" href="#" data-target-remove="mood">buying ok</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.open-modal');
            buttons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    var carId = this.getAttribute('data-car-id');
                    var modal = document.getElementById(carId);
                    modal.classList.remove('hidden');
                });
            });
        });
        const modalClose = window.document.querySelectorAll('[data-target-remove]');
        if (modalClose) {
            modalClose.forEach((ele) => {
                ele.addEventListener('click', () => {
                    const modalRemove = ele.closest('.modal');
                    modalRemove.classList.add('hidden');
                });
            });
        }
    </script>

@endsection
