@extends('__template_parts.page')
@section('title', 'Driver Login')
@section('content')
<div class="container">
  <br>
  <br>
  <h2>Sign in as Driver</h2>
  <form >
    <br>
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" >
    </div>
    <br>
    <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
  </form>
</div>
@endsection