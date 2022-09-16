<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('welcome', compact('cars'));
    }
    public function create (){
        return view('pages.form');
    }

    public function store(Request $request){
        $car = new Car();
        $car->brand = $request->brand;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->discount = $request->discount;
        $car->year = $request->year;
        $car->image = $request->image;
        $car->save();
        return redirect()->back();
    }

    public function discount(){
        $discounts = Car::all()->where('discount', '>', '0');
        return view('pages.discount', compact('discounts'));
    }

    public function over(){
        $over = Car::all()->where('price', '>=', '4000');
        return view('pages.fourK', compact('over'));
    }

    public function under(){
        $under = Car::all()->where('price', '<', '4000');
        return view('pages.lessFourK', compact('under'));
    }

    public function destroy($id){
        $delete = Car::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
