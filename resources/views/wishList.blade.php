@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">MY WISHLIST</p>
</div>
<!-- Heading of every pages  -->

<div class="container">

    @if($total_wishlists > 0)
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
                @if($vehicles!=0)
                @foreach($vehicles as $vehicle)
                <tr>
                    <td scope="row"><a class="my-text-hover text-decoration-none"
                            href="/view-details/{{$vehicle->slug}}">{{$vehicle->vehicle_title}}</a></td>
                    <td scope="row"><img src="/storage/vehicle_images/{{ $vehicle-> vehicle_image1 }}"
                            style="height:auto; width:150px" alt="image" /></td>
                    <td scope="row">{{$vehicle->vehicle_price}}</td>
                    <td scope="row">{{$vehicle->vehicle_brand}}</td>
                    <td scope="row">{{$vehicle->vehicle_model}}</td>


                    <td scope="row">
                        <a href="/checkout/{{$vehicle->slug}}" role="button" class="btn view-detail-button-v2"
                            style="display:inline-block">Reserve</a>&nbsp;&nbsp;
                        <form method="POST" style="display:inline-block" action="/wish-list/{{$vehicle->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn my-danger-btn">X</button>
                        </form>
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
            <p class="text-danger">Nothing to show in wishlist!</p>
        </div>
    </div>
    <div class="row mt-5 mb-5"></div>
    @endif

</div>


@endsection