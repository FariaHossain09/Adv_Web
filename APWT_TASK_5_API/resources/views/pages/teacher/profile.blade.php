
@extends('layouts.app')
@section ('content')
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

<label for=""> Phone</label>
<input type="text" name="phone" value ="{{$c->phone}}" class="form-control"> </input>
@if($errors ->has('phone'))
<spam class="text-danger">
    <strong>{{ $errors-> first('phone')}}</strong>
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