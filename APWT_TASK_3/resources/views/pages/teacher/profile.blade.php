
@extends('layouts.app')
@section ('content')
<style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}


</style>
<h2>Profile</h2>
<form action ="{{route('profilesubmit')}}" class="form-group" method="post">
    {{csrf_field()}}
    <label for=""> Name</label>
    <input type="text" name="name" value ="{{$c->name}}" class="form-control"> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>
<br>

<label for=""> teacherId</label>
<input type="text" name="teacherId" value ="{{$c->teacherId}}" class="form-control"> </input>
@if($errors ->has('teacherId'))
<spam class="text-danger">
    <strong>{{ $errors-> first('teacherId')}}</strong>
</spam>
@endif
<br>

<!-- 
    <label for=""> Phone</label>
    <input type="text" name="phone" value ="{{old('phone')}}" class="form-control"> </input>
    @if($errors ->has('phone'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('phone')}}</strong>
</spam> -->
@endif
    <!-- <br>
<input type="submit" class="btn btn-primary" value= "Add Teacher">
</form>

{{$c->phone}}<br>
{{$c->name}} -->
<br>
<input type="submit" class="btn btn-primary" value= "Update">
</form>
@endsection