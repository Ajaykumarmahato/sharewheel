<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WishList;
use Auth\User;
use App\vehicles;
use App\brands;
use App\Order;
use App\categories;


class WishListController extends Controller
{
    public function index()
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $user_id = auth()->id();
        $wishLists = WishList::where('user_id', $user_id)->with('user')->with('vehicle')->get();

       $user = auth()->user();
        $grand_total_price = 0;
        if($user!==null){
             $orders = Order::where('user_id',$user['id'] )->with('vehicle')->get();
            if(count($orders) > 0){
                foreach($orders as $order){
                    if($order->payment_mode === 'COD'){
                    $grand_total_price += $order->total_price;
                    }
                }
            }
        }
        if (count($wishLists) > 0) {
            for ($i = 0; $i < count($wishLists); $i++) {
                $vehicles[] = $wishLists[$i]['vehicle'];
            }
        } else {
            $vehicles = 0;
        }
        $total_wishlists = count($wishLists);
        return view('wishList', compact('vehicles', 'brands', 'categories', 'total_wishlists', 'grand_total_price'));
    }

    public function store($slug)
    {
        $vehicle = vehicles::where('slug', $slug)->first();
        $data['vehicle_id'] = $vehicle['id'];
        $data['user_id'] = auth()->id();
        $vehicles_in_wishlist = WishList::where('vehicle_id', $data['vehicle_id'])
            ->where('user_id', $data['user_id'])
            ->get();
        if (count($vehicles_in_wishlist) <= 0) {
            WishList::create($data);
            return back()->with('success', 'Added To WishList!');
        } else {
            return back()->with('info', 'Already in WishList !');
        }
    }

    public function removeFromWishlist($id)
    {
        $vehicle = WishList::where('vehicle_id', $id);
        $vehicle->delete();
        return back()->with('warning', 'Removed from WishList !');
    }
}
