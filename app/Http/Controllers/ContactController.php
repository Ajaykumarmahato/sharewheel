<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\public_feedbacks;
use App\brands;
use App\Order;
use App\categories;

class ContactController extends Controller
{
  
    // Function for returning contact view
    public function index(){
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
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
        return view('contact',compact('brands','categories','grand_total_price'));
    }

    public function store(){
        //validation for fields
        request()->validate([
            'contact_name' =>['required', 'min:3','max:70'],
            'contact_email' => ['required', 'email'],
            'contact_message' => ['required', 'min:3', 'max:2000']
        ]);

     //  fetching the request data from create form
        $public_feedback = new public_feedbacks();
        $public_feedback->first_name=request('contact_name');
        $public_feedback->email=request('contact_email');
        $public_feedback->message=request('contact_message');
        $public_feedback->save();
       return redirect('/contact-us/#leave_message')->with('success', 'Thank You For Your Feedback!');
    }

}
