<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\TemporaryOrder;
use App\User;


use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderConfirmation;
use App\Notifications\CompanyOrderConfirmation;
use App\Notifications\OrderNotification;


class EsewaController extends Controller
{
    public function verify(Request $request)
    {
        $status = $request->q;
        $url = "https://uat.esewa.com.np/epay/transrec";
        $data = [
            'amt' => $request->amt,
            'rid' => $request->refId,
            'pid' => $request->oid,
            'scd' => 'epay_payment'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);


        if (strpos($response, 'Success') == true) {
            $user_id = auth()->id();
            $order_id = $request->oid;
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
            $newData['payment_mode'] = 'ESEWA';
            $newData['is_paid'] = 1;
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
        } else {
            return back()->with('warning', 'Sorry! Esewa server is down..');
        }
    }
}
