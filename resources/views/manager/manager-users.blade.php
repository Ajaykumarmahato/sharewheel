@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Users</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>User</strong></div>
                        <div class="col-lg-3"><strong>Email</strong></div>
                        <div class="col-lg-2"><strong>Role</strong></div>
                        <div class="col-lg-2"><strong>Status</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                        <div class="col-lg-1"></div>
                    </div>
                    @foreach($users ?? '' as $user)
                    <div class="row card-body card-block {{ $user->is_activated == 0 ? 'my-blocked' : '' }}">
                        <div class="col-lg-3 my-user-data">
                            <img style="height:auto;width:120px;"
                                src="/storage/user_profile_images/{{ $user->profile_image }}" alt="">
                            <br> <br><span class="name"><b>{{$user->first_name}}&nbsp;{{$user->last_name}}</b></span>
                        </div>
                        <div class="col-lg-3 my-user-data">
                            <span class="email">{{$user->email}}</span>
                        </div>
                        <div class="col-lg-2 my-user-data">
                            @if($user->role=='administrator')
                            <span class="role member">{{$user->role}}</span>
                            @else
                            <span class="role user">{{$user->role}}</span>
                            @endif
                        </div>
                        <div class="col-lg-2 my-user-data">
                            @if($user->is_activated == 1)
                            <span class="status--process">Activated</span>
                            @else
                            <span class="status--denied">Blocked</span>
                            @endif
                        </div>
                        <div class="col-lg-1">
                            <div class="table-data-feature">
                                <div class="class-button" style="margin-right:5px;margin-left:0px">
                                    <a href="/manager-users/user-detail/{{$user->username}}"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="View Detail">
                                        <i style="color:white;" class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
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