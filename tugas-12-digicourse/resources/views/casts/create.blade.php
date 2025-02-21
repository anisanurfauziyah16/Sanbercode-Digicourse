@extends('layout.master')

@section('title')
Add Casts 
@endsection
@section('content')
<form action="/casts" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="form-group">
      <label>Casts Name</label> <br>
      <input type="text" class="form-controlname" name="name" value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label>age</label>
      <input type="age" class="form-control" name="age"value="{{old('age')}}">
    </div>
    <label >Bio</label>
      <textarea name="Bio" class="form-control" cols="30" rows="10" value="{{old('Bio')}}</textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection 