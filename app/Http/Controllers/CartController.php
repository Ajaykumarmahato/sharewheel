<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brands;
use App\categories;
use App\User;
use App\vehicles;


class CartController extends Controller
{
    public function index(){
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart', compact('cartItems','brands','categories'));
    }
    public function add(vehicles $vehicle){
        \Cart::session(auth()->id())->add(array(
            'id'=>$vehicle->id,
            'name'=>$vehicle->vehicle_title,
            'quantity'=>$vehicle->vehicle_quantity,
            'price'=>$vehicle->vehicle_price,
            // 'image'=>$vehicle->vehicle_image1,
            // 'model'=>$vehicle->vehicle_model,
            // 'brand'=>$vehicle->vehicle_brand,
            'associatedModel'=>$vehicle,
        ));
        return back()->with('success', "Added to Cart!");
    }
}
