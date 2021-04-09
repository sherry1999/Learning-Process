@extends('layouts.app')
<title>about page</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about-style.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{$id = Auth::id()}} 

<aside>

        <div class="container-fluid" id="aside">
            <div class="tab">
                <button class="tablinks" onclick="opentab(event, 'Dashboard')">Dashboard</button>
                <button class="tablinks" onclick="opentab(event, 'View All Courses')">View All Courses</button>
                <button class="tablinks" onclick="opentab(event, 'View MY Courses')">View My Courses</button>
                <button class="tablinks" onclick="opentab(event, 'Polices')">Polices</button>
                <button class="tablinks" onclick="opentab(event, 'Strategy')">Strategy</button>
                <button class="tablinks" onclick="opentab(event, 'History')">History</button>
            </div>
        </div>
        <div id="View All Courses" class="tabcontent">
            <div class="conainer">
              <div class="row">
                       <div class="card border-0" id="first">
                           <h2 class="mt-2 fw-normal display-4">All Courses</h2>
                           <hr>
                            @foreach($row as $x)
                             <h2>Course title :<em>{{$x->title}}<em></h2><br>
                             <h2>Course Duration :<em>{{$x->duration}}<em></h2><br>
                             <hr>
                            @endforeach

                       </div>
              </div>
            </div>
        </div>

        <div id="View MY Courses" class="tabcontent">
            <div class="conainer">
              <div class="row">
                       <div class="card border-0" id="first">
                           <h2 class="mt-2 fw-normal display-4">Enrolled Courses</h2>
                           <hr>
                           @foreach($courses as $x)
                             <h2>Course title :<em>{{$x->title}}<em></h2><br>
                             <h2>Course Duration :<em>{{$x->duration}}<em></h2><br>
                             <hr>
                            @endforeach
                       </div>
              </div>
            </div>
        </div>

        <div id="Dashboard" class="tabcontent">
            <div class="conainer">
              <div class="row">
                 <div class="card border-0" id="first">
                           <h2 class="mt-2 fw-normal display-4">Dashboard</h2>
                           <hr>
                        <div class="card-header bg-transparent border-0">
                            <form action="writepost" method="post">
                              {{csrf_field()}}
                                <textarea name="body"  cols="30" rows="5" class="w-100"></textarea><br>
                                <input type="submit" value="Share" class="float-end mt-2" id="share">
                            </form> 
                            <br>
                            <span class="card mt-5" id="post">
                                <h4 class="px-3 mt-2">sHERRY mOSTAFA 😍</h4>
                                <p class="px-3">Lorem ipsum dolor sit, 
                                    amet consectetur adipisicing elit. Repellendus 
                                    reiciendis est provident labore omnis aliquid corporis impedit
                                    mollitia voluptatibus vero.
                                </p>
                            </span>
                        </div>
                    </div>
              </div>
            </div>
        </div>  
 </aside>



            
              <!-- <input type="submit" value="View My Courses" name="courses" class="mt-3 w-100"> <br> -->
             <!-- <input type="submit" value="View Participants" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="View Announcements" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="Upload Assignment" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="View Office Hours" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="View My Grades" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="Professor Mails" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="T. A Mails" name="" class="mt-3 w-100"> <br>
             <input type="submit" value="Send Message" name="" class="mt-3 w-100"> <br> -->

        
        

@endsection
<link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>