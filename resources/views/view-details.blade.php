@extends('layout')

@section('content')

<div class="view">
  <!-- {{$vehicle->vehicle_title}} -->
  <div class="mask rgba-black-light d-flex justify-content-center align-items-center content-div">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" style="width: 100%" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        @if($vehicle->vehicle_image2!=="no-image.jpg")
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        @endif
        @if($vehicle->vehicle_image3!=="no-image.jpg")
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        @endif
      </ol>

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!-- Content -->
        <div class="text-light wow fadeIn detail-carousel">
          <div class=" text-light ml-5">
            <span class="content-text-header"><strong>{{$vehicle->vehicle_title}} | {{$vehicle->vehicle_brand}} |
                {{$vehicle->vehicle_category}}</strong></span><br>
            <span class="content-text-body"><i class="green-icon fas fa-cube " id="whiteIcon"></i>
              {{$vehicle->vehicle_model}}</span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-users " id="whiteIcon"></i>
              {{$vehicle->vehicle_seat_number}} Seats</span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-closed-captioning " id="whiteIcon"></i>
              {{$vehicle->vehicle_engine}}</span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-gas-pump " id="whiteIcon"></i>
              {{$vehicle->vehicle_fuel_type}}</span>&nbsp;&nbsp;
            @if($ac===true)
            <span class="content-text-body"><i class="green-icon fas fa-snowflake" id="whiteIcon"></i>
              AC</span>&nbsp;&nbsp;
            @endif
            <span class="content-text-body"><i class="green-icon fas fa-coin " id="whiteIcon"></i>
              Rs.{{$vehicle->vehicle_price}}</span>&nbsp;&nbsp;

            <span class="float-right mr-5">
              <a href="/wish-list/{{$vehicle->slug}}" role="button" class="btn ml-4 view-detail-button">Wish List</a>
              @if($vehicle->vehicle_is_published===1)
              <a href="/checkout/{{$vehicle->slug}}" role="button"
                class="btn view-detail-button ml-3 {{ $vehicle->vehicle_quantity < 1 ? 'disabled' : '' }}">Reserve</a>
              @else
              <a href="/#" role="button" class="btn view-detail-button ml-3">Not Available</a>
              @endif

            </span>
          </div>
        </div>
        <!-- Content -->

        <!--First slide-->
        <div class="carousel-item active">
          <img class="detail-image d-block " src="/storage/vehicle_images/{{$vehicle->vehicle_image1}}"
            alt="First slide">
        </div>
        <!--/First slide-->

        <!--Second slide-->
        @if($vehicle->vehicle_image2!=="no-image.jpg")
        <div class="carousel-item">
          <img class="detail-image d-block " src="/storage/vehicle_images/{{$vehicle->vehicle_image2}}"
            alt="Second slide">
        </div>
        @endif
        <!--/Second slide-->

        <!--Third slide-->
        @if($vehicle->vehicle_image3!=="no-image.jpg")
        <div class="carousel-item">
          <img class="detail-image d-block " src="/storage/vehicle_images/{{$vehicle->vehicle_image3}}"
            alt="Third slide">
        </div>
        @endif
        <!--/Third slide-->
      </div>
      <!--/.Slides-->

      <!--Controls-->
      @if(($vehicle->vehicle_image2!=="no-image.jpg") && ($vehicle->vehicle_image3!=="no-image.jpg"))
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      @endif
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
  </div>
  <!-- Mask & flexbox options-->
</div>
{{-- </div> --}}
<!--/First slide-->
{{-- </div>
</div> --}}
<!--/.Carousel Wrapper-->
{{-- <hr class="my-5"> --}}

