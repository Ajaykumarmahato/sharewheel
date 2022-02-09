@extends('manager/managerLayout')

@section('managerContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Daily Posts and Feedbacks</span>
                    </div>
                    @foreach($feedbacks ?? '' as $feedback)
                    <div class="row card-body card-block {{ $feedback->is_published == 0 ? 'my-blocked' : '' }}">
                        <div class="col-lg-4">
                            <p><b>{{$feedback->first_name}}</b></p>

                            <p>
                                <i class="far fa-envelope"></i><i> {{$feedback->email}}</i>
                            </p>

                            <p>
                                <i class="far fa-clock"></i>
                                {{\Carbon\Carbon::parse($feedback->created_at)->format('M-d-Y')}} at
                                {{$feedback->created_at->toTimeString()}}
                            </p>

                        </div>
                        <div class="col-lg-6">
                            <p class="text-justify">{{$feedback->message}}</p>
                        </div>
                        <div class="col-lg-1">
                            @if($feedback->is_published == 1)
                            <span class="status--process">Published</span>
                            @else
                            <span class="status--denied">Hidden</span>
                            @endif
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