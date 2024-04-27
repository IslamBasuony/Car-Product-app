<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $cars = CarModel::all();
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
        return view("home", compact("cars", 'activeTab'));
    }
    public function service()
    {
        return view("users.service");
    }
    public function about()
    {
        return view("admins.about");
    }
}

