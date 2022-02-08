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
        <th>DOB </th>
</tr>
</thead>
<tbody>
@foreach ($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->id}}</td>
    <td>{{$student->dob}}</td>
</tr>
@endforeach
</tbody>

@endsection
