@extends('layouts.app')
@section('content')
<br>  
<center>
    @if(Session::get('user')) {{Session::get('user')}} 

    <style>
body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}


</style>
<br><br>       <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

    @endif 
    </center>
@endsection