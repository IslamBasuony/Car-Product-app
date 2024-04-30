<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('cars.create');
    }
    public function show(Request $request)
    {
        $car = Car::find($request->id);
        return view('cars.show', compact('car'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'manufacturing_year' => 'required',
            'color' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cars = new Car;
        $cars->name = $request->input('name');
        $cars->price = $request->input('price');
        $cars->manufacturing_year = $request->input('manufacturing_year');
        $cars->color = $request->input('color');
        $cars->category = $request->input('category');
        $cars->condition = $request->input('condition');
        $cars->body = $request->input('body');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $cars->image = $imageName;
        }

        $cars->save();

        return redirect()->route("admins.index");
    }
    public function update(Request $request, $id)
    {

        $Car = Car::find($id);
        $Car->name = $request->name;
        $Car->price = $request->price;
        $Car->manufacturing_year = $request->manufacturing_year;
        $Car->color = $request->color;
        $Car->category = $request->category;
        $Car->category_id = $request->category;
        $Car->condition = $request->condition;
        $Car->body = $request->body;
        $Car->save();


        return to_route('products.show', ['product' => $id]);
    }
    public function destroy($id)
    {

        $cars = Car::find($id);
        function deleteImage($imageName)
        {
            $cars = Car::find();
            $image_path = public_path('images/' . $imageName);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            deleteImage($cars->image);
        }
        $cars->delete();
        return redirect()->route("cars.index");
    }
    
    // public function show($id)
    // {
    //     $cars = Car::find($id);
    //     return view('admin.show', compact('cars'));
    // }

    public function edit($id)
    {
        $cars = Car::find($id);
        return view('admin.edit', compact('cars'));
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

    }
}
