@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<script src="jquery-3.5.1.min.js"></script>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Reservation</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-2"><strong>Reservation Id</strong></div>
                        <div class="col-lg-2"><strong>Vehicle Title</strong></div>
                        <div class="col-lg-2"><strong>Booked By</strong></div>
                        <div class="col-lg-1"><strong>Payment Mode</strong></div>
                        <div class="col-lg-1"><strong>Booking Address</strong></div>
                        <div class="col-lg-2"><strong>Total Price</strong></div>
                        <div class="col-lg-2"><strong>Action</strong></div>
                    </div>

                    @foreach($orders ?? '' as $order)
                    <div class="row card-body card-block">
                        <div class="col-lg-2">
                            <p class="title">
                                <a class="my-text-hover" title="View Order Detail"
                                    href="/manager/order/order-details/{{$order->order_id}}"><b>#{{$order->order_id}}</b></a>
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <p class="title">
                                <a class="my-text-hover" title="View Vehicle Detail"
                                    href="/manager-products/product-detail/{{$order->slug}}">{{$order->vehicle_title}}</a>

                            </p>
                        </div>
                        <div class="col-lg-2">
                            <p><a class="my-text-hover" title="View User Detail"
                                    href="/manager-users/user-detail/{{$order->username}}">{{$order->first_name}}
                                    {{$order->last_name}}</a></p>
                        </div>
                        <div class="col-lg-1">
                            <p>{{$order->payment_mode}}</p>
                        </div>
                        <div class="col-lg-1">
                            <p>{{$order->order_address}}</p>
                        </div>
                        <div class="col-lg-2">
                            <p>Rs. {{$order->total_price}}</p>
                        </div>

                        <div class="col-lg-2">
                            @if($order->is_completed===1)
                            <span class="status--process">Completed&nbsp;&nbsp;<i class="fa fa-check-circle"
                                    style="color:#5fb946"></i></span>
                            @else
                            <span class="status--denied" style="display:inline-block">Pending&nbsp;&nbsp;&nbsp;&nbsp;
                                <form style="display:inline-block" method="POST"
                                    action="/manager-orders/{{$order->order_id}}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="borderless-focus" title="Complete Reservation">
                                        <i class="fa fa-check-circle" style="color:#808080;"></i>
                                    </button>
                                </form>
                            </span>



                            @endif

                            <!-- <form method="POST" action="/manager-products/{{$order->slug}}">
                            @csrf
                            @method('PUT')
                            @if($order->vehicle_is_published == 0)
                            <div class="class-button" style="margin-right:5px;margin-left:0px">
                                <button type="submit" style="background-color:#808080;" class="item" data-toggle="tooltip"
                                    data-placement="top" title="Unblock">
                                    <i style="color:white;" class="zmdi zmdi-check"></i>
                                </button>
                            </div>
                            @else
                            <div class="class-button" style="margin-right:5px">
                                <button type="submit" style="background-color:#808080;" class="item" data-toggle="tooltip"
                                    data-placement="top" title="Block">
                                    <i style="color:white;" class="zmdi zmdi-block"></i>
                                </button>
                            </div>
                            @endif
                        </form> -->


                        </div>
                    </div>
                    <div class="my-hr"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection