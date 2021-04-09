<!DOCTYPE html>
@extends('masterpage')
<title>admin page</title>
<link rel="stylesheet" href="css/admin-style.css">
@section('first')
<center><h2>Welcome Admin..</h2></center>

<div id="accordion" role="tablist">
  <div class="card col-md-6">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0 text-center">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Insert Events Here
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
      <form action="adminevent" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="">Event title</label>
        <input type="text" name="event_tilte"> <br>
        <label for="">Event image:</label>
        <input type="file" name="event_img"> <br>
        <label for="">Event Body</label>
        <input type="text" name="event_body"> <br>
        <label for="">Event location</label>
        <input type="text" name="event_location"> <br>
        <label for="">Event fees</label>
        <input type="text" name="event_fees"> <br>
        <label for="">Event requirments</label>
        <input type="text" name="event_req"> <br>
        <input type="submit" value="submit"> <br>
       </form>
        @if ($errors->any())    
        <div class="alert alert-danger"><ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul></div>
        @endif    
        </div>
    </div>
</div>
@endsection

@section('second')
<div id="accordion" role="tablist">
  <div class="card col-md-6 mt-4">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Insert Posts here 
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
      <form action="adminposts" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="">Post title</label>
        <input type="text" name="Post_tilte"> <br><br>
        <label for="">Post Body</label>
        <textarea name="Post_body" placeholder="Enter text here" class="w-50"></textarea><br><br>
        <label for="">Post image:</label>
        <input type="file" name="Post_img"> <br>
        <label for="">Post category</label>
        <input type="text" name="Post_category"> <br>
        <label for="">Post tag</label>
        <input type="text" name="Post_tag"> <br>
        <input type="submit" value="submit"> <br>
    </form>
    @if ($errors->any())    
    <div class="alert alert-danger"><ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul></div>
   @endif      </div>
  </div>
</div>
@endsection


@section('third')
<div id="accordion" role="tablist">
  <div class="card col-md-6 mt-4">
        <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Insert Board Here
            </a>
        </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
        <div class="card-body">
        <form action="adminboard" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="">Name :</label>
            <input type="text" name="name"> <br><br>
            <label for="">Position :</label>
            <input type="text" name="position"> <br><br>
            <label for="">image:</label>
            <input type="file" name="img"> <br>
            <input type="submit" value="submit"> <br>
            </form>
            @if ($errors->any())    
            <div class="alert alert-danger"><ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul></div>
            @endif        </div>
    </div>
</div>
@endsection

@section('fourth')
<div id="accordion" role="tablist">
  <div class="card col-md-6 mt-4">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Insert Strategies Here::
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
      <form action="adminstrategy" method="post">
            {{csrf_field()}}
            <label for="">Strategy :</label>
            <input type="text" name="body"> <br><br>
            <input type="submit" value="submit"> <br>
            </form>
            @if ($errors->any())    
            <div class="alert alert-danger"><ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul></div>
        @endif
     </div>
    </div>
  </div>

@endsection

@section('fifth')
<div id="accordion" role="tablist">
  <div class="card col-md-6 mt-4">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Insert Polices Here
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
      <form action="adminpolicy" method="post">
       {{csrf_field()}}
        <label for="">policy Tilte:</label>
        <input type="text" name="title"> <br><br>
        <label for="">policy Body :</label>
        <textarea name="body" placeholder="Enter text here" class="w-50"></textarea><br><br>
        <input type="submit" value="submit"> <br>
    </form>
    @if ($errors->any())    
    <div class="alert alert-danger"><ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul></div>
   @endif      </div>
    </div>
  </div>
    




@endsection 

@section('sixth')
<div id="accordion" role="tablist">
  <div class="card col-md-6 mt-4">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Insert Courses Here
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
      <form action="admincourses" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
        <label for="">course Tilte:</label>
        <input type="text" name="title"> <br>
        <label for="">course duration :</label>
        <input type="text" name="duration"> <br>
        <label for="">course image :</label>
        <input type="file" name="img"> <br>
        <input type="submit" value="submit"> <br>
    </form>
    @if ($errors->any())    
    <div class="alert alert-danger"><ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul></div>
   @endif      </div>
    </div>
  </div>
    




@endsection 
</body>
</html>