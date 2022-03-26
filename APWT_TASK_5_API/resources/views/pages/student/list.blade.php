@extends('layouts.app')
@section ('content')

<br>
<br>
  <table class="table table-bordered table table-hover">
  <thead class="thead-dark">
    <tr>
    <thead class="thead-dark">
        <th>Name </th>
        <th>Id </th>
        <th>Email </th>
        <th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->student_id}}</td>
    <td>{{$student->email}}</td>
    <td><a href="/studentEdit/{{$student->id}}/{{$student->name}}">Edit</a></td>
    <td><a href="/studentDelete/{{$student->id}}/{{$student->name}}">Delete</a></td>
</tr>
@endforeach
</tbody>

@endsection
