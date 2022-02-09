@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">SEARCH RESULTS...</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    @if(isset($details))
    <p class="my-text">The result for your query "<b>{{ $query}}</b>" are <strong>{{$total_results}}</strong> in this
        page</p>
    <div class="row my-pagination">
        {{ $details->appends(['search' => Request::get('page')])->links('pagination') }}
    </div>
    <hr>
    <div class="row">
        <div class="card col-3 mb-5">
            <form action="/filtered-search" method="GET">
                <div class="mt-3 ml-3">
                    <button class="btn my-button" type="submit">Apply Filter</button>
                    <button class="btn btn-danger" type="reset">Remove Filter</button>
                </div>
                <!-- <div class="div mt-3 mb-3">
                            <select name="sort" id="select" class="form-control my-input">
                                <option  value="all">Sort By</option>
                                <option  value="newest-arrival" >Newest Arrival</option>
                                <option  value="price-high-to-low" >High to Low(Price)</option>
                                <option  value="price-low-to-high" >Low to High(Price)</option>
                            </select>
                        </div> -->
                <div id="accordion">
                    <div class="card mt-3 mb-3">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Brands
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                @foreach($brands ?? '' as $brand)
                                @if($brand->brand == $query)
                                <input class="chb" type="checkbox" value="{{ $brand->brand }}" id="{{ $brand->brand }}"
                                    name="brand_filter" checked> <label
                                    for="{{$brand->brand}}">{{ $brand->brand }}</label> <br>
                                @else
                                <input class="chb" type="checkbox" value="{{ $brand->brand }}" id="{{ $brand->brand }}"
                                    name="brand_filter"> <label for="{{$brand->brand}}">{{ $brand->brand }}</label> <br>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div id="headingTwo" class="card-header collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Categories
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                @foreach($categories ?? '' as $category)
                                @if($category->category == $query)
                                <input class="chb1" type="checkbox" value="{{ $category->category }}"
                                    id="{{ $category->category }}" name="category_filter" checked> <label
                                    for="{{ $category->category }}">{{ $category->category }}</label> <br>
                                @else
                                <input class="chb1" type="checkbox" value="{{ $category->category }}"
                                    id="{{ $category->category }}" name="category_filter"> <label
                                    for="{{ $category->category }}">{{ $category->category }}</label> <br>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-3 ml-3">
                    <button class="btn my-button" type="submit">Apply Filter</button>
                    <button class="btn btn-danger" type="reset">Remove Filter</button>
                </div>
            </form>
        </div>
        <div class="col-9">
            <div class="row my-vehicle-list">
                @foreach($details ?? '' as $vehicle)
                @if($vehicle->vehicle_is_published==1)
                <div class="col-4 mb-5">
                    <div class="card vehicle-card" style="width: 17.1rem;">
                        <div class="image-container">
                            <img src="/storage/vehicle_images/{{ $vehicle-> vehicle_image1 }}"
                                style="width:17.1rem; height:14rem" class="card-img-top" alt="...">
                            <a href="/view-details/{{$vehicle->slug}}">
                                <div class="all-overlay">
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
                            <a href="/wish-list/{{$vehicle->slug}}" role="button" class="btn my-button">Wish
                                List</a>
                            <a href="/checkout/{{$vehicle->slug}}" role="button"
                                class="btn my-button ml-3 {{ $vehicle->vehicle_quantity < 1 ? 'disabled' : '' }}">Reserve</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @else
    <p>No results found!</p>
    @endif

</div>
<script>
    $(".chb").change(function() {
        $(".chb").prop('checked', false);
        $(this).prop('checked', true);
       
    });
    
    $(".chb1").change(function() {
        $(".chb1").prop('checked', false);
        $(this).prop('checked', true);sss
        
    });

    
</script>
@endsection