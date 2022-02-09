<?php

namespace App\Http\Controllers;

use App\brands;
use App\categories;
use App\vehicles;
use App\TemporaryOrder;
use App\Order;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderConfirmation;
use App\Notifications\CompanyOrderConfirmation;
use App\Notifications\OrderNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/[0-9]{10}/'],
            'driver' => ['required', 'in:0,1'],
            'payment_mode' => ['required', 'in:COD,ESEWA'],
            'quantity' => ['required', 'numeric', 'gt:0'],
            'duration' => ['required', 'in:0,1']
        ]);
    }
    public function index($slug)
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $vehicle = vehicles::where('slug', $slug)->first();
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
        return view('checkout', compact('brands', 'categories', 'vehicle', 'grand_total_price'));
    }

    public function confirm(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($data);
        if ($validator->passes()) {
            $name = $data['name'];
            $country = $data['country'];
            $address = $data['address'];
            $driver = $data['driver'];
            $duration = $data['duration'];
            $upto_date = $data['upto_date'];

            $phone = $data['phone'];
            $email = $data['email'];
            $title = $data['title'];
            $brand = $data['brand'];
            $quantity = $data['quantity'];
            $price_per_hour = $data['price_per_hour'];
            $payment_mode = $data['payment_mode'];

            $gross_time_in_hour = 0.0;
            if ($duration == "0") {
                $hour = $data['upto_time'];
                if ($hour == null || (int)$hour <= 0) {
                    $hour = 1;
                }
                $date = null;
                $gross_time_in_hour = $hour;
            } else {
                $date = $data['upto_date'];
                $hour = null;
                $current_date = Carbon::now()->format("Y-m-d");
                if ($date == null || Carbon::now()->diffInDays($date, false) < 0) {
                    $calculated_date = 1;
                } else if ($date == $current_date) {
                    $calculated_date = 1;
                } else {
                    $calculated_date = Carbon::now()->diffInDays($date, false) + 2;
                }
                $gross_time_in_hour = 24 * $calculated_date;
            }

            if ($data['quantity'] <= 0) {
                return back()->with('warning', 'Quantity must be atleast 1.');
            } else {
                $quantity = $data['quantity'];
                $price = $data['price_per_hour'];
                $amt = $quantity * $gross_time_in_hour * $price;
                $txAmt = (0.1 * $amt);
                $pdc = 0;
                $psc = 0;
                $tAmt = $amt + $txAmt + $pdc + $psc;
                $orderId = Str::random(10);

                $data['user_id'] = auth()->id();
                $data['order_id'] = $orderId;
                $data['amt'] = $amt;
                $data['txAmt'] = $txAmt;
                $data['pdc'] = $pdc;
                $data['psc'] = $psc;
                $data['tAmt'] = $tAmt;
                $data['total_price'] = $tAmt;
                $data['pid'] = $orderId;
                $data['upto_date'] = $date;
                $data['upto_time'] = $hour;
                $brands = brands::orderBy('brand')->get();
                $categories = categories::all();

                TemporaryOrder::create($data);
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
                return view('confirmCheckout', compact(
                    'brands',
                    'categories',
                    'data',
                    'grand_total_price',
                    'name',
                    'country',
                    'address',
                    'driver',
                    'duration',
                    'hour',
                    'date',
                    'phone',
                    'email',
                    'title',
                    'brand',
                    'quantity',
                    'price_per_hour',
                    'payment_mode'
                ));
            }
        } else {
            return back()->withErrors($validator);
        }
    }
    public function cashOnDelivery(Request $request)
    {
        $user_id = auth()->id();
        $order_id = $request->get('pid');
        $temporary = TemporaryOrder::where('user_id', $user_id)
            ->where('order_id', $order_id)->first();

        $newData['user_id'] = auth()->id();
        $newData['vehicle_id'] = $temporary['vehicle_id'];
        $newData['price_per_hour'] = $temporary['price_per_hour'];
        $newData['quantity'] = $temporary['quantity'];
        $newData['total_price'] = $temporary['total_price'];
        $newData['order_address'] = $temporary['address'];
        $newData['order_contact'] = $temporary['phone'];
        $newData['driver'] = $temporary['driver'];
        $newData['duration'] = $temporary['duration'];
        $newData['upto_date'] = $temporary['upto_date'];
        $newData['upto_time'] = $temporary['upto_time'];
        $newData['payment_mode'] = 'COD';
        $newData['is_paid'] = 0;
        $newData['order_id'] = $order_id;


        Order::create($newData);
        Notification::route('mail', $temporary['email'])
            ->notify(new OrderConfirmation($order_id));

        Notification::route('mail', 'sharewheel2020@gmail.com')
            ->notify(new CompanyOrderConfirmation($order_id));
        $users = User::where('role', 'manager')->get();
        foreach ($users as $user) {
            User::findOrFail($user['id'])->notify(new OrderNotification($order_id));
        }
        TemporaryOrder::truncate();
        return redirect('/')->with('success', 'Your booking is confirmed!! Thank you');
    }
}
