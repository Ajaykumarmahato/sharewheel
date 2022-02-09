<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicles;
use App\brands;
use App\categories;
use App\public_feedbacks;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicles = vehicles::latest()->where('vehicle_is_published', '=', '1')->paginate(6);
        $reviews = public_feedbacks::where('is_published', '=', '1')->get();
        $review_count = count($reviews);
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $featured_categories = categories::where('category', '=', 'SUV')->orWhere('category', '=', 'Sanitized')->orWhere('category', '=', 'Electric')->orWhere('category', '=', 'Convertibles')->orWhere('category', '=', 'Coupes')->get();
        $featured_suvs = vehicles::where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'SUV')->paginate(3);
        $featured_sanitizeds = vehicles::where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Sanitized')->paginate(3);
        $featured_electrics = vehicles::where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Electric')->paginate(3);
        $featured_convertibles = vehicles::where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Convertibles')->paginate(3);
        $featured_coupes = vehicles::where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Coupes')->paginate(3);

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
        return view('home', compact('vehicles', 'reviews', 'review_count', 'brands', 'categories', 'featured_categories', 'featured_suvs', 'featured_sanitizeds', 'featured_electrics', 'featured_convertibles', 'featured_coupes', 'grand_total_price'));
    }
}
