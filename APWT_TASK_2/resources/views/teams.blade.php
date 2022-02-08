@extends ('layouts.app')
@section ('content')

<h1><center>Teams</center></h1>
<center>

    <table>
    <tr>
        <th>  Name.</th>
        <th >   ID</th>
    </tr>
    <tr>
    <th >
    @foreach($teams as $t ) 
    <li>{{$t}}</li>
    @endforeach
    </th>
    <th >
    @foreach($id as $i)
      <li>{{$i}}</li>
    @endforeach
    </th>
</tr>
</table>
</center>
@endsection