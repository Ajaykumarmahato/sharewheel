<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'VehicleController@show')->middleware('guest');


//Returning sign up form view
Route::get('/register', 'RegisterController@showRegister');

//Returning login form view
Route::get('/login', function () {
    return view('login');
});

Auth::routes();

// Route for Email Verifiication or User Activation
Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

//preventing route after logout
Route::group(['middleware' => 'prevent-back-history'], function () {

    /*the user to go to welcome page after login coz welcome page 
    for user is as same as for visitor but the file name is diff.*/
    Route::get('/', 'VehicleController@show')->middleware('guest');
    Route::get('/all-vehicles', 'VehicleController@viewAllVehicles');

    // Specific Branded Vehicle Page
    Route::get('/branded-vehicles/{brand:brand}', 'VehicleController@viewBrandedVehicle');

    // Specific Categorized Vehicle Page
    Route::get('/categorized-vehicles/{category:category}', 'VehicleController@viewCategorizedVehicle');

    // Search Products and Filter
    Route::get('/product-search', 'SearchController@searchProduct');
    Route::get('/filtered-search', 'SearchController@searchFilteredProduct');

    // Filtered Vehicles
    Route::get('/filtered-vehicles', 'SearchController@searchFilteredProduct');

    // Returning contact view through ContactController
    Route::get('/contact-us', 'ContactController@index');

    // Inserting the contact data 
    Route::post('/contact-us', 'ContactController@store');

    // Returning about-us view
    Route::get('/about-us', 'VehicleController@showAboutUs');

    // Returning faq view
    Route::get('/faq', 'VehicleController@showFAQ');

    //route for vehicle details
    Route::get('/view-details/{vehicle:slug}', 'VehicleController@details');

    Route::get('/home', 'HomeController@index')->name('user')->middleware('user');


    Route::get('/user-profile/{user:username}', 'UserController@userProfile')->name('user-account')->middleware('user');

    // Wish List
    Route::get('/wish-list', 'WishListController@index')->name('wish-list')->middleware('user');
    Route::get('/wish-list/{vehicle:slug}', 'WishListController@store')->name('wish-list-store')->middleware('user');
    Route::delete('/wish-list/{id}', 'WishListController@removeFromWishlist')->name('remove-from-wishlist')->middleware('user');


    // my booking
    Route::get('/my-booking', 'OrderController@myBooking')->name('my-booking')->middleware('user');
    Route::delete('/my-booking/{order_id}', 'OrderController@cancelBooking')->name('cancelBooking')->middleware('user');

    //route for checkout
    Route::get('/checkout/{vehicle:slug}', 'CheckoutController@index')->name('checkout')->middleware('user');
    Route::post('/checkout/confirm/{vehicle:slug}', 'CheckoutController@confirm')->name('checkoutConfirm')->middleware('user');
    Route::post('/checkout/cash-on-delivery/{vehicle:slug}', 'CheckoutController@cashOnDelivery')->name('cashOnDelivery')->middleware('user');

    //route for payment gateway [ESEWA]
    Route::get('/verify-payment', 'EsewaController@verify')->name('verify')->middleware('user');

    //routes for admin
    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/admin-users', 'AdminController@adminUsers')->name('admin-users');
    Route::get('/admin-users/user-detail/{user:username}', 'AdminController@adminUserDetail')->name('admin-user-detail');
    Route::put('/admin-users/{user:username}', 'AdminController@blockUnblockUsers')->name('block-unblock-user');
    Route::delete('/admin-users/{user:username}', 'AdminController@deleteUser')->name('delete-user');

    Route::get('/admin-users/user/user-details-noti/{id}', 'AdminController@viewUserFromNoti')->name('view-user-noti');

    Route::get('/admin-products', 'AdminController@adminProducts')->name('admin-products');
    Route::get('/admin-products/product-detail/{vehicle:slug}', 'AdminController@adminProductDetail')->name('admin-product-detail');

    Route::get('/admin-feedbacks', 'AdminController@adminFeedbacks')->name('admin-feedbacks');
    Route::put('/admin-feedbacks/{feedback}', 'AdminController@publishHideFeedback')->name('publish-hide-feedback');
    Route::delete('/admin-feedbacks/{feedback}', 'AdminController@deleteFeedback')->name('delete-feedback');

    Route::get('/admin-account/{user:username}', 'AdminController@adminAccount')->name('admin-account');

    Route::get('/admin-maps', function () {
        return view('admin.admin-maps');
    });

    //routes for manager
    Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');

    Route::get('/manager-users', 'ManagerController@managerUsers')->name('manager-users');
    Route::get('/manager-users/user-detail/{user:username}', 'ManagerController@managerUserDetail')->name('manager-user-detail');

    Route::get('/manager-products', 'ManagerController@managerProducts')->name('manager-products');
    Route::get('/manager-orders', 'ManagerController@managerOrders')->name('manager-orders');
    Route::get('/manager-products/product-detail/{vehicle:slug}', 'ManagerController@managerProductDetail')->name('manager-product-detail');
    Route::get('/manager-products/create-product', 'ManagerController@createNewProduct')->name('manager-create-product');

    Route::get('/manager-account/{user:username}', 'ManagerController@managerAccount')->name('manager-account');

    // for inserting the product data (CRUD)
    Route::post('/manager-products/create-product', 'ManagerController@store');
    Route::put('/manager-products/{vehicle:slug}', 'ManagerController@displayHideVehicle')->name('display-hide-vehicle');
    Route::delete('/manager-products/{vehicle:slug}', 'ManagerController@deleteVehicle')->name('delete-vehicle');
    Route::get('/manager-products/edit-product/{vehicle:slug}', 'ManagerController@editVehicle')->name('edit-vehicle');
    Route::put('/manager-products/edit-product/{vehicle:slug}', 'ManagerController@updateVehicle')->name('update-vehicle');
    Route::get('/manager-feedbacks', 'ManagerController@managerFeedbacks')->name('manager-feedbacks');
    Route::put('/manager-orders/{order:order_id}', 'ManagerController@completeOrder')->name('complete-order')->middleware('manager');

    Route::get('/manager-maps', function () {
        return view('manager.manager-maps');
    });
    // Brands
    Route::get('/manager-brands', 'BrandController@managerBrands')->name('manager-brands');
    Route::get('/manager-brands/create-brand', 'BrandController@createNewbrand')->name('manager-create-brand');
    Route::post('/manager-brands/create-brand', 'BrandController@storeNewbrand')->name('manager-store-brand');
    Route::delete('/manager-brands/{brand:brand}', 'BrandController@deleteBrand')->name('delete-brand');

    // Categories
    Route::get('/manager-categories', 'CategoryController@managerCategories')->name('manager-categories');
    Route::get('/manager-categories/create-category', 'CategoryController@createNewCategory')->name('manager-create-category');
    Route::post('/manager-categories/create-category', 'CategoryController@storeNewCategory')->name('manager-store-category');
    Route::delete('/manager-categories/{category:category}', 'CategoryController@deleteCategory')->name('delete-category');

    // Orders
    Route::get('/manager/order/order-details-noti/{id}', 'OrderController@viewOrderFromNoti')->name('view-order-noti')->middleware('manager');
    Route::get('/manager/order/order-details/{order:order_id}', 'OrderController@viewOrder')->name('view-order')->middleware('manager');

    // Notification
    Route::get('/notification/mark-as-read/{id}', 'OrderController@markAsRead')->name('mark-as-read')->middleware('manager');

    // manager search
    Route::get('/manager/search', 'ManagerController@managerSearch')->name('manager-search')->middleware('manager');

    // admin search
    Route::get('/admin/search', 'AdminController@adminSearch')->name('admin-search')->middleware('admin');
});
