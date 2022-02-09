@extends('manager/managerLayout')

@section('managerContent')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 card ">
                    <h1>Users</h1>
                    <hr>
                    @if(array_key_exists('users', $results))
                    
                        @foreach($results['users'] as $user)
                            <a class="my-text-hover" href="/manager-users/user-detail/{{$user->username}}"><p>{{$user->first_name}} {{$user->last_name}} </p></a>
                        @endforeach
                    @else
                    <p  class="text-danger">No Results for Users </p>
                    @endif
                </div>
                <div class="col-lg-3 card ">

                    <h1>Vehicles</h1>
                    <hr>
                    @if(array_key_exists('vehicles', $results))
                    
                        @foreach($results['vehicles'] as $vehicle)
                            <a class="my-text-hover" href="/manager-products/product-detail/{{$vehicle->slug}}"><p>{{$vehicle->vehicle_title}}</p></a>
                        @endforeach
                    @else
                    <p class="text-danger">No Results for Vehicles </p>
                    @endif
                   </div>
                <div class="col-lg-3 card ">
                    <h1>Brands</h1>
                    <hr>
                    @if(array_key_exists('brands', $results))
                    
                        @foreach($results['brands'] as $brand)
                            <a class="my-text-hover" href="{{$brand->brand_link}}"><p>{{$brand->brand}}</p></a>
                        @endforeach
                     @else
                    <p class="text-danger">No Results for Brands </p>
                    @endif
                </div>
                <div class="col-lg-3 card ">
                    <h1>Categories</h1>
                    <hr>
                    @if(array_key_exists('categories', $results))
                    
                        @foreach($results['categories'] as $category)
                            <a class="my-text-hover" href="/manager-categories"><p>{{$category->category}}</p></a>
                        @endforeach
                      @else
                    <p class="text-danger">No Results for Categories</p>
                    @endif
                </div>
</div>
</div>
</div>
</div>
@endsection