@extends('masterpage')
<title>contact page</title>
<link rel="stylesheet" href="css/contact-style.css">
<contact>
@section('first')
<div class="container-fluid mt-5" id="maps">
        <div class="row">
            <div class="card border-0">
                <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65339067.02309514!2d-16.274318392656454!3d1.739277395395996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10a06c0a948cf5d5%3A0x108270c99e90f0b3!2sAfrica!5e0!3m2!1sen!2seg!4v1614009408945!5m2!1sen!2seg" 
                style="border:0;" allowfullscreen="" loading="lazy"
                height="500px">
                </iframe>
            </div>
        </div>
    </div>
@endsection
@section('second')
<div class="container-fluid mt-5" id="contact">
        <div class="row justify-content-md-around justify-content-sm-center">
              <div class="card col-md-4 col-sm-12 border-0 bg-transparent">
                  <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                      <i class="fa fa-phone text-center fa-pull-left px-3" aria-hidden="true"></i>
                      <span class="fa-pull-left px-1 mt-2">
                          <h5>Phone:</h5>
                          <h6>(02)123456789</h6>
                      </span>
                  </div>
              </div>
              <div class="card col-md-4 col-sm-12 border-0 bg-transparent">

                <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                   <i class="fa fa-map-marker-alt text-center fa-pull-left px-3" aria-hidden="true"></i>
                      <span class="fa-pull-left px-1 mt-2">
                              <h5>Address:</h5>
                              <h6 class="">Cairo,Egypt</h6>
                      </span>
                 </div>
              </div>
              <div class="card col-md-4 col-sm-12 border-0 bg-transparent">

                  <div class="d-md-inline-flex d-sm-block mt-5" id="contactinfo">
                     <i class="fa fa-envelope-open-text text-center fa-pull-left px-3" aria-hidden="true"></i>
                        <span class="fa-pull-left px-1 mt-2">
                                <h5 class="">Email:</h5>
                                <h6 class="">University.com</h6>
                        </span>
                   </div>
                </div>
          </div>
    </div>

@endsection

@section('third')
<div class="container mt-5" id="form">
        <div class="row">
             <div class="card col-md-6 col-sm-10 mt-5 border-0">
                 <input type="text" placeholder="Your Name" class="mt-2 px-3 text-dark">
                 <input type="text" placeholder="Your Email" class="mt-2 px-3">
                 <input type="text" placeholder="Your Website" class="mt-2 px-3">
                 <input type="integer" placeholder="Your Number" class="mt-2 px-3">
                 <h6 class="mt-3">We will contact you within one business day.</h6>
             </div>
             <div class="card col-md-6 col-sm-10 mt-5 border-0">
                 <textarea name="comment" id="" cols="30" rows="6" class="mt-2 px-3"  placeholder="Your Comment"></textarea>
                 <button class="mt-3">SEND MESSAGE</button>
             </div>

        </div>
    </div>
    <hr class="mt-5">
    


@endsection
</contact>



