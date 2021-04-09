<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about-style.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
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
                            <li class="nav-item"><a href="project" class="nav-link">Projects</a></li>

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
 <aside>

        <div class="container-fluid" id="aside">
            <div class="tab">
                <button class="tablinks" onclick="opentab(event, 'University President')">University President</button>
                <button class="tablinks" onclick="opentab(event, 'MissionVision')">Mission & Vision</button>
                <button class="tablinks" onclick="opentab(event, 'Board')">Board</button>
                <button class="tablinks" onclick="opentab(event, 'Polices')">Polices</button>
                <button class="tablinks" onclick="opentab(event, 'Strategy')">Strategy</button>
                <button class="tablinks" onclick="opentab(event, 'History')">History</button>
            </div>
        </div>
        <div id="University President" class="tabcontent">
            <div class="conainer">
              <div class="row">
                       <div class="card border-0" id="first">
                           <h2 class="mt-2 fw-normal display-4">A Meeting of Minds</h2>
                           <hr>
                           <p class="card-text">
                                The original board of trustees laid the groundwork for what would become today’s Cedar High University 
                                on July 9, 1876, when the group gathered to hold the University’s inaugural board meeting and drafted the
                                University’s articles of incorporation. This guiding document outlined elements the founders believed would 
                                build an enduring legacy for the University: a commitment to offering a rigorous academic program and an ambition to 
                                provide “opportunities for all departments of higher education to persons of both sexes on equal terms.” On September 10, 1876, the State of
                                California issued the University’s official certificate of incorporation, marking the formal beginning of 
                                the University’s life. An initial pledge of $600,000 (roughly $16 million in today’s currency) from oil magnate Cedar High,
                                along with contributions by the American Baptist Education Society, helped to found the University. 
                                The University’s land was donated by Marshall Field, owner of the historic Chicago department store that bore his name.
                                Christopher Smith, the University’s first president, envisioned a university that was “‘bran splinter new,’ yet as solid as the ancient hills”
                                —a modern research university, combining an English-style undergraduate college and a German-style graduate research institute. The Cedar High University fulfilled Christopher’s dream, quickly becoming a national leader in higher education and research: an institution of scholars unafraid to cross boundaries, share ideas, and ask difficult questions.
                           </p>
                       </div>
                       <div class="card border-0 mt-5" id="president">
                           <img src="img/president.jpg" alt="president" class=" card-img" id="president-img">
                           <h4 class="mt-3">Christopher Smith</h4>
                           <h6>First president of the Cedar High University, served from 1876 to 1897.</h6>
                       </div>
                  <div class="card border-0 mt-5">
                    <h2 class="mt-2 fw-normal display-4">A Singular Focus</h2>
                    <hr>
                    <p class="card-text">
                        President Smith articulated his hope and vision for the JCU at the first faculty meeting in 1888: 
                        “The question before us is how to become one in spirit, not necessarily in opinion.”
                        The University’s commitment to answering that question—and many others—continues to guide it today.
                        As President Smith said in his inaugural address, “If we take ourselves back to the University in its early years,
                        we would find many major differences from what we observe today. . . . And yet, many of us connected to the University 
                        feel that we might just as easily have been there—that going back to the University in its early days,
                        or in fact at any time since its inception, we would know unmistakably that we were at the University of Chicago.
                        “Why is this? The Cedar High University, from its very inception, has been driven by a singular focus on inquiry—with a firm belief in the value of open, rigorous, and intense inquiry and a common understanding that this must be the defining feature of this university. Everything about the Cedar High University that we recognize as distinctive flows from this commitment.”

                    </p>
                  </div>
              </div>
            </div>
        </div>

        <div id="MissionVision" class="tabcontent">
            <div class="conainer">
              <div class="row">
                       <div class="card border-0" id="first">
                           <h2 class="mt-2 fw-normal display-4">Vission - Mission - Objectives</h2>
                           <hr>
                           <p class="card-text">
                               <h4>Vision</h4>
                               Sherry University's vision is to have a global competitive advantage
                                in managing an innovative system of education, research, 
                                knowledge and community service
                           </p>
                           <p class="card-text">
                            <h4>Mission</h4>
                            Sherry University is an educational, research and service institution
                             that adopts innovation and qualifies, academically and skillfully,
                              a graduate capable of competing in the labor market and community
                               service in accordance with international developments.
                           </p>
                           <p class="card-text">
                            <h4>Objectives</h4>
                            Mobilizing university human and material resources for the service of the
                             society and the development of the environment by presenting university 
                             services to individuals and institutes through offering training courses
                            and technical and cultural consultancy as well as conducting applied research.
                            Offering training courses in the fields of management, tourism, and diplomacy.
                            Offering courses in the Arabic language for non-native speakers to foreign
                            bodies. Offering customized courses to cater for the needs of the society.
                            Increasing cultural awareness among university students, personnel and citizens.
                            Presenting public services to the Egyptian community in all fields.
                            Qualifying cadres from different institutes and ministries within various work fields.
                            Offering social guidance to individuals and groups Presenting customized programs for
                             different ministries and institutes. Offering guidance to various categories
                             (e.g. students and workers) to help them overcome the obstacles that face them,
                             develop positive attitudes, and foster their sense of belonging through the Unit
                             of Social Development.
                           </p>
                       </div>
                </div>
            </div>
        </div>

         <div id="Board" class="tabcontent">
            <div class="conainer">
                <div class="row">
                    <div class="card border-0" id="first">
                        <h2 class="mt-2 fw-normal display-4">Board</h2>
                        <hr>
                    
                            <span class="offset-md-2 offset-sm-0" id="president">
                                <br>
                                <center> <img src="img/president1.png" alt=""></center>

                            <h5 class="text-center pt-3">Mahmoud Ahmed Shawky Elmateeni</h5>
                            <h6 class="text-center">President of Sherry University</h6>
                             </span>
                
                    
                    </div>
                    @foreach($boardrow as $x)
                    <div class="card border-0 mt-5 col-lg-6">
    
                            <span class="offset-md-2 offset-sm-0" id="president">
                                <br>
                                <center> <img src="boardsimg/{{$x->img}}" alt=""></center>

                            <h5 class="text-center pt-3">{{$x->name}}</h5>
                            <h6 class="text-center">{{$x->position}}</h6>
                             </span>
                    </div>
                    @endforeach
                </div>
             </div>
        </div>

        <div id="Polices" class="tabcontent">
            <div class="conainer">
                <div class="row">
                         <div class="card border-0" id="first">
                             <h2 class="mt-2 fw-normal display-4">Polices</h2>
                             <hr>
                             @foreach($row as $y)
                            <p class="card-text">
                                <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{$y->title}}</h4>
                                {{$y->body}}
                             </p>
                             @endforeach
                        </div>
                </div>
             </div>
        </div>

       

        <div id="History" class="tabcontent">
            <div class="conainer">
                <div class="row">
                         <div class="card border-0" id="first">
                            <h2 class="mt-2 fw-normal display-4">History</h2>
                            <hr>
                            <h3 class="text-center">WELCOME TO SHERRY'S UNI</h3>
                            <br>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Iusto deleniti cum vitae aliquam, maiores mollitia minima omnis?
                                 Facilis omnis dolorem soluta nam, officiis molestias totam doloribus tenetur
                                praesentium distinctio dignissimos.
                            </p>
                            <img src="img/uni-versity.jpg" class="card-img" alt="">
                        </div>
                        <div class="card-group d-sm-block d-md-inline-flex">
                          
                            <div id="spinner" class="card">
                                <div class="spinner-grow text-warning w-50 ms-4" role="status" >
                                    <h3 class="text-dark text-center">2000</h3>
                                 </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto, incidunt aut molestiae ipsa laboriosam, nesciunt
                                    dolores nostrum natus corporis aspernatur sed dolore voluptatibus
                                    optio aliquam? Beatae obcaecati aspernatur consequuntur aperiam?
                                </p>
                            </div>
                            <div class="card mt-md-5 mt-sm-0" id="spinner">
                                <div class="spinner-grow text-primary w-50" role="status" >
                                    <h3 class="text-dark text-center">2005</h3>
                                 </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto, incidunt aut molestiae ipsa laboriosam, nesciunt
                                    dolores nostrum natus corporis aspernatur sed dolore voluptatibus
                                    optio aliquam? Beatae obcaecati aspernatur consequuntur aperiam?
                                </p>
                            </div>
                        </div>
                        <div class="card-group d-sm-block d-md-inline-flex">
                          
                            <div id="spinner" class="card">
                                <div class="spinner-grow text-warning w-50 ms-4" role="status" >
                                    <h3 class="text-dark text-center">2010</h3>
                                 </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto, incidunt aut molestiae ipsa laboriosam, nesciunt
                                    dolores nostrum natus corporis aspernatur sed dolore voluptatibus
                                    optio aliquam? Beatae obcaecati aspernatur consequuntur aperiam?
                                </p>
                            </div>
                            <div class="card mt-md-5 mt-sm-0" id="spinner">
                                <div class="spinner-grow text-primary w-50" role="status" >
                                    <h3 class="text-dark text-center">2015</h3>
                                 </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto, incidunt aut molestiae ipsa laboriosam, nesciunt
                                    dolores nostrum natus corporis aspernatur sed dolore voluptatibus
                                    optio aliquam? Beatae obcaecati aspernatur consequuntur aperiam?
                                </p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
 </aside>






    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>