<!--Main layout-->
<main>
  <div class="container">

    <!--Section: Main info-->
    @if($total_recommended_vehicles > 0)
    <section class="mt-5 wow fadeIn">
      <h2 class="my-5 h3 text-center my-text font-weight-bold">RECOMMENDED</h2>
      <!--Grid row-->
      <div class="row">
        @foreach($recommended_vehicles ?? '' as $recommended_vehicle)
        <div class="col-4">
          <div class="card recommended-card" style="width: 20rem;">
            <div class="image-container">
              <img src="/storage/vehicle_images/{{ $recommended_vehicle->vehicle_image1 }}"
                style="width:20rem; height:14rem" class="card-img-top" alt="...">
              <a href="/view-details/{{$recommended_vehicle->slug}}">
                <div class="overlay">
                  <div class="overlay-button">
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a class="my-link" href="/view-details/{{$recommended_vehicle->slug}}">
                <b>
                  <p class="card-title my-text text-center" style="font-size: larger">
                    {{ $recommended_vehicle->vehicle_title }}</p>
                </b>
              </a>
              <p class="card-text my-text text-center  mb-4">
                Rs&nbsp;{{ $recommended_vehicle->vehicle_price }}/hr</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <!--Grid row-->

    </section>

    <hr class="my-5">
    @endif
    <!--Section: Main info-->
    {{-- <!--Section: Main info-->
    <section class="mt-5 wow fadeIn">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg" class="img-fluid z-depth-1-half"
            alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!-- Main heading -->
          <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
          <p>This template is created with Material Design for Bootstrap (
            <strong>MDB</strong> ) framework.</p>
          <p>Read details below to learn more about MDB.</p>
          <!-- Main heading -->

          <hr>

          <p>
            <strong>400+</strong> material UI elements,
            <strong>600+</strong> material icons,
            <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
            <strong>Free for personal and commercial use.</strong>
          </p>

          <!-- CTA -->
          
          <a target="_blank" href="https://mdbootstrap.com/docs/jquery/components/" class="btn btn-grey btn-md">Live
            demo
            <i class="far fa-image ml-1"></i>
          </a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </section>
    <!--Section: Main info--> --}}



    <!--Section: symbols-->
    <section>

      <h2 class="my-5 h3 text-center my-text font-weight-bold">SYMBOLIC MEANINGS</h2>

      <!--First row-->
      <div class="row features-small mt-5 wow fadeIn">

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fa fa-cube fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2 pl-3">
              <h5 class="feature-title font-bold mb-1">Model</h5>
              <p class="grey-text mt-2">
                The model of a car is the name used by a manufacturer to market a range of similar cars.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fa fa-users fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Number of seats</h5>
              <p class="grey-text mt-2">
                Depending upon the model and brand there are upto 7 seats available in an average vehicle
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-closed-captioning fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Engine (CC)</h5>
              <p class="grey-text mt-2">
                The engine is the heart of your car. The size of an engine refers to the total volume of air and fuel.
                It's measured in cubic centimetres (cc).
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-gas-pump fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Fuel Type</h5>
              <p class="grey-text mt-2">
                It could either be Diesel, Petrol or Hybrid (Diesel & Petrol)
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

      </div>
      <!--/First row-->

      <!--Second row-->
      <div class="row features-small mt-4 wow fadeIn">

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-coin fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Price</h5>
              <p class="grey-text mt-2">
                The amount depending on the car and number of days to be booked. Here booking is done on the basis of
                per hour.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-snowflake fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">A/C</h5>
              <p class="grey-text mt-2">
                Among the various attributes of a vehicle, Air Conditioner is one of them. It is moslty available in all
                the vehicles nowadays
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-steering-wheel fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Power Steering</h5>
              <p class="grey-text mt-2">
                A power steering system helps drivers steer the vehicle by
                augmenting steering effort needed to turn the steering wheel, making it easier for the vehicle to turn
                or maneuver.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fab fa-bluetooth-b fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Bluetooth</h5>
              <p class="grey-text mt-2">
                It lets you connect your phone to your car's system, providing a total wireless access to the functions
                of your phone
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

      </div>
      <!--/Second row-->

    </section>
    <!--Section: Symbols-->

    <hr class="my-5">

    <!--Section: Main features & Quick Start-->
    <section class="pb-5">

      <h3 class="h3 text-center mb-5 my-text font-weight-bold">ABOUT SHAREWHEEL</h3>

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 px-4">

          <!--First row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-car fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">New Venture</h5>
              <p class="grey-text">With a fresh idea, <i>Sharewheel</i> comes to us as a savior, while travelling a long
                or short distances in any situation</p>

            </div>
          </div>
          <!--/First row-->

          <div style="height:30px"></div>

          <!--Second row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-book fa-2x blue-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">Detailed documentation</h5>
              <p class="grey-text">For a detailed description and documentation on how <i>Sharewheel</i> functions, the
                requirement to join <i>Sharewheel</i>
                and the terms and conditions to agree upon, a document file will be uploaded soon.
              </p>
              <a target="_blank" href="{{asset('/inputgroup.pdf')}}" class="btn btn-grey btn-md">Download
                <i class="green-icon fas fa-download"></i>
              </a>
            </div>
          </div>
          <!--/Second row-->

          <div style="height:30px"></div>

          <!--Third row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-graduation-cap fa-2x cyan-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">Quick and short tutorial</h5>
              <p class="grey-text">Sparing a short time, you could also play the video on the right to get a hang og the
                website. It is surely a simple procedure! We Promise 😀</p>
            </div>
          </div>
          <!--/Third row-->

        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12">

          <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bzmFBeOLrDg"
              allowfullscreen></iframe>
          </div>
        </div>
        <!--/Grid column-->

      </div>
      <!--/Grid row-->

    </section>
    <!--Section: Main features & Quick Start-->

    {{-- <!--Section: Not enough-->
    <section>

      <h2 class="my-5 h3 text-center">Not enough?</h2>

      <!--First row-->
      <div class="row features-small mb-5 mt-3 wow fadeIn">

        <!--First column-->
        <div class="col-md-4">
          <!--First row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">Free for personal and commercial use</h6>
              <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as
                commercial projects.
              </p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/First row-->

          <!--Second row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">400+ UI elements</h6>
              <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
              </p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Second row-->

          <!--Third row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">600+ icons</h6>
              <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Third row-->

          <!--Fourth row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">Fully responsive</h6>
              <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop,
                tablet or mobile phone. MDB
                looks great on each screen.</p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Fourth row-->
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 flex-center">
          <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone"
            class="z-depth-0 img-fluid">
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-4 mt-2">
          <!--First row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">70+ CSS animations</h6>
              <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your
                project and delight your visitors.
              </p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/First row-->

          <!--Second row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">Plenty of useful templates</h6>
              <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Second row-->

          <!--Third row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">Easy installation</h6>
              <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.
              </p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Third row-->

          <!--Fourth row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-check-circle fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h6 class="feature-title">Easy to use and customize</h6>
              <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep
                customization. You will
                easily adjust each component to suit your needs.</p>
              <div style="height:15px"></div>
            </div>
          </div>
          <!--/Fourth row-->
        </div>
        <!--/Third column-->

      </div>
      <!--/First row-->

    </section>
    <!--Section: Not enough--> --}}

    {{-- <hr class="mb-5"> --}}
  </div>
</main>
<!--Main layout-->

@endsection