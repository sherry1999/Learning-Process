@extends('masterpage')
<title>home page</title>
@section('first')
<div class="container-fluid" id="#slider">
            <div class="row">
                <div class="carousel slide" id="slider" data-ride="carousel">
                  <ul class="carousel-indicators justify-content-start">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1" ></li>
                    <li data-target="#slider"data-slide-to="2"></li>
                  </ul>

                  <div class="carousel-inner">
                       <div class="carousel-item active">
                           <img class="" src="img/slide1.jpg"  alt="First slide">
                           <div class="carousel-caption col-6">
                                <p class="display-4 fw-bold offset-1">Inspiration and Inovation</p>
                                <p class="offset-1">Any successful career starts with good education.
                                    Together with us you will have deeper knowledge of the subjects that will be specially useful for you when climbing yoir career ladder</p>
                                <div class="d-md-inline-flex d-sm-block float-start">                         
                                   <button type="button" id="firstbtn" class="ms-5"><a href="contact">Sign Up For Excursion</a></button>
                                    <button type="button" class="btn btn-outline-light ms-5 ms-mt-5"id="secondbtn"><a href="about">Learn More</a></button>
                                </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                           <img class="" src="img/slidebar2.jpg"  alt="second slide">
                           <div class="carousel-caption col-6">
                            <p class="display-4 fw-bold offset-1">Investing In Knowledge</p>
                            <p class="offset-1">Any successful career starts with good education.
                                Together with us you will have deeper knowledge of the subjects that will be specially useful for you when climbing yoir career ladder</p>
                            <div class="d-md-inline-flex d-sm-block float-start">                         
                                <button type="button" id="firstbtn" class="ms-5"><a href="contact">Sign Up For Excursion</a></button>
                                    <button type="button" class="btn btn-outline-light ms-5 ms-mt-5"id="secondbtn"><a href="about">Learn More</a></button>
                            </div>
                      </div>
                       </div>
                       <div class="carousel-item">
                           <img class="" src="img/slide-3.jpg"  alt="third slide">
                           <div class="carousel-caption col-6">
                            <p class="display-4 fw-bold offset-1">Open Minds . <br>Creating Future.</p>
                            <p class="offset-1">Any successful career starts with good education.
                                Together with us you will have deeper knowledge of the subjects that will be specially useful for you when climbing yoir career ladder</p>
                           
                            <div class="d-md-inline-flex d-sm-block float-start">                         
                                    <button type="button" id="firstbtn" class="ms-5"><a href="contact">Sign Up For Excursion</a></button>
                                     <button type="button" class="btn btn-outline-light ms-5 ms-mt-5"id="secondbtn"><a href="about">Learn More</a></button>
                            </div>
                            </div>
                            </div>
                  </div>
                  <a class="carousel-control-prev" href="#slider" data-slide="prev">
                   <span class="carousel-control-prev-icon"></span>
                 </a>
                 <a class="carousel-control-next" href="#slider" data-slide="next">
                   <span class="carousel-control-next-icon"></span>
                 </a>                 
               </div>
            </div>
</div>
@endsection

@section('second')
<div class="container" id="info">
          <div class="row">
              <div class="card col-md-6 col-sm-12 mt-5">
                <div class="card-title mt-5" id="uniwords">
                    <h1 class="fw-bold">A Few Words</h1>
                    <h1 class="fw-bold">About the University</h1>
                    <hr>
                </div>
                <div class="card-title">
                  <p>
                    One of the world’s premier academic and research institutions, the Cedar High University has 
                    driven new ways of thinking since our 1876 founding. Today, JCU is an intellectual destination that draws
                     inspired scholars to our Hyde Park and international campuses,
                     keeping JCU at the nexus of ideas that challenge and change the world.
                  </p>
                  <button class="mt-4" id="learnmore"><a href="about">Learn More</a> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="card col-md-6 col-sm-12 mt-5">
                <img src="img/uni-logo.png" alt="" class="img-fluid w-100">
             </div>
          </div>
        </div>


@endsection

@section('third')
<div class="container-fluid" id="courses">
            <div class="row">
                <div class="card col-md-6 col-sm-12 mt-5 img-card">
                    <img src="img/courses.jpg" alt="" class="img-fluid w-100 h-100">
                </div>
                <div class="card col-md-6 col-sm-12 mt-5" id="features">
                    <div class="card-title offset-2 mt-5">
                        <h1 class="fw-bold">Our Featured Courses</h1>
                        <hr>
                    </div>
                    <div class="card-title offset-2 mt-4">
                        <p>
                            Our Featured Courses are selected through a rigorous process and uniquely
                             created for <br> each semester.</p>
                    </div>
                    <div class="course d-md-inline-flex d-sm-block mt-4">
                        <img src="img/correct-21.jpg" alt="" class="img-fluid col-md-3 col-sm-12">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mediem">FULL STACK COURSE</h4>
                            <h5 class="small">Charls Bank</h5>
                            <h6 class="small">June 3,2016</h6>
                           </span>
                    </div>
                    <div class="course d-md-inline-flex d-sm-block mt-4">
                        <img src="img/correct-22.jpg" alt="" class="img-fluid col-md-3 col-sm-12">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mediem">Digital Marketing Course</h4>
                            <h5 class="small">Maria Howard</h5>
                            <h6 class="small">June 3,2016</h6>
                           </span>
                    </div>
                    <div class="course d-md-inline-flex d-sm-block mt-4">
                        <img src="img/correct-23.jpg" alt="" class="img-fluid col-md-3 col-sm-12">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mediem">Graphic Design Course</h4>
                            <h5 class="small">Steven Carter</h5>
                            <h6 class="small">June 3,2016</h6>
                           </span>
                    </div>
                    <button class="btn mt-5 ms-sm-5 ms-md-0"><a href="services">View All Courses</a></button>
                    <span id="space"></span>
                 </div>
            </div>   
        </div>
