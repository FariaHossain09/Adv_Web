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
<h2>create teacher</h2>
<form action ="{{route('teacherCreate')}}" class="form-group" method="post">
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
 <label for=""> Password</label>
<input type="text" name="password" value ="{{old('password')}}" class="form-control"> </input>
@if($errors ->has('password'))
<spam class="text-danger">
    <strong>{{ $errors-> first('password')}}</strong>
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

    
    <label for="">TeacherId</label>
    <input type="text" name="teacherId" value ="{{old('teacherId')}}" class="form-control"> </input>
    @if($errors ->has('teacherId'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('teacherId')}}</strong>
</spam>
@endif
    <br>
<input type="submit" class="btn btn-primary" value= "Add Teacher">
</form>
@endsection