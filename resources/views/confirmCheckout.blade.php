@extends('layout')



@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">CHECKOUT</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    @if($data['payment_mode']=="ESEWA")
    <form action="https://uat.esewa.com.np/epay/main" method="POST" class="myConfirmCheckoutForm">
        @else
        <form action="/checkout/cash-on-delivery/{{ $data['vehicle_slug'] }}" method="POST"
            class="myConfirmCheckoutForm">
            @endif
            @csrf
            <div style="display: none">
                <input value="{{ $data['tAmt']}}" name="tAmt" type="text">
                <input value="{{ $data['vehicle_id']}}" name="vehicle_id" type="text">
                <input value="{{ $data['amt']}}" name="amt" type="text">
                <input value="{{ $data['txAmt']}}" name="txAmt" type="text">
                <input value="{{ $data['psc']}}" name="psc" type="text">
                <input value="{{ $data['pdc']}}" name="pdc" type="text">
                <input value="epay_payment" name="scd" type="text">
                <input value="{{$data['pid']}}" name="pid" type="text">
                <input value="http://127.0.0.1:8000/verify-payment?q=su" type="hidden" name="su">
                <input value="http://127.0.0.1:8000/verify-payment?q=fu" type="hidden" name="fu">
            </div>
            <div class="my-bg">
                <div class="row mb-5 ">
                    <div class="col-2"></div>
                    <div class="col-4 mb-5">
                        <h3 class="title pb-3 my-dark-text">Billing Detail</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Full Name : </label>
                                    <p class="content-font">&nbsp;{{ $name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Country : </label>
                                    <p class="content-font">&nbsp;{{ $country }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Address : </label>
                                    <p class="content-font">&nbsp;{{ $address }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="content-font">
                                    <b>
                                        {{ $driver === 1 ? 'I need a driver': 'I do not need a driver'}}
                                    </b>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Phone : </label>
                                    <p class="content-font">&nbsp;{{$phone}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Email : </label>
                                    <p class="content-font">&nbsp;{{ $email }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-5">
                        <h3 class="title pb-3 my-dark-text">Your Reservation</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Vehicle : </label>
                                    <p class="content-font">&nbsp;{{ $title }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Brand : </label>
                                    <p class="content-font">&nbsp;{{$brand}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Quantity : </label>
                                    <p class="content-font">&nbsp;{{$quantity}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Price per hour (NRP) : </label>
                                    <p class="content-font">&nbsp;{{$price_per_hour}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <label class="labels">Total Price : </label>
                                    <p class="content-font">{{ $data['total_price'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-4">
                                    <p class="content-font">
                                        <b>
                                            {{$payment_mode==='COD' ? 'I will pay Cash On Delivery' : 'I will pay through ESEWA' }}
                                        </b>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-2">
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        {{-- <input value="Confirm Checkout" type="submit" role="button"
                            class="float-right mr-5 mb-3 btn my-button"> --}}
                        <button type="submit" class="myRegisterButton mr-5 mb-3 my-button text-center btn float-right"
                            role="button">
                            Confirm Checkout
                        </button>
                        <button type="submit"
                            class="spinner-myRegisterButton mr-5 mb-3 my-button text-center btn float-right"
                            role="button">
                            <img src="{{ asset('/images/loading/spinner.gif') }}" alt="spinner" class="spinner">
                            Confirming...
                        </button>
                    </div>
                </div>
            </div>


        </form>
</div>
<script>
    // Laoding Spinner on buttons
        (function(){
            $('.myConfirmCheckoutForm').on('submit', function(){
            $('.myRegisterButton').hide();
            $('.spinner-myRegisterButton').attr('disabled', 'true');
            $('.spinner-myRegisterButton').show();
            })
        })();
</script>

@endsection