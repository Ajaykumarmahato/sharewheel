@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<!-- 
       {{ $order['user']['role']}}
       {{ $order['order_id']}} -->
       <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Order Details [ #{{$order->order_id}} ]</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-6">
                            <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/vehicle_images/{{$order->vehicle_image1}}"/><br><br>
                            <h3>{{$order->vehicle_title}}</h3><br>
                            <strong>Quantity: </strong>{{$order->quantity}}<br>
                            <strong>Total Price: </strong>{{$order->total_price}}<br>
                            <strong>Mode of Payment: </strong>{{$order->payment_mode}}<br>
                            <strong>Payment: </strong>@if($order->is_paid===0)<span class="text-danger">Unpaid</span> @else <span class="text-success">Paid</span> @endif<br>
                            <strong>Reservation: </strong>@if($order->is_completed===0)<span class="text-danger">Pending</span> @else <span class="text-success">Completed</span> @endif<br>
                            <strong>Date of Reservation: </strong><span class="date">{{\Carbon\Carbon::parse($order->created_at)->format('M-d-Y')}}, {{$order->created_at->toTimeString()}}</span><br>
                        </div>
                        
                        <div class="col-lg-6">
                            <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/user_profile_images/{{ $order->profile_image }}"/><br><br>
                            <strong>Booked By: </strong>{{$order->first_name}} {{$order->last_name}}<br>
                            <strong>Reservation Address: </strong>{{$order->country_name}}, {{$order->order_address}}<br>
                            <strong>Reservation Contact: </strong>{{$order->order_contact}}<br>
                            <strong>Reservation Email: </strong>{{$order->email}}<br>
                            <strong>Driver Needed: </strong>@if($order->driver===0)No @else Yes @endif<br>
                            
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
</div>
@endsection