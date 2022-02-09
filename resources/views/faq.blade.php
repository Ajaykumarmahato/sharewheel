@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
  <p class="text-light pt-4 text-center" style="font-size:70px;">FAQ'S</p>
</div>
<!-- Heading of every pages  -->

<div class="container mb-5">

  <div class="row mb-5">
    <div class="col my-bg text-center mt-5">
      <h5 class="mt-3 mb-3" style="color: #01a99d;">
        Got questions? Here are your answers! <br> <br>
        Any Questions? <a href="{{ asset('/contact-us') }}/#leave_message" class="my-link">Ask here!</a>
      </h5>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <div class="accordion" id="accordionExample">
        <div class="card ">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left my-text-hover" type="button" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How can I pay to rent a vehicle online?
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body my-text text-justify">
              We have made payment a simple procedure in our system. You can either pay through <b>ESEWA</b>, a popular
              payment
              gateway in Nepal. Or you can choose to pay <b>Cash</b>.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed my-text-hover" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                What proof of identification do I need to bring along while collecting the vehcile?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body my-text text-justify">
              <ul>
                <li>
                  A valid driver's license for all named drivers - If your driver’s license is printed in non-Roman
                  alphabet
                  (Arabic, Chinese, Cyrillic, etc.), it must be accompanied by driver's license. Any
                  driver's license originating from countries not part of the international driver's license treaty must
                  also be accompanied by an official translation.
                </li>
                <li>
                  Renters not from the United States must provide a valid government issued secondary form of
                  identification
                  such as a citizenship.
                </li>
                <li>
                  For local renters using a debit card, one utility bill will be required
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed my-text-hover" type="button" data-toggle="collapse"
                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                What is the minimun age to drive a rented vehicle?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body my-text text-justify">
              The minimum age to rent a vehicle in most locations is 21 and the driver must have a valid driver's
              license. If the driver is between the ages of 21 to 24 only the following categories can be rented –
              economy vehicle, compact vehicle, intermediate vehicle, full size vehicle, compact SUV, intermediate SUV,
              and minivan. For an explanation of our vehicle groups, please visit our fleet guide. Please also keep in
              mind, that an Underage Driver Fee will apply for all drivers under 25 years of age.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5 mb-5"></div>
</div>
@endsection