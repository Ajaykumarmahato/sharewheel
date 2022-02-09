@extends('admin/adminLayout')

@section('adminContent')
<!-- <p>{{$vehicle->first_name}}</p>
            <p>{{$vehicle->last_name}}</p>
            <p>{{$vehicle->email}}</p> -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card pb-5">
                <div class="col-lg-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">{{ $vehicle->vehicle_title }}</span>
                        <a href="/admin-products" class="create-button"><button class="btn my-button">BACK</button></a>
                    </div>
                    <div class="row mb-4 mt-4 card-body card-block">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/vehicle_images/{{ $vehicle->vehicle_image1 }}" target="_blank">
                                <img class="my-admin-vehicle-detail-img img-fluid"
                                    src="/storage/vehicle_images/{{ $vehicle->vehicle_image1 }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5 pl-4">
                            <p><strong>General Information</strong></p>
                            <p><strong>Brand:</strong> {{ $vehicle->vehicle_brand }} <br>
                                <strong>Description:</strong> {{ $vehicle->vehicle_description }} <br>
                                {{ $vehicle->vehicle_plate_number }} <br>
                                <strong>No. of Seats: </strong>{{ $vehicle->vehicle_seat_number }} <br>
                                <strong>Linked with us on:</strong>
                                {{\Carbon\Carbon::parse($vehicle->created_at)->format('M-d-Y')}} at
                                {{ $vehicle->created_at->toTimeString() }} <br>
                                <strong>Status: </strong>
                                @if($vehicle->vehicle_is_published == 1)
                                <span class="status--process">Published</span>
                                @else
                                <span class="status--denied">Hidden</span>
                                @endif
                            </p>
                            <hr>
                            <p><strong>Additional Information</strong></p>
                            <p><strong>Cattegory:</strong> {{ $vehicle->vehicle_category }}<br>
                                <p><strong>Available Stock:</strong> {{ $vehicle->vehicle_quantity }}<br>
                                    <strong>Price per Hour:</strong> {{ $vehicle->vehicle_price }} <br>
                                </p>
                        </div>
                        <div class="col-lg-2 pl-5">
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row mt-4">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 ml-3 single-img-gallery">
                            <a href="/storage/vehicle_liscence_images/{{ $vehicle->liscence_image }}" target="_blank">
                                <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/vehicle_liscence_images/{{ $vehicle->liscence_image }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pl-4">
                                <p><strong>Additional Information</strong></p>
                                <p><strong>Liscence Holder:</strong> {{ $vehicle->first_name }} {{ $vehicle->last_name }} <br>
                                <strong>Age:</strong></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection