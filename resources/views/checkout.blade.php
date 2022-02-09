@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">CHECKOUT</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    <div class="row mt-5 my-bg">
        <div class="col-4"></div>
        <div class="col-4">
            <p class="text-center mt-3 mb-3">
                Have a coupon? <a href="">Click here</a> to enter your code
            </p>
        </div>
        <div class="col-4"></div>
    </div>
    <form action="/checkout/confirm/{{$vehicle->slug}}" method="POST">
        @csrf
        <div class="row mt-4 pb-1">
            <div class="col-6 my-bg">
                <h4 class="mt-3 pb-3">Billing Detail</h4>
                <input value="{{$vehicle->id}}" name="vehicle_id" type="hidden">
                <input value="{{$vehicle->slug}}" name="vehicle_slug" type="hidden">
                <div class="row pb-1">
                    <div class="col-12">
                        <!-- Full name -->
                        <label>Name</label>
                        <div class="input-group mb-4">

                            <input readonly type="text" class="form-control"
                                value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}"
                                placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1"
                                name="name" />
                        </div>
                    </div>
                </div>
                <!-- country -->
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Country</label>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" readonly value="Nepal" placeholder="Country"
                                aria-label="Username" aria-describedby="basic-addon1" name="country" />
                        </div>
                    </div>
                </div>
                <!-- address -->
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Address</label>
                        <div class="input-group mb-4">
                            <input type="text" value="{{ old('address') }}"
                                class="form-control @error('address') is-invalid @enderror" name="address"
                                placeholder="State-City-Street Address" aria-label="Username"
                                aria-describedby="basic-addon1" />
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message ?? '' }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-4">
                        <h5>Need a driver?</h5>
                    </div>
                    <div class="col-4 pl-5"></div>
                    <div class="col-4">
                        <div class="@error('driver') is-invalid @enderror">
                            <label>Yes <input type="radio" value="1" name="driver" class="mr-5" id="" /></label>
                            <label>No <input type="radio" value="0" name="driver" id="" /></label>
                        </div>
                        @error('driver')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message ?? '' }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2 pb-1">
                    <div class="col-12">
                        <!-- phone number -->
                        <label>Phone</label>
                        <div class="input-group mb-4">
                            <input type="text" value="{{ Request::old('phone') }}" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" placeholder="Phone"
                                aria-label="Username" aria-describedby="basic-addon1" />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message ?? '' }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row pb-1">
                    <!-- email address -->
                    <div class="col-12">
                        <label>Email</label>
                        <div class="input-group mb-4">
                            <input type="text" name="email" readonly class="form-control"
                                value="{{ Auth::user()->email }}" placeholder="Email" aria-label="Username"
                                aria-describedby="basic-addon1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4 class="mt-3 pb-3">Your Order</h4>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Vehicle</label>
                        <div class="input-group mb-4">
                            <input type="text" name="title" value="{{$vehicle->vehicle_title}}" readonly
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Brand</label>
                        <div class="input-group mb-4">
                            <input type="text" name="brand" value="{{$vehicle->vehicle_brand}}" readonly
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Quantity</label>
                        <div class="input-group mb-4">
                            <input type="number" name="quantity" value="1"
                                class="form-control @error('quantity') is-invalid @enderror"
                                value="{{ old('quantity') }}" />
                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message ?? '' }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Price/hour [NRP]</label>
                        <div class="input-group mb-4">
                            <input type="text" name="price_per_hour" readonly value="{{$vehicle->vehicle_price}}"
                                class="form-control" /> </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-6">
                        <h5 class="float-left">Choose duration</h5>
                    </div>
                    <div class="col-6">
                        <div id="durations" class="@error('duration') is-invalid @enderror">
                            <label>Hourly <input type="radio" value="0" class="mr-5" name="duration" id="d1" /></label>

                            <label>In Days <input type="radio" value="1" name="duration" id="d2" /></label>
                        </div>
                        @error('duration')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message ?? '' }}</strong>
                        </span>
                        @enderror
                        <div id="dr-1">
                            <input type="number" name="upto_time" class="toHide">
                            <br>
                            <small class="my-text">(Default 1 hour)</small>
                        </div>
                        <div id="dr-2">
                            <input type="date" name="upto_date" class="toHide">
                            <br>
                            <small class="my-text">(Default 1 day)</small>
                        </div>
                    </div>
                </div>
                <div class="row pb-1 mt-4">
                    <div class="col-6">
                        <h5>Select a Payment mode</h5>
                    </div>
                    <div class="col-6">
                        <div class="@error('payment_mode') is-invalid @enderror">
                            <label>Esewa <input type="radio" value="ESEWA" name="payment_mode" class="mr-5"
                                    id="" /></label>
                            <label>Cash On Delivery <input type="radio" value="COD" name="payment_mode" id="" /></label>
                        </div>
                        @error('payment_mode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message ?? '' }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5 mt-5">
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <button type="submit" class="mt-3 mr-3 btn my-button text-decoration-none btn-block" href="#"
                    role="button">
                    Next
                </button>
            </div>

        </div>
    </form>
</div>


@endsection