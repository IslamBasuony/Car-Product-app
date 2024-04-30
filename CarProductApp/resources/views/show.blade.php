<div class="modal hidden" id="{{ $cars->id }}" data-target-remove="mood">
    <div class="mod">
        <div class="modal_replace">

            <div class="modal_img">
                <img class="modal_img_photo" src="{{$cars->image}}" alt="car">
            </div>
            <div class="modal_info">
                <h4 class="modal_title">info car</h4>
                <p>name: <b>{{ $car->name }}</b></p>
                <p>Price: <b>{{ $car->price }}</b></p>
                <p>Year: <b>{{ $car->manufacturing_year }}</b></p>
                <p>Color: <b>{{ $car->color }}</b></p>
                <p>Category: <b>{{ $car->category }}</b></p>
                <p>Condition: <b>{{ $car->condition1 }}</b></p>
                <p>Body: <b>{{ $car->body }}</b></p>
                <a class="modal_btn" href="#" data-target-remove="mood">buying ok</a>
            </div>
        </div>
    </div>
</div>
