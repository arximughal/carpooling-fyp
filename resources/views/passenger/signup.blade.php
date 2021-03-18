@extends('__template_parts.page')
@section('title', 'Passenger signup')
@section('content')
<div class="container">
  <br>
  <br>
  <h2>Sign in as Passenger</h2>
  <form >
    <br>
    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" >
    </div>

    <div class="form-group">
      <label >Age:</label>
      <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
    </div>

<div class="container">
  <h2>Select your gender</h2>
    <label class="radio-inline">
      <input type="radio" name="male" checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="female">Female
    </label>
  </div>
    
    <br>
    <button type="submit" class="btn btn-secondary btn-sm">Sign up</button>
  </form>
</div>
@endsection