@endsection

@section('fourth')
<div class="container" id="counters">
            <div class="row">
                <center>
                    <h2 class="fw-bold display-3 mt-5">Counters</h2>
                    <hr>
                    <p class="align-self-center">
                        Cedar High University was founded on the principle that by pursuing big ideas and sharing 
                        what we learn,we make the world a better place. 
                        For more than 135 years, we haven’t strayed from that vision
                    </p>
                </center>
            </div>
            <div class="row">
                <div class="card col-md-3 col-sm-12 border-0">
                    <div class="card-header bg-transparent border-0">
                        <i class="fa fa-graduation-cap text-center pt-3" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="px-4">97%</h3>
                        <hr class="ms-3">
                        <h4>Gradutaes</h4>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-12 border-0">
                    <div class="card-header bg-transparent border-0">
                        <i class="fa fa-briefcase px-4 pt-3" aria-hidden="true"></i> 
                    </div>
                    <div class="card-body">
                        <h3 class="px-4">30+</h3>
                        <hr class="ms-3">
                        <h4>Certified Teachers</h4>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-12 border-0">
                    <div class="card-header bg-transparent border-0">
                        <i class="fa fa-fax px-4 pt-3" aria-hidden="true"></i>   
                    </div>
                    <div class="card-body">
                        <h3 class="px-5">8</h3>
                        <hr class="ms-3">
                        <h4>Student Campuses</h4>
                    </div>
                </div>
                <div class="card col-md-3 col-sm-12 border-0">
                    <div class="card-header bg-transparent border-0">
                        <i class="fa fa-users px-3 pt-3" aria-hidden="true"></i>  
                    </div>
                    <div class="card-body">
                        <h3 class="px-4">6510</h3>
                        <hr class="ms-3">
                        <h4>Students</h4>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('fifth')
<div class="contianer" id="video">
    <div class="row">
                <!-- <video class="video-fluid z-depth-1" autoplay loop controls muted>
                    <source src="img/vid.mp4" type="video/mp4" />
                  </video> -->
        <!-- <div class="card">
                   <video src="img/vid.mp4" type=:mp4 autoplay class="mt-0 vid"></video>
                <div class="card-img-overlay text-center">
                      <h1 class="display-4">Trusted by Over 6000+ Students</h1>
                      <h6>Join our community of students around the world helping you succeed.</h6>
                      <button>Get Started</button>
                </div>
        </div> -->
    </div>      
</div> <!-- end container video -->
@endsection

@section('sixth')
<div class="container" id="events">
            <div class="row">
               <center>
                    <h1 class="text-center fw-bold display-3">Events</h1>
                    <hr>
               </center>
               @foreach ($row as $x)
               <div class="card col-lg-3 col-md-6 col-sm-10 mt-4 border-0">
                   <div id="eventimg">
                       <img src="eventsimg/{{$x->event_img}}" alt="event-img" class="card-img">
                   </div>
                   <div class="d-md-inline-flex d-sm-block">
                        <div id="eventdate" class="px-2">
                            <h6>Day: <b>{{ $x->created_at}}</b></h6>
                            <!-- <h6>Mon: <b>{{ $x->created_at}}</b></h6> -->
                            <h6>Time: <b>5:00pm</b></h6>
                        </div>
                        <a href="" class="fa-pull-left px-2">{{$x->event_title}}</a>
                   </div>
                </div>
                @endforeach
                <center>
                    <button class="mt-5"><a href="project">View Event Calender</a> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </center>   
            </div>        <!-- end row events -->
        </div> <!-- end container events -->
@endsection

@section('seventh')
<div class="container" id="latest-news">
            <div class="row justify-content-center">
                <center>
                    <h1 class="text-center mt-5">Latest News</h1> 
                    <hr>
               </center>
               <div class="card col-md-6 col-sm-10 col-lg-4 border-0">
                <div class="card-header bg-transparent border-0">
                    <img src="img/news6 (2).jpg" alt="" class="card-img-top">
                </div>
                <a href="#" class="ms-3">Liberal Arts Colleges Rankings</a>
                     <p class="card-body">
                         Liberal Arts Colleges emphasize undergraduate education and award at least 
                         half of their degrees in the...
                     </p>
                 <div class="card-footer bg-transparent border-0">
                     <h6><i class="fa fa-calendar" aria-hidden="true"></i>  April 24, 2017</h6>
                 </div>
                </div>
                </div>
                <center>
                    <button class="mt-5"><a href="blog">View All New Posts</a> <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </center> 
                </div>
@endsection

@section('eighth')
<div class="container-fluid mt-5" id="maps">
            <div class="row">
                <div class="card border-0">
                    <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65339067.02309514!2d-16.274318392656454!3d1.739277395395996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10a06c0a948cf5d5%3A0x108270c99e90f0b3!2sAfrica!5e0!3m2!1sen!2seg!4v1614009408945!5m2!1sen!2seg" 
                    style="border:0;" allowfullscreen="" loading="lazy"
                    height="500px">
                    </iframe>
                </div>
            </div>  <!-- //end row maps  -->  
        </div> <!-- //end container maps  --> 
@endsection