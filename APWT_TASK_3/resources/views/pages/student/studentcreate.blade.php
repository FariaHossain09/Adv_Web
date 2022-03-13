@extends('layouts.app')
@section ('content')
<style>
body {
  margin: 0;
  padding: 0;
  background-color: lightblue;
  height: 100vh;
}


</style>
<h2>create student</h2>
<form action ="{{route('studentcreate')}}" class="form-group" method="post">
    {{csrf_field()}}
    <label for=""> Name</label>
    <input type="text" name="name" value ="{{old('name')}}" class="form-control"> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>

    <label for=""> ID</label>
    <input type="text" name="id" value ="{{old('id')}}" class="form-control"> </input>
    @if($errors ->has('id'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('id')}}</strong>
</spam>
@endif
    <br>

    <label for=""> Password</label>
    <input type="text" name="password" value ="{{old('password')}}" class="form-control"> </input>
    @if($errors ->has('password'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('password')}}</strong>
</spam>
@endif
    <br>

    <label for=""> DOB</label>
    <input type="date" name="dob" value ="{{old('dob')}}" class="form-control"> </input>
    @if($errors ->has('dob'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('dob')}}</strong>
</spam>
@endif
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
<input type="submit" class="btn btn-primary" value= "Add student">
</form>
@endsection