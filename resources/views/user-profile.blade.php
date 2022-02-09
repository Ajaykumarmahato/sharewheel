@extends('layout')


@section('content')

<!-- Heading of profile pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px; ">
  <p class="text-light pt-4 text-center" style="font-size:70px;">My Profile</p>
</div>
<!-- Heading of profile pages  -->

<div class="container pt-3">

  <div class="row pt-3 pb-3 mb-3">
    <div class="col-lg-4">
      <div class="view view-cascade single-img-gallery ">
        <a href="/storage/user_profile_images/{{ Auth::user()->profile_image }}" target="_blank">
          <img class="card-img-top user-image img-fluid"
            src="/storage/user_profile_images/{{ Auth::user()->profile_image }}" alt="Card image cap">
        </a>

      </div>
    </div>
    <div class="col-lg-4">
      <h4><b>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</b></h4>
      <hr>
      <p><b>Date of Birth: </b>{{\Carbon\Carbon::parse(auth()->user()->dob)->format('M-d-Y')}}</p>
      <p><b>Address: </b>{{ auth()->user()->country_name }}, {{ auth()->user()->address }}</p>
      <p><b>Email Id: </b>{{ auth()->user()->email }}</p>
      <p><b>Contact Number: </b>{{ auth()->user()->contact_number }}</p>
      <p><b>Joined as Manager from:
        </b>{{\Carbon\Carbon::parse(auth()->user()->created_at)->format('M-d-Y')}}
      </p>
    </div>
    <div class="col-lg-4">
      @if(count($order_info)>0)
      <h4><b>Reservation Summary</b></h4>
      <hr>
      @foreach ($order_info as $order)
      <p>{{$order->vehicle_title}}, {{$order->vehicle_brand}}</p>
      @endforeach

      <a href="/my-booking" role="button" class="btn view-detail-button-v2" style="display:inline-block"><i
          class="fa fa-eye"></i> View More</a>
      @endif
      <div class="my-ad-carousel single-img-gallery mt-4">
        <a href="{{ asset('/images/gridslider/sharewheel-ad.png') }}" target="_blank">
          <img src="{{ asset('/images/gridslider/sharewheel-ad.png') }}" class="my-ad-image img-fluid"
            style="width:370px;height:500px" alt="">
        </a>
      </div>
    </div>
  </div>
  <div class="row pt-3 pb-3 mb-5">
    <div class="col-lg-4">
      <div class="view view-cascade single-img-gallery ">
        <a href="/storage/user_liscence_images/{{ auth()->user()->liscence_image }}" target="_blank">
          <img class="card-img-top user-image img-fluid"
            src="/storage/user_liscence_images/{{ auth()->user()->liscence_image }}" alt="Card image cap">
        </a>
      </div>
    </div>
    <div class="col-lg-4">
      <p><b>Liscence Number: </b> {{auth()->user()->liscence_number}}</p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>
</div>



@endsection