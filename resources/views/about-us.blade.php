@extends('layout')

@section('content')

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('{{ asset('/images/heading/bg.jpg')}}'); height:150px;">
  <p class="text-light pt-4 text-center" style="font-size:70px;">ABOUT US</p>
</div>
<!-- Heading of every pages  -->

<div class="container pt-5 pb-5">

  <div class="row pl-4 pr-4 pt-5 pb-5">
    <!-- picture -->
    <div class="col-sm-6">
      <img class="image-box" src="{{asset('/images/carousel/car3.jpeg')}}" />
    </div>
    <div class="col-sm-6">
      <h4>Why we exist?</h4>
      <p class="paragraph">
        As the growing popularity of many car rental services in Nepal, people are getting more into the business of it.
        In a global pandemic sitaution of COVID-19, people have really face some serious amount of issues in travelling.
        Post the first version of Lockdown in 2020, people were very particular in their choice of travelling partners.
        Though a large number of people prefer the public vehicle as it is readily available and cheap,
        there were equal chances of the virus transimmiting.
        Such problems were largely looked upon by the other car rental apps.
        However, <i>Sharewheel</i> is different than others in the sense
        that it can be booked by an individual or a group of people to either ride on their own or hire a driver
        alongside the car. Not only this
        the service does not limit upto the Kathmandu valley but it can also be ridden accorss the cities (depending
        upon the car's engine)
      </p>
    </div>
  </div>
  <div class="row pl-4 pr-4 mt-3 pt-5 pb-5">
    <div class="col-sm-6">
      <h4>Know from customers</h4>

      <p class="paragraph">
        In retrospect, we have had 100s of customers who seemed to have a really good time along their families, friends
        and acquintances. In this situation we are striving to get the best for the customers. This approach is getting
        us nearer to the
        customer satifaction more and more. To all our loyal and potential customers we promise to bring you more and
        more of
        features and facilities.
      </p>
    </div>
    <div class="col-sm-6">
      <iframe class="mt-4" width="560" height="315" src="https://www.youtube.com/embed/bzmFBeOLrDg" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="row pl-4 pr-4 mt-3 pt-5 pb-4">

    <div class="col-sm-6"><img class="image-box " src="{{asset('/images/carousel/car1.jpeg')}}" alt="" srcset="" />
    </div>
    <div class="col-sm-6">
      <h4>Who are we?</h4>

      <p class="paragraph">
        Being a student of Information Technology (IT), we both had varieties of ideas with us. As a college project it
        would not have been
        possible for us to design and develop every ideas. However, the one idea that really stood out was
        <i>"Sharewheel"</i>.
        Sharewheel is simply
        a car rental service in Nepal where you can rent a car of your choice with minimal charges. You have the
        facility to choose a driver along as well. The facility does not limit upto Kathmandu city but you can travel
        accross the city.
      </p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-6">
      <div class="card card-cascade">

        <!-- Card image -->
        <div class="view view-cascade single-img-gallery ">
          <a href="{{ asset('/images/admin/admin@ajay.jpg') }}" target="_blank">
            <img class="card-img-top admin-image img-fluid" src="{{ asset('/images/admin/admin@ajay.jpg') }}"
              alt="Card image cap">
          </a>
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

          <!-- Title -->
          <h4 class="card-title"><strong>Ajay Kr. Mahato</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2 green-icon"><i class="fa fa-globe"></i> Web developer</h6>
          <!-- Text -->
          <p class="card-text">Currently studying bachelors in Computer Information System (BCIS) at Nobel College and
            working at Tech@rt Trekkies as an assistant developer.
          </p>

          <!-- Facebook -->
          <a href="https://www.facebook.com/izoroicajay" class="Facebook" type="button" target="_blank"><i
              title="Facebook" class="mr-3 ml-3 fab fa-facebook-f"></i></a>
          <!-- Twitter -->
          <a href="https://twitter.com/phenomenolajay" class="Twitter" type="button" target="_blank"><i title="Twitter"
              class="mr-3 fab fa-twitter"></i></a>
          <!-- Instagram -->
          <a href="https://www.instagram.com/izoroic_ajay/" class="Instagram" type="button" target="_blank"><i
              title="Instagram" class="mr-3 fab fa-instagram"></i></a>
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/ajay-kumar-mahato-4b3b6a214/" class="LinkedIn" type="button"
            target="_blank"><i title="Instagram" class="mr-3 fab fa-linkedin"></i></a>

        </div>

      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-cascade">

        <!-- Card image -->
        <div class="view view-cascade single-img-gallery">
          <a href="{{ asset('/images/admin/admin@priansu.jpeg') }}" target="_blank">
            <img class="card-img-top admin-image img-fluid" src="{{ asset('/images/admin/admin@priansu.jpeg') }}"
              alt="Card image cap">
          </a>
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Title -->
          <h4 class="card-title"><strong>Priansu Koirala</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2 green-icon"><i class="fa fa-globe"></i> Web developer</h6>
          <!-- Text -->
          <p class="card-text">Currently studying bachelors in Computer Information System (BCIS) at Nobel College and
            working at Tech@rt Trekkies as an assistant developer.
          </p>

          <!-- Facebook -->
          <a href="https://www.facebook.com/priansu.koirala" class="Facebook" type="button" target="_blank"><i
              class="ml-3 mr-3 fab fa-facebook-f" title="Facebook"></i></a>
          <!-- Twitter -->
          <a href="https://twitter.com/PriansuKoirala" class="Twitter" type="button" target="_blank"><i
              class="mr-3 fab fa-twitter" title="Twitter"></i></a>
          <!-- Instagram -->
          <a href="https://www.instagram.com/priansukoirala/" class="Instagram" type="button" target="_blank"><i
              class="mr-3 fab fa-instagram" title="Instagram"></i></a>
          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/priansu-koirala-558204200/" class="LinkedIn" type="button"
            target="_blank"><i title="Instagram" class="mr-3 fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection