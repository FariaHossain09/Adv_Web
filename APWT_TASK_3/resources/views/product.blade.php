@extends ('layouts.app')
@section ('content')

<h1><center>Products</center></h1>

    <ul>
    
    @foreach($products as $p)
    <li>{{$p}}</li>
    @endforeach
    </ul>

    @endsection