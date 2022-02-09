@extends('admin/adminLayout')

@section('adminContent')
<!-- <p>{{$user->first_name}}</p>
            <p>{{$user->last_name}}</p>
            <p>{{$user->email}}</p> -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card pb-5">
                <div class="col-lg-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">{{ $user->first_name }} {{ $user->last_name }}</span>
                        <a href="/admin-users" class="create-button"><button class="btn my-button">BACK</button></a>
                    </div>
                    <div class="row mb-4 mt-4 card-body card-block">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/user_profile_images/{{ $user->profile_image }}" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_profile_images/{{ $user->profile_image }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5 pl-4">
                            <p><strong>General Information</strong></p>
                            {{-- <p><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }} <br> --}}
                            <strong>Date of Birth:</strong> {{ $user->dob }} <br>
                            <strong>Joined us on:</strong> {{ $user->created_at->toDateString() }} at
                            {{ $user->created_at->toTimeString() }} <br>
                            <strong>Status: </strong>
                            @if($user->is_activated == 1)
                            <span class="status--process">Activated</span>
                            @else
                            <span class="status--denied">Blocked</span>
                            @endif
                            </p>
                            <hr>
                            <p><strong>Contact Information</strong></p>
                            <p><strong>Email:</strong> {{ $user->email }}<br>
                                <strong>Contact Number:</strong> {{ $user->contact_number }} <br>
                                <strong>Address:</strong> {{ $user->address }} <br>
                            </p>
                        </div>
                        <div class="col-lg-2 pl-5">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 ml-3 single-img-gallery">
                            <a href="/storage/user_liscence_images/{{ $user->liscence_image }}" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_liscence_images/{{ $user->liscence_image }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pl-4">
                            <p><strong>Additional Information</strong></p>
                            <p><strong>Liscence Holder:</strong> {{ $user->first_name }} {{ $user->last_name }} <br>
                                <strong>Age:</strong> {{\Carbon\Carbon::parse($user->dob)->age}} years <br>
                                <strong>Liscence Number: </strong>{{$user->liscence_number}}</p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection