@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Categories</span>
                        <a href="/manager-categories/create-category" class="create-button"><button
                                class="btn my-button">+ Register Category</button></a>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Title</strong></div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5"><strong>Description</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                        <div class="col-lg-2"></div>
                    </div>
                    @foreach($categories ?? '' as $category)
                    <div class="row card-body card-block">
                        <div class="col-lg-3">
                            <p class="title">
                                <h4>{{$category->category}}</h4>
                            </p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <p class="text-justify"> {{$category->category_description}}</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="table-data-feature ">
                                <form method="POST" id="delete-form"
                                    action="/manager-categories/{{$category->category}}">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirmDelete();" type="submit"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="Delete">
                                        <i style="color:white;" class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="my-hr"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection