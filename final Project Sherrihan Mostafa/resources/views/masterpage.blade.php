<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master page</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
</head>
<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </div> 
    <!-- ***********************  Login Modal   ********************************************************************** -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 justify-content-end" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                <div class="modal-body offset-1">
                
                        <label for="" name="username" class="px-3" required>Username</label> <br>
                        <input type="text" class="w-75 mt-2"> <br>
                        <label for="" name="password" class="px-3">Password</label> <br>
                        <input type="password" class="w-75 mt-2"> <br>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Remember Me
                            </label>
                          </div> <!-- end form check -->
                          <button class="mt-4 ms-4">LOG IN </button>
                </div>  <!-- end modal body -->
            </div>  <!-- end modal content -->
        </div>  <!-- end modal dialog -->
    </div> <!-- end modal -->          
<!-- *********************** end  Login Modal   ********************************************************************** -->
<!-- ***********************  search Modal   ********************************************************************** -->
    <div class="modal fade" id="searchmodal">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-header border-0 justify-content-end" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></div>
                <div class="modal-body justify-content-center">
                <input type="text" placeholder="search .." class="">
                        
                </div>  <!-- end modal body -->
            </div>  <!-- end modal content -->
        </div>  <!-- end modal dialog -->
    </div> <!-- end modal -->          
<!-- *********************** end  search Modal   ********************************************************************** -->
    <header>
        <!-- <div class="container-fluid" id="infobar">
            <div class="row">
                <div class="justify-content-md-center">
                    <ul class="list-unstyled d-md-inline-flex">
                        <li class="text-light"><i class="fa fa-phone" aria-hidden="true"></i> (1234567)</li>
                        <li class="text-light"><i class="fas fa-envelope" aria-hidden="true"> university.com</i></li>
                        <li class="text-light"><i class="fa fa-map-marker" aria-hidden="true"></i> 24/7 Emergency Service</li>
                    </ul>
                    <li class="float-md-end text-light list-unstyled"><a href="" data-toggle="modal" data-target="#modal"><i class="fas fa-sign-in-alt" aria-hidden="true"></i> Login</a></li>
                </div>    
            </div>  
        </div>   -->
        <!-- end container infobar -->  
       
    
        <div class="container" id="navbar">
            <div class="row">
                <nav class="navbar navbar-expand-md justify-content-md-between">
                  <div class="navbar-brand d-md-inline-flex">
                      <img src="img/uni-logo.png" alt="logo" class="col-md-4"> 
                      <div id="brandname">
                        <h5 class="mt-0 clear">SHERRY<em>UNI</em></h5>
                        <p class="">NO ONE LIKE YOU <br>NO PLACE LIKE US</p>
                       </div>   <!-- end brandname -->
                  </div>  <!-- end navbar-brand -->
                    <button class="navbar-toggler float-end" type="button" data-toggle="collapse" data-target="#navbarlist" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>        
                    <div class="collapse navbar-collapse justify-content-xxl-end" id="navbarlist">
                        <ul class="nav navbar-nav">
                            <li class="nav-item "><a href="sitehome" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="projects" class="nav-link">Projects</a></li>

                            <!-- <li class="nav-item dropdown">
                                <a href="services" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">Global Education</li>
                                    <li class="dropdown-item">Online Learning</li>
                                    <li class="dropdown-item">Programs</li>
                                    <li class="dropdown-item">Summer Sessions</li>
                                    <li class="dropdown-item">Ungraduate Study</li>
                                    <li class="dropdown-item">Professional Study</li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
                                <a href="project" class="nav-link dropdown-toggle" data-toggle="dropdown">Project</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">International Conference on Biomolecular Engineering</li>
                                    <li class="dropdown-item">History of Art</li>
                                    <li class="dropdown-item">NASA Schedules</li>
                                    <li class="dropdown-item">Spacewalking Conference</li>
                                    <li class="dropdown-item">Graphic Design Workshop</li>
                                </ul>
                            </li> -->
                            <li class="nav-item "><a href="blog" class="nav-link">Blog</a></li>
                            <li class="nav-item "><a href="contact" class="nav-link">Contacts</a></li>



                        </ul>
                    </div>   <!-- end navbarlist -->
                    <i class="fa fa-search" id="searchicon"data-toggle="modal" data-target="#searchmodal" aria-hidden="true"></i>

                </nav>
            </div> <!-- end row navbar -->   
        </div> <!-- end container navbar -->   
        
    </header>

    
    @yield('first')
    @yield('second')
    @yield('third')
    @yield('fourth')
    @yield('fifth')
    @yield('sixth')
    @yield('seventh')
    @yield('eighth')
    @yield('about1')
    <footer>
        <div class="container" id="footercontact">
            <div class="row">
                <div class="d-md-inline-flex d-sm-block">

               
                <div class="card col-md-5 col-sm-10 col-lg-3 border-0">
                    <img src="img/uni-logo.png" alt="" class="img-fluid w-100">
                    <h5 class="text-center">SHERRY<em>UNI</em></h5>
                </div> 
                <div class="d-md-inline-block d-lg-inline-flex mt-5 col-md-7 col-lg-5">
                    <div class="card col-sm-10">
                        <h4>Contact Us</h4>
                        <h6 class="mt-2"><i class="fa fa-phone" aria-hidden="true"></i> 1-800-1234-567, 1-800-6547-321</h6>
                        <h6><i class="fa fa-map-marker" aria-hidden="true"></i> university</h6>
                        <h6><i class="fa fa-envelope" aria-hidden="true"></i>   info@sherryuni.org</h6>
                    </div>
                    <div class="card col-sm-10">
                        <h4>Subscribe</h4>
                        <form class="form-inline mt-2">
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2 mt-2" id="inlineFormInputName2" placeholder="Jane Doe">
                          
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <div class="input-group mb-2 mr-sm-2 mt-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                              </div>
                              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            </div>
                          
                            <div class="form-check mb-2 mr-sm-2">
                              <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                              <label class="form-check-label" for="inlineFormCheck">
                                Remember me
                              </label>
                            </div>
                            <button type="submit" class="mt-md-5 mt-sm-2">Submit</button>
                          </form>
                    </div>
                </div> 
            </div>  
            </div>
        </div>
        <br><br><br><br><br>
        <div class="container-fluid" id="copyright">
            <div class="row">
                <ul class="list-unstyled list-inline-item justify-content-around">
                    <li class="list-inline-item mt-md-4 ms-md-5"><h6 class="text-center text-white">Sherrihan © . All rights reserved.</h6></li>
                    <li class="list-inline-item mt-md-2 mt-sm-0 fixed-bottom"><a class="nav-link float-end"  href="sitehome">
                        <i class="fa fa-chevron-up text-white text-center pt-2" aria-hidden="true" id="arrow"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>





    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
