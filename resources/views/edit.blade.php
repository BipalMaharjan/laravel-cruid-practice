@extends('layout')

@section('content')
<div class="col-sm-6">
  <h1>Edit Restaurant</h1>
<form method="post" action="/edit">
@csrf
  <div class="form-group">
    <input type="hidden" name="id"  value="{{$data->id}}" >
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter name">
    </small>
  </div>

    <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">
    </small>
  </div>

  <div class="form-group">
    <label>Phone no</label>
    <input type="text" name="phone" class="form-control" value="{{$data->phone}}" placeholder="Enter phone number">
    </small>
  </div>


 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop