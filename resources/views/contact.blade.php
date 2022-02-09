@extends('layout')


@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">CONTACT US</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    <div class="row mt-5 mb-5"></div>
    <!-- icons row -->
    <div class="row mb-5">
        <!-- Contact icon -->
        <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
                <i class="mb-4 fa fa-phone-alt fa-3x" style="color: #F05945"></i>
                <h4>Phone</h4>
                <p>+977-0101-1010</p>
            </div>
        </div>
        <!-- Address icon-->
        <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
                <a class="text-decoration-none"><i class="mb-4 fa fa-map-marker-alt fa-3x"
                        style="color: #FFC947"></i></a>
                <h4>Address</h4>
                <p>Kathmandu,Nepal</p>
            </div>
        </div>
        <!-- Open Time icon -->
        <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
                <i class="mb-4 fa fa-car fa-3x" style="color: #f0b7a3"></i>
                <h4>Availability</h4>
                <p>24 x 7, 365 days/year</p>
            </div>
        </div>
        <!-- Email icon -->
        <div class="col-lg-3 col-md-3 col-sm-6 text-center">
            <div class="contact__widget">
                <i class="mb-4 fa fa-dollar fa-3x" style="color: #5FB946"></i>
                <h4>Payment Gateway</h4>
                <p><img src="{{asset('/images/logo/esewa.png')}}" style="height:25px;width:40px;border-radius:15px"
                        alt="">&nbsp;+977 984224567</p>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <a name="leave_message">
                <h2 class="my-text text-center"><b>Leave Message</b></h2>
            </a>
        </div>
        <div class="col-lg-4"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form method="POST" action="/contact-us" class="myRegisterForm">
                @csrf
                <div class="row mt-5 mb-2">
                    <div class="col-lg-6">
                        <div class="input-group mb-4">
                            <input name="contact_name" {{-- value="{{ auth()->user()->first_name }}
                                {{ auth()->user()->last_name }}" type="text" --}}
                                value="{{ Auth::user() ? auth()->user()->first_name : '' }}" type="text"
                                class="my-input form-control @error('contact_name') is-invalid @enderror"
                                placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" />
                            @error('contact_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class=" input-group mb-4">
                            <input name="contact_email" value="{{ Auth::user() ? auth()->user()->email : '' }}"
                                type="text" class="my-input form-control @error('contact_email') is-invalid @enderror"
                                placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" />
                            @error('contact_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        <div class="input-group mb-4">
                            <textarea name="contact_message"
                                class="my-input form-control message-box @error('contact_message') is-invalid @enderror"
                                id="exampleFormControlTextarea1" rows="3"
                                placeholder="Message">{{ old('contact_message') }}</textarea>
                            @error('contact_message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3 text-center">
                        <button type="submit"
                            class="myRegisterButton mt-3 my-button btn-block text-center btn text-decoration-none btn-lg float-center"
                            href="#" role="button">
                            <i class="fa fa-paper-plane text-light"></i> Send
                        </button>
                        <button type="submit"
                            class="spinner-myRegisterButton mt-3 my-button btn-block text-center btn text-decoration-none btn-lg float-center"
                            href="#" role="button">
                            <img src="{{ asset('/images/loading/spinner.gif') }}" alt="spinner" class="spinner">
                            Sending...
                        </button>
                    </div>
                    <div class="col-sm-3 text-center">
                        <button type="reset" class="btn btn-block  mt-3 btn-danger" style="height:48px; font-size:20px">
                            <i class="fa fa-ban text-light"></i> Reset</button>
                    </div>
                    <div class="col-sm-4"></div>

                </div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-12">
            <a name="address">
                <h3 class="my-text pt-5 ml-5">Location on Map</h3>
            </a>
        </div>
    </div>
</div>

<div class="row mt-5 ml-1 mr-1 mb-5">

    <iframe class="mb-5"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689214012!2d85.29111326133645!3d27.709031933406965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920161735ef%3A0x6c089431dddc44e9!2sTech%40rt%20Trekkies%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1590134578103!5m2!1sen!2snp"
        width="800" height="600" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
<script>
    // Laoding Spinner on buttons
        (function(){
            $('.myRegisterForm').on('submit', function(){
            $('.myRegisterButton').hide();
            $('.spinner-myRegisterButton').attr('disabled', 'true');
            $('.spinner-myRegisterButton').show();
            })
        })();
</script>

@endsection