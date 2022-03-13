@extends('layouts.app')
@section ('content')
<h2>create student</h2>
<form action ="{{route('studentedit')}}" class="form-group" method="post">
    {{csrf_field()}}

    <label for=""> ID</label>
    <input type="text" name="id" value =" {{$student-> id}}" class="form-control" readonly> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>

    <label for=""> Name</label>
    <input type="text" name="name" value =" {{$student-> name}}" class="form-control"> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>

    <label for=""> Student ID</label>
    <input type="text" name="student_id" value ="{{$student->student_id}}" class="form-control"> </input>
    @if($errors ->has('student_id'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('id')}}</strong>
</spam>
@endif
    <br>

    <label for=""> Email</label>
    <input type="text" name="email" value ="{{$student-> email}}" class="form-control"> </input>
    @if($errors ->has('email'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('email')}}</strong>
</spam>
@endif
   
    <br>
<input type="submit" class="btn btn-primary" value= "Edit">
</form>
@endsection