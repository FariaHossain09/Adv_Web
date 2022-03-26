@extends('layouts.app')
@section ('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action ="{{route('teacherCreate')}}" class="form-group" method="post">
               {{csrf_field()}}


                
                <label for=""> Name</label>
                <input type="text" name="name" value ="{{old('name')}}" class="form-control"> 
                @if($errors ->has('name'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('name')}}</strong>
                </spam>
                @endif
               

                

               
                <label for=""> Phone</label>
                <input type="text" name="phone" value ="{{old('phone')}}" class="form-control"> </input>
                @if($errors ->has('phone'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('phone')}}</strong>
                </spam>
                @endif
               
               
                <label for=""> Password</label>
                <input type="text" name="password" value ="{{old('password')}}" class="form-control"> </input>
                @if($errors ->has('password'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('password')}}</strong>
                </spam>
                @endif
                

                <label for=""> TeacherId</label>
                <input type="text" name="teacherId" value ="{{old('teacherId')}}" class="form-control"> </input>
                @if($errors ->has('teacherId'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('teacherId')}}</strong>
            </spam>
            @endif
           <br>
<!-- <input type="submit" class="btn btn-primary" value= "Add Teacher">
</form> -->

              


                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection