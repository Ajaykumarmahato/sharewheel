<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\brands;
use App\categories;
use App\Notifications\OrderCancelNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    // for manager
    public function viewOrderFromNoti($id)
    {
        $notification = auth()->user()->notifications()->where('id', $id)->first();
        $order_info = $notification['data']['order_info'];
        $order_id = $order_info[0]['order_id'];
        if ($notification['read_at'] === null) {
            DB::table('notifications')->where('id', $id)->update([
                'read_at' => now(),
            ]);
        }
        $order = Order::join('users', 'orders.user_id', 'users.id')
            ->join('vehicles', 'orders.vehicle_id', 'vehicles.id')
            ->where('orders.order_id', $order_id)
            ->first();
        return view('manager.order-details', compact('order'));
    }
    public function viewOrder($orderId)
    {
        // $notification = auth()->user()->notifications()->where('id',$id)->first();
        // $order_info =$notification['data']['order_info'];
        // $order_id=$order_info[0]['order_id'];
        // if($notification['read_at']===null){
        //     DB::table('notifications')->where('id', $id)->update([
        //         'read_at'=> now(),
        //     ]);
        // }
        $order = Order::join('users', 'orders.user_id', 'users.id')
            ->join('vehicles', 'orders.vehicle_id', 'vehicles.id')
            ->where('orders.order_id', $orderId)
            ->first();
        return view('manager.order-details', compact('order'));
    }

    // for manager
    public function viewAllNotifications()
    {
        $notifications = auth()->user()->notifications()->get();
        return view('manager.notification-list', compact('notifications'));
    }

    // for manager
    public function markAsRead($id)
    {
        DB::table('notifications')->where('id', $id)->update([
            'read_at' => now(),
        ]);
        return back();
    }

    // for user
    public function myBooking()
    {
        $user = auth()->user();
        $user_id = $user['id'];
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        $orders = Order::where('user_id', $user_id)->with('vehicle')->get();
        $grand_total_price = 0;
        if ($user !== null) {
            $ordersT = Order::where('user_id', $user['id'])->with('vehicle')->get();
            if (count($ordersT) > 0) {
                foreach ($ordersT as $orderT) {
                    if ($orderT->payment_mode === 'COD') {
                        $grand_total_price += $orderT->total_price;
                    }
                }
            }
        }
        $orderCancellable = true;
        $total_bookings = count($orders);
        if (count($orders) > 0) {
            for ($i = 0; $i < count($orders); $i++) {
                $isCancellable = array();
                $vehicles = array();
                $order_ids = array();
                $minutes = $orders[$i]['created_at']->diffForHumans();
                if (strpos($minutes, 'minute') == true) {
                    if ($orders[$i]['duration'] === 0) {

                        if ((int)explode(' ', $minutes)[0] < 15) {
                            $orderCancellable = true;
                        } else {
                            $orderCancellable = false;
                        }
                    }
                    if ($orders[$i]['duration'] === 1) {
                        if ((int)explode(' ', $minutes)[0] < 60) {
                            $orderCancellable = true;
                        } else {
                            $orderCancellable = false;
                        }
                    }
                } else {
                    $orderCancellable = false;
                }
                $isCancellable['is_cancellable'] = $orderCancellable;
                $vehicles['order'] = $orders[$i]['vehicle'];
                $order_ids['order_id'] = $orders[$i]['order_id'];
                $order_info[] = array_merge($isCancellable, $vehicles, $order_ids);
            }
        } else {
            $vehicles = 0;
            $order_info = [];
        }
        return view('myBooking', compact('vehicles', 'brands', 'categories', 'total_bookings', 'grand_total_price', 'order_info'));
    }
    public function cancelBooking($order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        $user = Auth::user();
        $email = $user['email'];
        $minutes = $order['created_at']->diffForHumans();
        if (strpos($minutes, 'minute') == true) {
            if ($order['duration'] === 0) {
                if ((int)explode(' ', $minutes)[0] < 15) {
                    $notifications = DB::table('notifications')->get();
                    if (count($notifications) > 0) {
                        foreach ($notifications as $notification) {
                            if (str_contains($notification->data, $order_id)) {
                                DB::table('notifications')->where('id', $notification->id)->delete();
                            }
                        }
                    }

                    Notification::route('mail', $email)
                        ->notify(new OrderCancelNotification($order_id));
                    $order->delete();
                    return back()->with('warning', 'Reservation has been cancelled!');
                } else {
                    return back()->with('info', 'Your Cancellation period has ended!');
                }
            }
            if ($order['duration'] === 1) {
                if ((int)explode(' ', $minutes)[0] < 60) {
                    $notifications = DB::table('notifications')->get();
                    if (count($notifications) > 0) {
                        foreach ($notifications as $notification) {
                            if (str_contains($notification->data, $order_id)) {
                                DB::table('notifications')->where('id', $notification->id)->delete();
                            }
                        }
                    }
                    Notification::route('mail', $email)
                        ->notify(new OrderCancelNotification($order_id));
                    $order->delete();
                    return back()->with('warning', 'Reservation has been cancelled!');
                } else {
                    return back()->with('info', 'Your Cancellation period has ended!');
                }
            }
        } else {
            return back()->with('info', 'Your Cancellation period has ended!');
        }
    }
}
