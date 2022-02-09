<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brands;
use App\categories;
use App\Order;
use App\User;

class UserController extends Controller
{
    // View User Profile
    public function userProfile(User $user)
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $user = auth()->user();
        $grand_total_price = 0;
        if ($user !== null) {
            $orders = Order::where('user_id', $user['id'])->with('vehicle')->get();
            if (count($orders) > 0) {
                foreach ($orders as $order) {
                    if ($order->payment_mode === 'COD') {
                        $grand_total_price += $order->total_price;
                    }
                }
            }
        }
        $order_info = Order::join('vehicles', 'orders.vehicle_id', 'vehicles.id')->where('orders.user_id', $user['id'])->limit(2)->get();
        return view('user-profile', compact('user', 'brands', 'categories', 'grand_total_price', 'order_info'));
    }
}
