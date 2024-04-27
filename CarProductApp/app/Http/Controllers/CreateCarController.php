<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;

class CreateCarController extends Controller
{
    public function create(Request $request)
    {
        return view("admins.createCar");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'manufacturing_year' => 'required',
            'color' => 'required',
            'category' => 'required',
            'condition1' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cars = new CarModel;
        $cars->name = $request->input('name');
        $cars->price = $request->input('price');
        $cars->manufacturing_year = $request->input('manufacturing_year');
        $cars->color = $request->input('color');
        $cars->category = $request->input('category');
        $cars->condition1 = $request->input('condition1');
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
    public function index()
    {
        $cars = CarModel::all();
        return view('admins.car', compact('cars'));
    }
    public function delete(string $id)
    {
        $cars = CarModel::find($id);
        function deleteImage($imageName)
        {
            $image_path = public_path('images/' . $imageName);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        deleteImage($cars->image);
        $cars->delete();
        return redirect()->route("admins.index");
    }
    public function tabs()
    {
        $cars = CarModel::all();
        // $activeTab = 'tab1'; 
        $activeTab = null;
        foreach ($cars as $car) {
            if ($car->body == 'sedan') {
                $activeTab = 'sedan';
                break;
            } elseif ($car->body == 'suv') {
                $activeTab = 'suv';
                break;
            } elseif ($car->body == 'premium') {
                $activeTab = 'premium';
                break;
            } elseif ($car->body == 'coupe') {
                $activeTab = 'coupe';
                break;
            } elseif ($car->body == 'hatchback') {
                $activeTab = 'hatchback';
                break;
            } elseif ($car->body == 'crossover') {
                $activeTab = 'crossover';
                break;
            }
        }

        return view('users.tabs', compact('cars', 'activeTab'));

        // return view('users.tabs', compact('cars'));
    }
}
