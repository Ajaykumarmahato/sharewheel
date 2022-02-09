<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\vehicles;
use App\brands;
use App\categories;
use App\Order;
use App\User;
use App\public_feedbacks;
use App\WishList;
use \Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Throwable;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('manager');
    }

    public function index()
    {
        $vehicles = vehicles::all()->count();
        $users = User::all()->count();
        $brands = brands::all()->count();
        $orders = Order::all()->count();
        return view('manager.manager', compact('vehicles', 'users', 'brands', 'orders'));
    }

    // Users 
    public function managerUsers()
    {
        $users = User::where('role', 'administrator')->orWhere('role', 'user')->get();
        return view('manager.manager-users', ['users' => $users]);
    }
    public function managerUserDetail(User $user)
    {
        return view('manager.manager-user-detail', ['user' => $user]);
    }
    // Feedback
    public function managerFeedbacks()
    {
        $feedbacks = public_feedbacks::orderBy('created_at', 'DESC')->get();
        return view('manager.manager-feedbacks', compact('feedbacks'));
    }
    // Products
    public function managerProducts()
    {
        $vehicles = vehicles::orderBy('id', 'DESC')->get();
        return view('manager.manager-products', ['vehicles' => $vehicles]);
    }
    // Orders
    public function managerOrders()
    {
        $orders = Order::join('vehicles', 'orders.vehicle_id', 'vehicles.id')
            ->join('users', 'orders.user_id', 'users.id')
            ->orderBy('orders.id', 'DESC')
            ->get();
        return view('manager.manager-orders', ['orders' => $orders]);
    }
    public function managerProductDetail(vehicles $vehicle)
    {
        return view('manager.manager-product-detail', ['vehicle' => $vehicle]);
    }

    public function createNewProduct()
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        return view('manager.create-product', compact('brands', 'categories'));
    }

    public function store()
    {
        //validation for fields
        request()->validate([
            'vehicle_title' => ['required', 'max:30'],
            'vehicle_brand' => ['required', 'max:20'],
            'vehicle_model' => ['required', 'unique:vehicles', 'max:70'],
            'vehicle_seat_number' => ['required'],
            'vehicle_quantity' => ['required',  'max:2'],
            'vehicle_engine' => ['required'],
            'vehicle_fuel_type' => ['required'],
            'vehicle_description' => ['required', 'max: 500'],
            'vehicle_plate_number' => ['required', 'max:30', 'unique:vehicles'],
            'vehicle_price' => ['required', 'max:8'],
            'vehicle_category' => ['required', 'max:20'],
            'vehicle_image1' => ['required'],
            'slug' => ['unique:vehicles']
        ]);

        //  fetching the request data from create form
        $vehicle = new vehicles();
        $vehicle->vehicle_title = request('vehicle_title');
        $vehicle->vehicle_brand = request('vehicle_brand');
        $vehicle->vehicle_model = request('vehicle_model');
        $vehicle->vehicle_quantity = request('vehicle_quantity');
        $vehicle->vehicle_engine = request('vehicle_engine');
        $vehicle->vehicle_fuel_type = request('vehicle_fuel_type');
        // For Attributes
        $attributes = implode(", ", request('attribute'));
        if ($attributes != "") {
            $vehicle->vehicle_attributes = $attributes;
        }
        $vehicle->vehicle_description = request('vehicle_description');
        $vehicle->vehicle_plate_number = request('vehicle_plate_number');
        $vehicle->vehicle_seat_number = request('vehicle_seat_number');
        $vehicle->vehicle_price = request('vehicle_price');
        $vehicle->vehicle_category = request('vehicle_category');
        $vehicle->vehicle_is_published = request('vehicle_is_published');
        $vehicle->vehicle_is_featured = request('vehicle_is_featured');
        $slug = str_replace(' ', '', request('vehicle_brand')) . Str::random(12) . Str::random(3);
        $vehicle->slug = $slug;
        $prefix_img_name['random'] = Str::random(3);


        //getting vehicle image1 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image1')) {
            $vehicle_image_one =  $prefix_img_name['random'] . '_' . request()->file('vehicle_image1')->getClientOriginalName();
            request()->file('vehicle_image1')->storeAs('public/vehicle_images', '/' . $vehicle_image_one, '');
            $vehicle->vehicle_image1 = $vehicle_image_one;
        }
        //getting vehicle image2 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image2')) {
            $vehicle_image_two =  $prefix_img_name['random'] . '_' . request()->file('vehicle_image2')->getClientOriginalName();
            request()->file('vehicle_image2')->storeAs('public/vehicle_images', '/' . $vehicle_image_two, '');
            $vehicle->vehicle_image2 = $vehicle_image_two;
        } else {
            $vehicle->vehicle_image2 = 'no-image.jpg';
        }
        //getting vehicle image3 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image3')) {
            $vehicle_image_three =  $prefix_img_name['random'] . '_' . request()->file('vehicle_image3')->getClientOriginalName();
            request()->file('vehicle_image3')->storeAs('public/vehicle_images', '/' . $vehicle_image_three, '');
            $vehicle->vehicle_image3 = $vehicle_image_three;
        } else {
            $vehicle->vehicle_image3 = 'no-image.jpg';
        }
        $vehicle->save();
        return redirect('/manager-products')->with('success', 'New Product Added!');
    }
    // show or hide vehicle
    public function displayHideVehicle(vehicles $vehicle)
    {
        if ($vehicle->vehicle_is_published == 1) {
            $vehicle->vehicle_is_published = 0;
            $vehicle->save();
            return redirect('/manager-products')->with('info', 'Vehicle Hidden!');
        } else {
            $vehicle->vehicle_is_published = 1;
            $vehicle->save();
            return redirect('/manager-products')->with('success', 'Vehicle Published!');
        }
    }
    // delete vehicle
    public function deleteVehicle(vehicles $vehicle)
    {
        $orderIds = [];
        $orders = Order::where('vehicle_id', $vehicle['id'])->get();
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
        $id = $vehicle['id'];
        $vehicle = vehicles::findOrFail($id);
        WishList::where('vehicle_id', $id)->delete();
        Order::where('vehicle_id', $id)->delete();
        $vehicle->delete();
        return redirect('/manager-products')->with('warning', 'Vehicle Removed!');


        // try {
        //     $id = $vehicle['id'];
        //     $vehicle = vehicles::leftJoin('wish_lists', 'vehicles.id', '=', 'wish_lists.vehicle_id')->where('vehicles.id', $id);
        //     // ->leftJoin('orders', 'vehicles.id', '=', 'orders.vehicle_id')->where('vehicles.id', $id);
        //     WishList::where('vehicle_id', $id)->delete();
        //     // Order::where('vehicle_id', $id)->delete();
        //     $vehicle->delete();
        //     return redirect('/manager-products')->with('info', 'Vehicle Removed!');
        // } catch (Throwable $e) {
        //     report($e);
        //     return false;
        // }
    }

    //edit vehicle
    public function editVehicle(vehicles $vehicle)
    {
        $brands = brands::orderBy('brand')->get();
        $categories = categories::all();
        return view('manager.edit-product', compact('vehicle', 'brands', 'categories'));
    }

    public function updateVehicle(vehicles $vehicle)
    {
        //validation for fields
        request()->validate([
            'vehicle_title' => ['required', 'max:30'],
            'vehicle_brand' => ['required', 'max:20'],
            'vehicle_model' => ['required',  'max:70'],
            'vehicle_quantity' => ['required',  'max:2'],
            // 'vehicle_seat_number' => ['required'],
            'vehicle_description' => ['required', 'max: 500'],
            'vehicle_engine' => ['required'],
            'vehicle_fuel_type' => ['required'],
            'vehicle_price' => ['required', 'max:8'],
            'vehicle_category' => ['required', 'max:20'],
        ]);

        //  fetching the request data from edit form
        $vehicle->vehicle_title = request('vehicle_title');
        $vehicle->vehicle_brand = request('vehicle_brand');
        $vehicle->vehicle_quantity = request('vehicle_quantity');
        $vehicle->vehicle_model = request('vehicle_model');
        $vehicle->vehicle_description = request('vehicle_description');
        $vehicle->vehicle_engine = request('vehicle_engine');
        $vehicle->vehicle_fuel_type = request('vehicle_fuel_type');
        // $vehicle->vehicle_seat_number=request('vehicle_seat_number');
        $vehicle->vehicle_price = request('vehicle_price');
        $vehicle->vehicle_category = request('vehicle_category');
        $vehicle->vehicle_is_featured = request('vehicle_is_featured');
        $slug = str_replace(' ', '', request('vehicle_brand')) . Str::random(12) . Str::random(3);
        $vehicle->slug = $slug;
        $prefix_img_name['random'] = Str::random(3);

        //getting vehicle image1 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image1')) {
            $vehicle_image_one = $prefix_img_name['random'] . '_' . request()->file('vehicle_image1')->getClientOriginalName();
            request()->file('vehicle_image1')->storeAs('public/vehicle_images', '/' . $vehicle_image_one, '');
            $vehicle->vehicle_image1 = $vehicle_image_one;
        }
        //getting vehicle image2 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image2')) {
            $vehicle_image_two = $prefix_img_name['random'] . '_' . request()->file('vehicle_image2')->getClientOriginalName();
            request()->file('vehicle_image2')->storeAs('public/vehicle_images', '/' . $vehicle_image_two, '');
            $vehicle->vehicle_image2 = $vehicle_image_two;
        }
        //getting vehicle image3 name  storing in db and storing the file in folder
        if (request()->hasFile('vehicle_image3')) {
            $vehicle_image_three = $prefix_img_name['random'] . '_' . request()->file('vehicle_image3')->getClientOriginalName();
            request()->file('vehicle_image3')->storeAs('public/vehicle_images', '/' . $vehicle_image_three, '');
            $vehicle->vehicle_image3 = $vehicle_image_three;
        }
        $vehicle->save();
        return redirect('/manager-products')->with('success', 'Product Updated!');
    }

    public function completeOrder(Order $order)
    {
        $order = Order::where('order_id', $order['order_id'])->first();
        $order['is_completed'] = 1;
        $order->update();
        return back()->with('success', 'Reservation Completed ');
    }

    public function managerSearch()
    {
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
                return view('manager.managerSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "users") {
                $users = User::where('first_name', 'LIKE', $param . '%')
                    ->orWhere('last_name', 'LIKE', $param . '%')->get();
                if (count($users) > 0) {
                    $results['users'] = $users;
                }
                return view('manager.managerSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "vehicles") {
                $vehicles = vehicles::where('vehicle_title', 'LIKE', $param . '%')
                    ->orWhere('vehicle_brand', 'LIKE', $param . '%')->get();
                if (count($vehicles) > 0) {
                    $results['vehicles'] = $vehicles;
                }
                return view('manager.managerSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "brands") {
                $brands = brands::where('brand', 'LIKE', $param . '%')
                    ->get();
                if (count($brands) > 0) {
                    $results['brands'] = $brands;
                }
                return view('manager.managerSearch', compact('results'))->withParam($param)->withModel($model);
            }
            if ($model == "categories") {
                $categories = categories::where('category', 'LIKE', $param . '%')
                    ->get();
                if (count($categories) > 0) {
                    $results['categories'] = $categories;
                }
                return view('manager.managerSearch', compact('results'))->withParam($param)->withModel($model);
            }
        }
    }

    public function managerAccount(User $user)
    {
        $user = FacadesAuth::user();
        $user_info = User::where('id', $user['id'])->first();

        return view('manager.manager-account', compact('user_info'));
    }
}
