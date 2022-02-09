@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Associates</span>
                        <a href="/manager-brands/create-brand" class="create-button"><button class="btn my-button">+
                                Register Brand</button></a>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Image</strong></div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 ml-1"><strong>Name</strong></div>
                        <div class="col-lg-3"><strong>Description</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                        <div class="col-lg-1"></div>
                    </div>
                    @foreach($brands ?? '' as $brand)
                    <div class="row card-body card-block">
                        <div class="col-lg-3">
                            <img src="/storage/brand_images/{{ $brand->brand_image }}" alt="...">
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <p class="title">
                                <h4>{{$brand->brand}}</h4><br>
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <p class="text-justify"> {{$brand->brand_description}}</p> <br>
                            @if($brand->brand_link != "")
                            <p class="text-justify"><a class="my-link" target="__blank" href="{{$brand->brand_link}}">
                                    <i class="fas fa-globe"></i>
                                    Visit site for more details</a></p>
                            @endif
                        </div>
                        <div class="col-lg-1">
                            <div class="table-data-feature mr-3">
                                <form method="POST" id="delete-form" action="/manager-brands/{{$brand->brand}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirmDelete();" style="background-color:#808080;"
                                        class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i style="color:white;" class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="my-hr"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection