@extends ('layouts.app')
@section ('content')

<h1><center>Products</center></h1>

    <ul>
    
    @foreach($products as $p)
    <li>{{$p}}</li>
    @endforeach
    </ul>
    <div class="text-center"><a herf="/home">Home?</a></div>
    <a href="/home">Home</a>
    @endsection