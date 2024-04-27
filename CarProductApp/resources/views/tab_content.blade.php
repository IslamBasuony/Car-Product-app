<div class="control-div">


    @foreach ($cars as $car)
        @if ($car->body === $body)
            <div class="gallary_app card">
                <img src="{{ asset('images/' . $car->image) }}" alt="Product Image" class="card_img">
                <div class="main-active close">
                    <div class="info-car">
                        <p>Price: <b>{{ $car->price }}</b></p>
                        <p>Year: <b>{{ $car->manufacturing_year }}</b></p>
                        <p>Color: <b>{{ $car->color }}</b></p>
                        <p>Category: <b>{{ $car->category }}</b></p>
                        <p>Condition: <b>{{ $car->condition1 }}</b></p>
                        <p>Body: <b>{{ $car->body }}</b></p>
                        <button class="btn-buy">Buying</button>
                        <form action="{{ route('admins.delete', $car->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this Car?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn category-btn">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="card_info">
                    <h5>Car Name: <b>{{ $car->name }}</b></h5>
                    <div class="">
                        <a class="icon">read more</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    </div>