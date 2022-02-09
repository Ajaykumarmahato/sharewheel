<?php

namespace App\Http\Controllers;
use App\vehicles;
use App\brands;
use App\categories;
use App\public_feedbacks;
use App\Order;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    //search product
    public function searchProduct(){
        $keyword=request()->get('keyword');
        $brands=brands::orderBy('brand')->get();
        $categories=categories::all();
        if($keyword != ""){
           $vehicles = vehicles::where('vehicle_is_published', '=', '1')
           ->where(function ($query) {
               $keyword=request()->get('keyword');
               $query->where('vehicle_title', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('vehicle_brand', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('vehicle_model', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('vehicle_category', 'LIKE', '%' . $keyword . '%');
           })->paginate(9);
           $vehicles->setPath('/product-search?keyword=' .$keyword);
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
            $total_results=count($vehicles);
            if($total_results>0){
               return view('search', compact('total_results', 'brands', 'categories', 'grand_total_price'))->withDetails($vehicles)->withQuery($keyword);
            } 
            else{
               return back()->with('toast_info', 'No Data Found!');
            }  
        }
        return back()->with('toast_warning', 'No Data To Search!');
       
    }

    // Filtered Search
    public function searchFilteredProduct(){
        $sort=request()->get('sort');
        $brand_filter=request()->get('brand_filter');
        $category_filter=request()->get('category_filter');
        $brands=brands::orderBy('brand')->get();
        $categories=categories::all();
        if(($brand_filter != "") || ($category_filter != "")){
            
            // $sorting_variable;
            $sort=request()->get('sort');
            if($sort == 'newest-arrival'){
                $vehicles = vehicles::latest()->where('vehicle_is_published', '=', '1')
                ->where(function ($query) {
                    $brand_filter=request()->get('brand_filter');
                    $category_filter=request()->get('category_filter');
                    $query->where('vehicle_brand', 'LIKE', '%' . $brand_filter . '%')
                           ->where('vehicle_category', 'LIKE', '%' . $category_filter . '%');
                         //  ->orWhere('vehicle_model', 'LIKE', '%' . $brand_filter . '%');
                })->paginate(9);
                
            }
            elseif($sort == 'price-high-to-low'){
                $vehicles = vehicles::where('vehicle_is_published', '=', '1')->orderBy('vehicle_price', 'desc')
                ->where(function ($query) {
                    $brand_filter=request()->get('brand_filter');
                    $category_filter=request()->get('category_filter');
                    $query->where('vehicle_brand', 'LIKE', '%' . $brand_filter . '%')
                           ->where('vehicle_category', 'LIKE', '%' . $category_filter . '%');
                         //  ->orWhere('vehicle_model', 'LIKE', '%' . $brand_filter . '%');
                })->paginate(9);
                
            }
            elseif($sort == 'price-low-to-high'){
                $vehicles = vehicles::where('vehicle_is_published', '=', '1')->orderBy('vehicle_price', 'asc')
                ->where(function ($query) {
                    $brand_filter=request()->get('brand_filter');
                    $category_filter=request()->get('category_filter');
                    $query->where('vehicle_brand', 'LIKE', '%' . $brand_filter . '%')
                           ->where('vehicle_category', 'LIKE', '%' . $category_filter . '%');
                         //  ->orWhere('vehicle_model', 'LIKE', '%' . $brand_filter . '%');
                })->paginate(9);
                
            }
            else{
                $vehicles = vehicles::where('vehicle_is_published', '=', '1')
                ->where(function ($query) {
                    $brand_filter=request()->get('brand_filter');
                    $category_filter=request()->get('category_filter');
                    $query->where('vehicle_brand', 'LIKE', '%' . $brand_filter . '%')
                           ->where('vehicle_category', 'LIKE', '%' . $category_filter . '%');
                         //  ->orWhere('vehicle_model', 'LIKE', '%' . $brand_filter . '%');
                })->paginate(9);
            }
           $vehicles->setPath('/filtered-search?brand_filter=' .$brand_filter. '&category_filter=' .$category_filter. '&sort=' .$sort);
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
           $total_results=count($vehicles);

            if($total_results>0){
               return view('filter-product', compact('total_results', 'brands', 'categories', 'category_filter', 'brand_filter', 'sort', 'grand_total_price'))->withDetails($vehicles)->withQuery($brand_filter);
            } 
            else{
               return back()->with('toast_info', 'No Data Found!');
            }  
        }

        return back()->with('toast_warning', 'No Filter Selected!');
    }
    // Filtered Search END
}
