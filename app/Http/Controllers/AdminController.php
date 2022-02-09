<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\vehicles;
use App\brands;
use App\categories;
use App\User;
use App\Order;
use App\WishList;
use App\public_feedbacks;
use \Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $vehicles = vehicles::all()->count();
        $users = User::all()->count();
        $brands = brands::all()->count();
        $orders = Order::all()->count();
        return view('admin.admin', compact('vehicles', 'users', 'brands', 'orders'));
    }

    // Products
    public function adminProducts()
    {
        $vehicles = vehicles::orderBy('id', 'DESC')->get();
        return view('admin.admin-products', ['vehicles' => $vehicles]);
    }

    public function adminProductDetail(vehicles $vehicle)
    {
        return view('admin.admin-product-detail', ['vehicle' => $vehicle]);
    }

    // Users 
    public function adminUsers()
    {
        $users = User::where('role', 'manager')->orWhere('role', 'user')->get();
        return view('admin.admin-users', ['users' => $users]);
    }
    public function adminUserDetail(User $user)
    {
        return view('admin.admin-user-detail', ['user' => $user]);
    }

    public function blockUnblockUsers(User $user)
    {
        if ($user->is_activated == 1) {
            $user->is_activated = 0;
            $user->save();
            return redirect('/admin-users')->with('info', 'User Blocked!');
        } else {
            $user->is_activated = 1;
            $user->save();
            return redirect('/admin-users')->with('success', 'User Unblocked!');
        }
    }
    public function deleteUser(User $user)
    {
        $orderIds = [];
        $orders = Order::where('user_id', $user['id'])->get();
        if (count($orders) > 0) {
            foreach ($orders as $order) {
                $orderIds[] = $order->order_id;
            }
        }
        $notifications = DB::table('notifications')->get();
        for ($i = 0; $i < count($orderIds); $i++) {
            if (count($notifications) > 0) {
                foreach ($notifications as $notification) {
                    if (str_contains($notification->data, $orderIds[$i])) {
                        DB::table('notifications')->where('id', $notification->id)->delete();
                    }
                }
            }
        }
        Order::where('user_id', $user['id'])->delete();
        WishList::where('user_id', $user['id'])->delete();
        DB::table('users_activation')->where('id_user', $user['id'])->delete();
        $user->delete();
        return redirect('/admin-users')->with('warning', 'User Removed!');
    }

    // View users from notification

    public function viewUserFromNoti($id)
    {
        $notification = auth()->user()->notifications()->where('id', $id)->first();
        $user_info = $notification['data']['user_info'];
        $user_id = $user_info['id'];

        if ($notification['read_at'] === null) {
            DB::table('notifications')->where('id', $id)->update([
                'read_at' => now(),
            ]);
        }
        $user = User::where('id', $user_id)->first();
        return view('admin.admin-user-detail', compact('user'));
    }

    // Feedbacks
    public function adminFeedbacks()
    {
        $feedbacks = public_feedbacks::orderBy('created_at', 'DESC')->get();
        return view('admin.admin-feedbacks', compact('feedbacks'));
    }
    public function publishHideFeedback(public_feedbacks $feedback)
    {
        if ($feedback->is_published == 1) {
            $feedback->is_published = 0;
            $feedback->save();
            return redirect('/admin-feedbacks')->with('info', 'Feedback Hidden!');
        } else {
            $feedback->is_published = 1;
            $feedback->save();
            return redirect('/admin-feedbacks')->with('success', 'Feedback Published!');
        }
    }
    public function deleteFeedback(public_feedbacks $feedback)
    {
        $feedback->delete();
        return redirect('/admin-feedbacks')->with('warning', 'Feedback Removed!');
    }

    // admin search
    public function adminSearch()
    {
        // $logged_user= auth()->user();
        // $role=$logged_user['role'];
        $results = [];
        $data = request()->all();
        $model = $data['search_data'];
        $param = $data['search_field'];
        if ($param == null) {
            return back()->with('info', 'No data to search !');
        } else {
            if ($model == "all") {
                $users = User::where('first_name', 'LIKE', $param . '%')
                    ->orWhere('last_name', 'LIKE', $param . '%')->get();

                $vehicles = vehicles::where('vehicle_title', 'LIKE', $param . '%')
                    ->orWhere('vehicle_brand', 'LIKE', $param . '%')->get();

                $brands = brands::where('brand', 'LIKE', $param . '%')
                    ->get();

                $categories = categories::where('category', 'LIKE', $param . '%')
                    ->get();
                if (count($users) > 0) {
                    $results['users'] = $users;
                }
                if (count($vehicles) > 0) {
                    $results['vehicles'] = $vehicles;
                }
                if (count($brands) > 0) {
                    $results['brands'] = $brands;
                }
                if (count($categories) > 0) {
                    $results['categories'] = $categories;
                }
                return view('admin.adminSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "users") {
                $users = User::where('first_name', 'LIKE', $param . '%')
                    ->orWhere('last_name', 'LIKE', $param . '%')->get();
                if (count($users) > 0) {
                    $results['users'] = $users;
                }
                return view('admin.adminSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "vehicles") {
                $vehicles = vehicles::where('vehicle_title', 'LIKE', $param . '%')
                    ->orWhere('vehicle_brand', 'LIKE', $param . '%')->get();
                if (count($vehicles) > 0) {
                    $results['vehicles'] = $vehicles;
                }
                return view('admin.adminSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "brands") {
                $brands = brands::where('brand', 'LIKE', $param . '%')
                    ->get();
                if (count($brands) > 0) {
                    $results['brands'] = $brands;
                }
                return view('admin.adminSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "categories") {
                $categories = categories::where('category', 'LIKE', $param . '%')
                    ->get();
                if (count($categories) > 0) {
                    $results['categories'] = $categories;
                }
                return view('admin.adminSearch', compact('results'))->withParam($param)->withModel($model);
            }
        }
    }
    public function adminAccount(User $user)
    {
        $user = FacadesAuth::user();
        $user_info = User::where('id', $user['id'])->first();

        return view('admin.admin-account', compact('user_info'));
    }
}
