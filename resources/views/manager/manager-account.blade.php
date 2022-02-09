@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">My Profile <b>[</b> {{ $user_info->username }} <b>]</b>
                        </span>
                    </div>
                    <div class="row card-body card-block">
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/user_profile_images/{{ $user_info->profile_image }}" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_profile_images/{{ $user_info->profile_image }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <h4>
                                <b>
                                    {{ $user_info->first_name }}
                                    {{ $user_info->last_name }}
                                </b>
                            </h4>
                            <hr>
                            <p><b>Date of Birth: </b>{{\Carbon\Carbon::parse($user_info->dob)->format('M-d-Y')}}</p>
                            <p><b>Address: </b>{{ $user_info->country_name }}, {{ $user_info->address }}</p>
                            <p><b>Email Id: </b>{{ $user_info->email }}</p>
                            <p><b>Contact Number: </b>{{ $user_info->contact_number }}</p>
                            <p><b>Joined as Manager from:
                                </b>{{\Carbon\Carbon::parse($user_info->created_at)->format('M-d-Y')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection