<?php

namespace App\Http\Controllers;

use App\vehicles;
use App\brands;
use App\categories;
use App\Order;
use App\public_feedbacks;
use Illuminate\Http\Request;

class VehicleController extends Controller
{   // index page for visitors
    public function show()
    {
        $vehicles = vehicles::latest()->where('vehicle_is_published', '=', '1')->paginate(6);
        $reviews = public_feedbacks::all()->where('is_published', '=', '1');
        $review_count = count($reviews);
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $featured_categories = categories::where('category', '=', 'SUV')->orWhere('category', '=', 'Sanitized')->orWhere('category', '=', 'Electric')->orWhere('category', '=', 'Convertibles')->orWhere('category', '=', 'Coupes')->get();
        $featured_suvs = vehicles::inRandomOrder()->where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'SUV')->limit(3)->get();
        $featured_sanitizeds = vehicles::inRandomOrder()->where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Sanitized')->limit(3)->get();
        $featured_electrics = vehicles::inRandomOrder()->where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Electric')->limit(3)->get();
        $featured_convertibles = vehicles::inRandomOrder()->where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Convertibles')->limit(3)->get();
        $featured_coupes = vehicles::inRandomOrder()->where('vehicle_is_published', '=', '1')->where('vehicle_is_featured', '=', '1')->where('vehicle_category', 'Coupes')->limit(3)->get();
        return view('home', compact('vehicles', 'reviews', 'review_count', 'brands', 'categories', 'featured_categories', 'featured_suvs', 'featured_sanitizeds', 'featured_electrics', 'featured_convertibles', 'featured_coupes'));
    }
    // FAQ blade file
    public function showFAQ()
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
        return view('faq', compact('brands', 'categories', 'grand_total_price'));
    }
    // About Us blade file
    public function showAboutUs()
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
        return view('about-us', compact('brands', 'categories', 'grand_total_price'));
    }

    public function viewAllVehicles()
    {
        $vehicles = vehicles::latest()->where('vehicle_is_published', '=', '1')->paginate(9);
        $search_brands = brands::orderBy('brand')->get();
        $search_categories = categories::all();
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

        return view('all-vehicles', compact('vehicles', 'search_brands', 'search_categories', 'brands', 'categories', 'grand_total_price'));
    }

    // for single vehicle details page
    public function details(vehicles $vehicle)
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $vehicle_attributes = $vehicle['vehicle_attributes'];
        $ac = false;
        if (strpos($vehicle_attributes, 'Air Conditioner') !== false) {
            $ac = true;
        }
        $recommended_vehicles = vehicles::inRandomOrder()->where('id', '!=', $vehicle['id'])->where('vehicle_brand', $vehicle['vehicle_brand'])
            ->limit(3)
            ->get();
        $total_recommended_vehicles = count($recommended_vehicles);
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
        return view('view-details', compact('vehicle', 'ac', 'brands', 'categories', 'recommended_vehicles', 'total_recommended_vehicles', 'grand_total_price'));
    }
    // retriving specific brand vehicles
    public function viewBrandedVehicle(brands $brand)
    {
        $user_brand = $brand->brand;
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $vehicles = vehicles::where('vehicle_brand', $user_brand)->where('vehicle_is_published', '=', '1')->paginate(9);
        $total_results = count($vehicles);

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
        return view('branded-vehicles', compact('vehicles', 'user_brand', 'brands', 'categories', 'total_results', 'grand_total_price'));
    }
    // retriving specific category vehicles
    public function viewCategorizedVehicle(categories $category)
    {
        $user_category = $category->category;
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $vehicles = vehicles::where('vehicle_category', $user_category)->where('vehicle_is_published', '=', '1')->paginate(9);
        $total_results = count($vehicles);
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
        return view('categorized-vehicles', compact('vehicles', 'user_category', 'brands', 'categories', 'total_results', 'grand_total_price'));
    }
}
