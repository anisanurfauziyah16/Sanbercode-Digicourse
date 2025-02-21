@extends('layout.master')

@section('title')
Edit Casts 
@endsection
@section('content')
<form action="/casts/{{$casts->id}}" method="POST">
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
    @method('PUT')
    <div class="form-group">
      <label>Casts Name</label> <br>
      <input type="text" class="form-controlname" name="name" value="{{old('name', $casts->name)}}">
    </div>
    <div class="form-group">
      <label>age</label>
      <input type="age" class="form-control" name="age"value="{{old('age', $casts->age)}}">
    </div>
    <label >Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{old('bio', $casts->bio)}}</textarea>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
    
@endsection 