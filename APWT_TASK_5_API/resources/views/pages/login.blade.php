


@extends('layouts.app')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  /* //#17a2b8;
  Teal */
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<form action="{{route('login')}}" method="post">


	{{@csrf_field()}}

	<body>
    <div id="login">
        <!-- <h3 class="text-center text-white pt-5">Login form</h3> -->
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="id" class="text-info">ID: </label><br>
								<!-- <input type="text" name="id" placeholder="Id"><br> -->
                                <input type="text" name="id" id="id" class="form-control" >
                                @if($errors ->has('id'))
                                    <spam class="text-danger">
                                        <strong>{{ $errors-> first('id')}}</strong>
                                </spam>
                                @endif
                                
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                @if($errors ->has('password'))
                                    <spam class="text-danger">
                                        <strong>{{ $errors-> first('password')}}</strong>
                                    </spam>
                                    @endif
								<!-- <input type="password" name="password" placeholder="Password"><br> -->
                            </div>
                            <div class="form-group">
                                <label for="remember" class="text-info"><span>Remember me</span> <span><input id="remember" name="remember" type="checkbox"></span></label><br>
								<!-- <input type="checkbox" id="remember" name="remember"> Remember Me<br> -->
								<!-- <input type="submit" name="" value="Login"> -->
								<input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="registration" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


	<!-- <input type="text" name="phone" placeholder="Phone"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login"> -->
</form>


@endsection 