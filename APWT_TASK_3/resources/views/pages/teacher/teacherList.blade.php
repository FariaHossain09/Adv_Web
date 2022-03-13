@extends('layouts.app')
@section ('content')

<br>
<br>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: lightblue;
  height: 100vh;
}


</style>
  <table class="table table-bordered table table-hover">
  <thead class="thead-dark">
    <tr>
    <thead class="thead-dark">
        <th>Name </th>
        <th>Phone</th>
</tr>
</thead>
<tbody>
@foreach ($teachers as $teacher)
<tr>
    <td><a href="/teacher/courses/{{$teacher->id}}">{{$teacher->name}}</td>
    <td>{{$teacher->phone}}</td>

</tr>
@endforeach
</tbody>

@endsection
