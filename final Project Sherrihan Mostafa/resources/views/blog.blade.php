@extends('masterpage')
<title>Blog page</title>
<link rel="stylesheet" href="css/blog-style.css">
@section('first')
<!DOCTYPE html>
<body>
 
    <content>
        <div class="container">
            <div class="row">
                <div class="card-group flex-column col-lg-9 col-md-9 col-sm-12" id="posts">
                    <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                       <h3 class="card-title">Liberal Arts Colleges Rankings</h3>
                       <h6 class="mt-2"> By <em>admin</em> In <em>Academic</em>     Posted April 24, 2017</h6>
                       <img src="img/news6.jpg" class="img-fluid mt-4" alt="">
                       <p class="card-body mt-4">
                        Liberal Arts Colleges emphasize undergraduate education and award at least
                        half of their degrees in the liberal arts fields of study.</p>
                        <h6 class="card-text px-3">Tags: <em>Design</em></h6>
                    </div>
                    <hr class="offset-1 mt-5">
                    
                    <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                        <h3 class="card-title">10 Law Schools Where the Most Accepted Students Enroll</h3>
                        <h6 class="mt-2"> By <em>admin</em> In <em>Campus</em>     Posted March 13, 2017</h6>
                        <img src="img/news1.jpg" class="img-fluid mt-4" alt="">
                        <p class="card-body mt-4">
                            At these schools, at least 42 percent of accepted students 
                            enrolled in fall 2015, U.S. News data show.</p>
                         <h6 class="card-text px-3">Tags: <em>Departments, Session</em></h6>
                     </div>
                     <hr class="offset-1 mt-5">

                     <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                        <h3 class="card-title">Consider MBA Programs That Offer Summer Prep</h3>
                        <h6 class="mt-2"> By <em>admin</em> In <em>Campus, Education</em>     Posted April 24, 2017</h6>
                        <img src="img/news2.jpg" class="img-fluid mt-4" alt="">
                        <p class="card-body mt-4">
                            Summer preparatory programs offered through schools allow students to get a head start on
                             making connections and building skills.</p>
                         <h6 class="card-text px-3">Tags: <em> Industrial</em></h6>
                     </div>
                     <hr class="offset-1 mt-5">

                     <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                        <h3 class="card-title">Ways Parents and Counselors Can Help Students Earn Scholarships</h3>
                        <h6 class="mt-2"> By <em>admin</em> In <em>Education</em>     Posted April 24, 2017</h6>
                        <img src="img/news3.jpg" class="img-fluid mt-4" alt="">
                        <p class="card-body mt-4">
                            Securing scholarships can be stressful, but parents and counselors can serve as a resource.</p>
                         <h6 class="card-text px-3">Tags: <em>Departmens, Session</em></h6>
                     </div>
                     <hr class="offset-1 mt-5">

                     <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                        <h3 class="card-title">5 Ways to Pay for Community College</h3>
                        <h6 class="mt-2"> By <em>admin</em> In <em>Online Learningn</em>     Posted April 24, 2017</h6>
                        <img src="img/news4.jpg" class="img-fluid mt-4" alt="">
                        <p class="card-body mt-4">
                            Many community colleges offer promise programs, which offer tuition-free 
                            awards to eligible students – mainly to students with Pell grant eligibility.</p>
                         <h6 class="card-text px-3">Tags: <em>Departmens, Session</em></h6>
                     </div>
                     <hr class="offset-1 mt-5">

                     <div class="card offset-1 mt-5 col-lg-7 col-md-7 col-sm-12">
                        <h3 class="card-title">Studying in the United States</h3>
                        <h6 class="mt-2"> By <em>admin</em> In <em>Campus</em>     Posted April 24, 2017</h6>
                        <img src="img/news5.jpg" class="img-fluid mt-4" alt="">
                        <p class="card-body mt-4">
                            International students increasingly want to come to the United States
                             for college or graduate school.</p>
                         <h6 class="card-text px-3">Tags: <em>Departmens, Session</em></h6>
                     </div>
                     <hr class="offset-1 mt-5">
                </div>

                <div class="card-group flex-column col-lg-3 col-md-3 col-sm-12" id="aside">
                    <div class="row">
                        <div class="card mt-5 d-flex flex-row">
                            <input class="form-control" type="text" placeholder="Enter Keyword Search">
                            <div class="text-cente offset-1" id="search"><i class="fa fa-search text-light p-2" aria-hidden="true"></i></div>
                        </div>
                        <div class="card">
                            <hr class="w-100 mt-5">
                            <h4 class="card-title fw-bold">Recent Posts</h4>
                            <a href="">Liberal Arts Colleges Rankings</a>
                            <a href="">10 Law Schools Where the Most Accepted Students Enroll</a>
                            <a href="">Consider MBA Programs That Offer Summer Prep</a>
                            <a href="">Ways Parents and Counselors Can Help Students Earn Scholarships</a>
                            <a href="">5 Ways to Pay for Community College</a>
                        </div>

            


                        <div class="card">
                            <hr class="w-100 mt-5">
                            <h4 class="card-title fw-bold">Categories</h4>
                            <a href="">Academic</a>
                            <a href="">Campus</a>
                            <a href="">Education</a>
                            <a href="">Online Learning</a>
                            <a href="">Study</a>

                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <content>
        <body>

@endsection