<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::all();
        return view('cars', compact('cars'));
    }
}
