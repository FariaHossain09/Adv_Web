@extends ('layouts.app')
@section ('content')
<h2>Contact Us</h2>
<form action ="{{route('contactus')}}" class="form-group" method="post">
    {{csrf_field()}}
    <label for=""> Name</label>
    <input type="text" name="name" value ="{{old('name')}}" class="form-control"> 
    @if($errors ->has('name'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('name')}}</strong>
</spam>
@endif
<br>

    <label for=""> ID</label>
    <input type="text" name="id" value ="{{old('id')}}" class="form-control"> </input>
    @if($errors ->has('id'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('id')}}</strong>
</spam>
@endif
    <br>

    <label for=""> Subject</label>
    <input type="text" name="subject" value ="{{old('subject')}}" class="form-control"> </input>
    @if($errors ->has('subject'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('subject')}}</strong>
</spam>
@endif
    <br>
    <div class="col-md-12">
    <label for=""> Message</label>
    <textarea type="text" rows="4" name="message" value ="{{old('message')}}"  class="form-control "> </textarea>
    @if($errors ->has('message'))
    <spam class="text-danger">
        <strong>{{ $errors-> first('message')}}</strong>
</spam>
@endif
</div>
    <br>

    
<input type="submit" class="btn btn-primary" value= "Submit">
</form>

@endsection