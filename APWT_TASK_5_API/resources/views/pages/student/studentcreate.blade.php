@extends('layouts.app')
@section ('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<br><br>
<section class>
  <!-- <div class="mask d-flex align-items-center h-100 gradient-custom-3"> -->
    <div class="container h-10">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-5 col-md-1 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Student account</h2>

              <form action ="{{route('studentcreate')}}" class="form-group" method="post">
              {{csrf_field()}}


              <style>
                body {
                  margin: 0;
                  padding: 0;
                  background-color: Teal;
                  /* //#17a2b8;
                  Teal */
                  height: 100vh;
                }

                </style>


             
                <label for=""> Name</label>
                <input type="text" name="name" value ="{{old('name')}}" class="form-control"> 
                @if($errors ->has('name'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('name')}}</strong>
                </spam>
                @endif
               

          


                <label for=""> ID</label>
                    <input type="text" name="id" value ="{{old('id')}}" class="form-control"> </input>
                    @if($errors ->has('id'))
                    <spam class="text-danger">
                        <strong>{{ $errors-> first('id')}}</strong>
                </spam>
                @endif
                  

         

               

                                <label for=""> Password</label>
                    <input type="text" name="password" value ="{{old('password')}}" class="form-control"> </input>
                    @if($errors ->has('password'))
                    <spam class="text-danger">
                        <strong>{{ $errors-> first('password')}}</strong>
                </spam>
                @endif
                   
                 


                    <label for=""> DOB</label>
                    <input type="date" name="dob" value ="{{old('dob')}}" class="form-control"> </input>
                    @if($errors ->has('dob'))
                    <spam class="text-danger">
                        <strong>{{ $errors-> first('dob')}}</strong>
                </spam>
                @endif
                  

                 
               <label for=""> Email</label>
                    <input type="text" name="email" value ="{{old('email')}}" class="form-control"> </input>
                    @if($errors ->has('email'))
                    <spam class="text-danger">
                        <strong>{{ $errors-> first('email')}}</strong>
                </spam>
                @endif
                  
                  



                
                <label for=""> Phone</label>
                <input type="text" name="phone" value ="{{old('phone')}}" class="form-control"> </input>
                @if($errors ->has('phone'))
                <spam class="text-danger">
                    <strong>{{ $errors-> first('phone')}}</strong>
                </spam>
                @endif
            

             
<!-- <input type="submit" class="btn btn-primary" value= "Add Teacher">
</form> -->

<br>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
            

               <br>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection