@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">{{$user_category}}</p>
</div>
<!-- Heading of every pages  -->

<!-- Our Vehicles End -->
<div class="container">
    <div class="row my-pagination">
        {{ $vehicles->links('pagination') }}
    </div>
    @if($total_results > 0)
    <div class="row my-vehicle-list">
        @foreach($vehicles ?? '' as $vehicle)
        <div class="col-4 mb-5">
            <div class="card vehicle-card" style="width: 20rem;">
                <div class="image-container">
                    <img src="/storage/vehicle_images/{{ $vehicle-> vehicle_image1 }}" style="width:20rem; height:14rem"
                        class="card-img-top" alt="...">
                    <a href="/view-details/{{$vehicle->slug}}">
                        <div class="overlay">
                            <div class="overlay-button">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a class="my-link" href="/view-details/{{$vehicle->slug}}">
                        <h5 class="card-title my-text text-center">{{ $vehicle->vehicle_title }}</h5>
                    </a>
                    <p class="card-text my-text text-center  mb-4">Rs&nbsp;{{ $vehicle->vehicle_price }}/hr</p>
                    <a href="/wish-list/{{$vehicle->slug}}" role="button" class="btn my-button ml-4">Wish List</a>
                    <a href="/checkout/{{$vehicle->slug}}" role="button"
                        class="btn my-button ml-3 {{ $vehicle->vehicle_quantity < 1 ? 'disabled' : '' }}">Reserve</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="row my-vehicle-list pb-5 mt-5 my-bg">
        <div class="col-12 mb-5 mt-5 text-center">
            <img src="{{ asset('/images/loading/searching.gif') }}" style="width:100px;height:auto" alt="searching"
                srcset="">
            <h1 class="my-text">Sorry!</h1>
            <p class="text-danger">No vehicle to show for "{{$user_category}}"</p>
        </div>
    </div>
    <div class="row mt-5 mb-5"></div>
    @endif
</div>
<!-- Our Vehicles End -->
@endsection