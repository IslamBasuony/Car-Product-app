@extends('layouts.app')
@section('title', 'Add Car')


@section('content')
<form class="form" action="{{route("admins.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <fieldset class="form-caunt">
            <legend>Add New Car</legend>
            <div class="form-group">
                <label for="name">Car Name:</label>
                <input type="text" name="name" id="name" required class="inputs">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" required class="inputs">
            </div>
            <div class="form-group">
                <label for="manufacturing_year">year</label>
                <input type="text" name="manufacturing_year" id="yemanufacturing_year" required class="inputs">
            </div>
            <div class="form-group">
                <label for="color">color</label>
                <input type="text" name="color" id="color" required class="inputs">
            </div>
            <div class="form-group">
                <label for="category">category</label>
                <input type="text" name="category" id="category" required class="inputs">
            </div>
            <div class="form-group">
                <label for="condition">condition:</label>
                <select name="condition" id="condition" required class="inputs">
                    <option value="new">New</option>
                    <option value="used">Used</option>
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <select name="body" id="body" required class="inputs">
                    <option value="sedan">sedan</option>
                    <option value="suv">Suv</option>
                    <option value="Premium">Premium</option>
                    <option value="Cope">Cope</option>
                    <option value="Hatchpack">Hatchpack</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" name="image" id="image" accept="image/*" class="inputs" required>
            </div>
        </fieldset>
    </div>
    <button name="upload__product" class="login-btn add_pro" type="submit">Upload Product</button>
</form>


@endsection