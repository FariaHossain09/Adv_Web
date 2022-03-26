<!-- 
@extends('layouts.app')
@section('content')
<form action="{{route('fileupload')}}" method="post">

	{{@csrf_field()}} -->
    <!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width-device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Upload file with autorename</title>
        <link rel="stylesheet" herf ="{{asset('style/css/brootstrap.min.css')}}"> 

</head>
<body>
    <div class="container">
        <div class="row" stylre="mergin-top;45px">
            <div class=".col-md-4 col-md-offset-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type='file' name="_file" id="_file" class="form-controll">
                    <button type="submit" class="btn btn-success">Upload</button>

                </form>
</div>
</div>
</div>
</body>
</html> -->
<!-- @endsection  -->


<!-- <div class="frame">
	<div class="center">
		<div class="title">
			<h1>Drop file to upload</h1>
		</div>

		<div class="dropzone">
			<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			<input type="file" class="upload-input" />
		</div>

		<button type="button" class="btn" name="uploadbutton">Upload file</button>

	</div>
</div>
 original pen: https://codepen.io/roydigerhund/pen/ZQdbeN  -->

<!-- NO JS ADDED YET  -->

@extends('layouts.app')
@section ('content')
<h2>create teacher</h2>
<form action ="{{route('upload')}}" class="form-group" method="post">
    {{csrf_field()}}
    <label for=""> Name</label>
    <input type="text" name="name" value ="{{old('name')}}" class="form-control"> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>
<br>

<label for=""> Email</label>
<input type="text" name="email" value ="{{old('email')}}" class="form-control"> </input>
@if($errors ->has('email'))
<spam class="text-danger">
    <strong>{{ $errors-> first('email')}}</strong>
</spam>
@endif
<br>


    <label for=""> Phone</label>
    <input type="text" name="phone" value ="{{old('phone')}}" class="form-control"> </input>
    @if($errors ->has('phone'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('phone')}}</strong>
</spam>
@endif
    <br>
<input type="submit" class="btn btn-primary" value= "Add Teacher">
</form>
@endsection