@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">MY RESERVATIONS</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    @if($total_bookings > 0)
    <div class="row">
        <table class="table borderless my-text">
            <tbody>
                <tr>
                    <th scope="row"><label>Vehicle Name </label></th>
                    <th scope="row"><label>Image</label></th>
                    <th scope="row"><label>Price/hr </label></th>
                    <th scope="row"><label>Brand</label></th>
                    <th scope="row"><label>Model</label></th>
                    <th scope="row"><label>Action</label></th>
                </tr>
                @if($total_bookings!=0)
                @foreach($order_info as $order)
                <tr>
                    <td scope="row"><a class="my-text-hover text-decoration-none"
                            href="/view-details/{{$order['order']->slug}}">{{$order['order']->vehicle_title}}</a></td>
                    <td scope="row"><img src="/storage/vehicle_images/{{ $order['order']-> vehicle_image1 }}"
                            style="height:auto; width:150px" alt="image" /></td>
                    <td scope="row">{{$order['order']->vehicle_price}}</td>
                    <td scope="row">{{$order['order']->vehicle_brand}}</td>
                    <td scope="row">{{$order['order']->vehicle_model}}</td>
                    <td scope="row">
                        <div class="div" style="display:inline-block">
                            <a href="/checkout/{{$order['order']->slug}}" role="button"
                                class="btn view-detail-button-v2" style="display:inline-block">Reserve Again</a>
                            <form method="POST" id="delete-form"
                                class="{{ $order['is_cancellable'] =='true' ? 'd-block' : 'd-none' }}"
                                action="/my-booking/{{$order['order_id']}}">
                                @csrf
                                @method('DELETE')
                                <button style="display:inline-block;color:red;font-size:medium" type="submit"
                                    title="Cancel Reservation" class="btn mt-2 my-danger-btn">Cancel</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @else

    <div class="row my-vehicle-list pb-5 mt-5 my-bg">
        <div class="col-12 mb-5 mt-5 text-center">
            <img src="{{ asset('/images/loading/searching.gif') }}" style="width:100px;height:auto" alt="searching"
                srcset="">
            <h1 class="my-text">Sorry!</h1>
            <p class="text-danger">Nothing to show in reservation!</p>
        </div>
    </div>
    <div class="row mt-5 mb-5"></div>
    @endif
</div>


@endsection