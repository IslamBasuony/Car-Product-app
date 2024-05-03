@extends('layouts.app')
@section('title', 'Add Car')

@section('content')
    <form class="card spase" role="search" action="{{ route('cars.search') }}" method="GET">
        <input id="search" class="sign_up_controle" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn_search" type="submit">Search</button>
    </form>
    <div class="all-data">
        <div class="product">
            @foreach ($cars as $car)
                <div class='product-container'>
                    <img src='{{ asset('images/' . $car->image) }}' alt='car Image' class='product-image'>
                    <div class='product-details'>
                        <p>Car Name: <b>{{ $car->name }}</b></p>
                        <a href="#" class="btn open-modal" data-car-id="{{ $car->id }}">Details</a>
                        <a class='btn'>Buying</a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this Car?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn_del">Delete</button>
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
    </div>
    <div class="container contaner-search product" style="display: none;">

    </div>
    <script>
        $('#search').on('keyup', function() {
            $value = $(this).val();
            if ($value) {
                $('.all-data').hide();
                $('.contaner-search').show();
            } else {
                $('.all-data').show();
                $('.contaner-search').hide();
            }
            $.ajax({
                type: 'get',
                url: '{{ route('cars.search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    let html = '';
                    $.each(data, function(index, car) {
                        html += '<div class="product-container">';
                        html += '<img src="{{ asset('images/') }}/' + car.image +
                            '" alt="car Image" class="product-image">';
                        html += '<div class="product-details">';
                        html += '<p>Car Name: <b>' + car.name + '</b></p>';
                        html += '<p>Car Body: <b>' + car.body + '</b></p>';
                        html += '</div>';
                        html += '</div>';
                    });
                    $('.contaner-search').html(html);
                }
            })
        })
    </script>

@endsection
