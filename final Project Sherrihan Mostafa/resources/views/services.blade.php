@extends('masterpage')
<title>services page</title>
<link rel="stylesheet" href="css/services-style.css">
@section('first')
<div class="container-fluid mt-5" id="intro">
            <div class="row">
                <center>
                    <br>
                <p class="text-center text-white fw-bold mt-5">
                    We're aiming to provide our clients with the best service!
                </p>
                <br>
                <button class="offset-4 mt-lg-5 fw-bold mt-md-5"><a href="about">Read More</a></button>
             </center>
            </div>
</div>
@endsection

@section('second')
<div class="container mt-5" id="services">
            <div class="row">
                <h1 class="text-center fw-bolder display-4">Our Services</h1>
                <h5 class="mt-lg-3 fw-lighter text-center">
                    Every inch in your house can be well-maintained with the help of services we offer. 
                    Forget about any worries and select the service you need.
                </h5>
                <br><br><br>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-1-1.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-graduation-cap mt-4" ria-hidden="true"></i>  
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Undergraduate Study</h6>
                    </div>
                </div>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-2.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-tablet px-5 mt-4" aria-hidden="true"></i>
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Professional Study</h6>
                    </div>
                </div>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-3-1.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-window-restore px-5 mt-4" aria-hidden="true"></i>
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Programs</h6>
                    </div>
                </div>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-4-1.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-globe px-3 mt-4" aria-hidden="true"></i> 
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Global Education</h6>
                    </div>
                </div>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-5.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-sun px-3 mt-4" aria-hidden="true"></i>
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Summer Session</h6>
                    </div>
                </div>
                <div class="card col-md-6 col-sm-12 col-lg-4 mt-5" class="services-img">
                    <img src="img/service-6-1.jpg" alt="" class="card-img"> 
                    <div class="card-img-overlay">
                        <div id="opacity"></div>
                        <br>
                        <h2 class="text-center display-4">
                            <i class="fa fa-users px-2 mt-4" aria-hidden="true"></i>
                        </h2> 
                        <br>
                        <h6 class="card-title fw-bolder text-white text-center ms-5">Online Learning</h6>
                    </div>
                </div>
            </div>
        </div> 
@endsection

@section('third')
<div class="container" id="brands">
            <h1 class="text-center fw-bolder display-4 mt-5">We Work With</h1>
            <div class="row justify-content-center">
                
                <div class="card col-md-2 col-sm-10 border-0 mt-5">
                    <img src="img/brand-22.png" alt="" class="card-img">
                </div>
                <div class="card col-md-2 col-sm-10 border-0 mt-5">
                    <img src="img/brand-33.png" alt="" class="card-img">
                </div>
                <div class="card col-md-2 col-sm-10 border-0 mt-5">
                    <img src="img/brand-44.png" alt="" class="card-img">
                </div>
                <div class="card col-md-2 col-sm-10 border-0 mt-5">
                    <img src="img/brand-11.png" alt="" class="card-img">
                </div>
              
                <div class="card col-md-2 col-sm-10 border-0 mt-5">
                    <img src="img/brand-55.png" alt="" class="card-img h-75">
                </div>
            </div>
</div>
@endsection

@section('fourth')
<div class="container-fluid mt-5" id="contact">
          <div class="row justify-content-md-around justify-content-sm-center">
                <div class="card col-md-4 col-sm-12 border-0 bg-transparent">
                    <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                        <i class="fa fa-phone text-center fa-pull-left px-3" aria-hidden="true"></i>
                        <span class="fa-pull-left px-1 mt-2">
                            <h5 class="text-white">Phone:</h5>
                            <h6 class="text-white">(02)123456789</h6>
                        </span>
                    </div>
                </div>
                <div class="card col-md-4 col-sm-12 border-0 bg-transparent">

                  <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                     <i class="fa fa-map-marker-alt text-center fa-pull-left px-3" aria-hidden="true"></i>
                        <span class="fa-pull-left px-1 mt-2">
                                <h5 class="text-white">Address:</h5>
                                <h6 class="text-white">Cairo,Egypt</h6>
                        </span>
                   </div>
                </div>
                <div class="card col-md-4 col-sm-12 border-0 bg-transparent">

                    <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                       <i class="fa fa-envelope-open-text text-center fa-pull-left px-3" aria-hidden="true"></i>
                          <span class="fa-pull-left px-1 mt-2">
                                  <h5 class="text-white">Email:</h5>
                                  <h6 class="text-white">University.com</h6>
                          </span>
                     </div>
                  </div>
            </div>
        </div>

@endsection