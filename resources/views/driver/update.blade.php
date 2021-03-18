@extends('__template_parts.page')
@section('title', 'Driver driver')
@section('content')


<br>
<br>
<div class="container">
  <br>
  <br>
  <h2>Add Event</h2>
  <form >

 <br>
    <div class="form-group">
      <label >Driver Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>

    <br>
    <div class="form-group">
      <label >Initation:</label>
      <input type="text" class="form-control" id="init" placeholder="Enter the initation Location">
    </div>


<div class="form-group">
      
      <label for="birthdaytime">Initation (date and time):</label>
  <input type="datetime-local" id="init" name="init">
    </div>

    <div class="form-group">
      <label >Destination:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter the Destination">
    </div>
    
    

    <div class="form-group">
      
      <label for="birthdaytime">Destination (date and time):</label>
  <input type="datetime-local" id="init" name="init">
    </div>

    
    <br>
    <button type="submit" class="btn btn-secondary btn-sm">Update</button>
  </form>
</div>
@endsection