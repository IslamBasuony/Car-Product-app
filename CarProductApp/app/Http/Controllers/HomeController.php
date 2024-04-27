<?php

namespace App\Http\Controllers;

use App\Models\CarModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
            return view('home');
        }
    }
    public function service()
    {
        return view("users.service");
    }
    public function about()
    {
        return view("admins.about");
    }
    public function contact()
    {
        return view("users.contact");
    }
}
