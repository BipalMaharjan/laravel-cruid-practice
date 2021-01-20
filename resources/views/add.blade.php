@extends('layout')

@section('content')
<div class="col-sm-6">
<form method="post" action="">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
    </small>
  </div>

    <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
    </small>
  </div>

  <div class="form-group">
    <label>Phone no</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
    </small>
  </div>


 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop