@extends('masterpage')
<title>projects page</title>
<link rel="stylesheet" href="css/projects-style.css">
<content>
@section('first')
<div class="container" id="menu">
         <div class="row">
         
             <h1 class="display-3 fw-bold text-center">Our Project</h1>
             <h5 class="mt-5 text-center">We are proud to show you our projects that were made with all our skills and professiona</h5>
             <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-All-tab" data-toggle="pill" href="#pills-All" role="tab" aria-controls="pills-All" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-Departmens-tab" data-toggle="pill" href="#pills-Departmens" role="tab" aria-controls="pills-Departmens" aria-selected="false">Departmens</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-Graduate-tab" data-toggle="pill" href="#pills-Graduate" role="tab" aria-controls="pills-Graduate" aria-selected="false">Graduate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Learning-tab" data-toggle="pill" href="#pills-Learning" role="tab" aria-controls="pills-Learning" aria-selected="false">Learning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-ProfessionalStudy-tab" data-toggle="pill" href="#pills-ProfessionalStudy" role="tab" aria-controls="pills-ProfessionalStudy" aria-selected="false">Professional Study</a>
                </li>

              </ul>
              <br>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-All" role="tabpanel" aria-labelledby="pills-All-tab">
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event2.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">International Conference on Biomolecular Engineering</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event1.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Spacewalking Conference</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event3.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Graphic Design Workshop</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event4.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">History of Art</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/project-9.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">NASA Schedules</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>



                </div>
                <div class="tab-pane fade" id="pills-Departmens" role="tabpanel" aria-labelledby="pills-Departmens-tab">
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event2.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">International Conference on Biomolecular Engineering</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                     <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/project-9.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">NASA Schedules</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Graduate" role="tabpanel" aria-labelledby="pills-Graduate-tab">
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event2.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">International Conference on Biomolecular Engineering</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event4.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">History of Art</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/project-9.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">NASA Schedules</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Learning" role="tabpanel" aria-labelledby="pills-Learning-tab">
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event1.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Spacewalking Conference</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event3.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Graphic Design Workshop</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-ProfessionalStudy" role="tabpanel" aria-labelledby="pills-ProfessionalStudy-tab">
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event1.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Spacewalking Conference</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event3.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">Graphic Design Workshop</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                    <div class="d-md-inline-flex d-sm-block mt-4" id="project">
                        <img src="img/event4.jpg" alt="" class="img-fluid col-md-5 col-sm-10">
                        <span class="fa-pull-left px-3 mt-2 mt-xl-3">
                            <h4 class="mt-0">History of Art</h4>
                            <h5 class="mt-4">A picture paints a thousand words. So if you’re planning on pursuing a career in…</h5>
                            <br> 
                            <button class="text-white fw-bold mt-3">VIEW DETAILS</button>    
                           </span>
                    </div>
                </div>

              </div>
         </div>
</div>
@endsection

@section('second')
<div class="container-fluid mt-5" id="intro">
        <div class="row">
            <center>
                <br>
            <p class="text-center text-white fw-bold mt-5">
                We're aiming to provide our clients with the best service!
            </p>
            <br>
            <button class="offset-4 mt-lg-5 fw-bold mt-md-5"><a href="contact">Contact US</a></button>
        </center>
        </div>
    </div>
@endsection
</content>