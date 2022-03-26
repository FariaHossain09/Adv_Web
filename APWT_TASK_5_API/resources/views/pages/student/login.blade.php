@extends('layouts.app')
@section ('content')
<h2><center>Login</center></h2>
<form action ="{{route('login')}}" class="form-group" method="post" >
    {{csrf_field()}}
    

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

<input type="submit" class="btn btn-primary" value= "Login">
</form>
@endsection