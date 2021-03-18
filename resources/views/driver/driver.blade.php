@extends('__template_parts.page')
@section('title', 'Driver driver')
@section('content')


<!-- Add Carpooling event -->

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

<div class="dropdown">
  <label >Seats Availability:</label>
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Seats
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li>1</a></li>
    <li>2</li>
    <li>3</a></li>
    <li>4</a></li>
  </ul>
</div>

    <br>
    <br>
    <button type="submit" class="btn btn-primary btn-sm">Add</button>
  </form>
</div>


<!-- Events CRUD -->



<br />
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        
      </div>
    </div>
  </div>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>
          Update/Delete Events Created by Driver
        </h3>
      </div>
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <th>
                Sr #
              </th>
              <th>
                Driver Name
              </th>
              <th>
                Initation
              </th>
              <th>
                Initation Time
              </th>
              <th>
                Destination
              </th>
              <th>
                Destination Time
              </th>
              <th class="text-center">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                January 31, 2021 11:00AM
              </td>
              <td>
                Islamabad
              </td>
               <td>
                January 31, 2021 12:00AM
              </td>

              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Update Event
                </button>
                <button class="btn btn-danger btn-sm">
                  Delete Event
                </button>
              </td>
            </tr>
            
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                January 31, 2021 11:00AM
              </td>
              <td>
                Islamabad
              </td>
               <td>
                January 31, 2021 12:00AM
              </td>
              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Update Event
                </button>
                <button class="btn btn-danger btn-sm">
                  Delete Event
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  




<!-- Accept/reject passenger request -->

<br>
<br>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        
      </div>
    </div>
  </div>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>
          New Passenger Applications
        </h3>
      </div>
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <th>
                Sr #
              </th>
              <th>
                Passenger Name
              </th>
              <th>
                Passenger Location
              </th>
              <th>
                Passenger Destination
              </th>
              <th>
                Application Date
              </th>
                <th>
                Application time
              </th>
              
              <th class="text-center">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                Islamabad
              </td>
              <td>
                January 31, 2021
              </td>
              <td>
                11:00 AM
              </td>
              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Accept Application
                </button>
                <button class="btn btn-danger btn-sm">
                  Reject Application
                </button>
              </td>
            </tr>
            <tr>
              <td>
                2
              </td>
             <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                Islamabad
              </td>
              <td>
                January 31, 2021
              </td>
              <td>
                11:00 AM
              </td>
              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Accept Application
                </button>
                <button class="btn btn-danger btn-sm">
                  Reject Application
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<!-- Report passenger -->

<br>
<br>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        
      </div>
    </div>
  </div>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>
          Report passenger to Admin
        </h3>
      </div>
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive">
          <thead>
            <tr>
              <th>
                Sr #
              </th>
              <th>
                Passenger Name
              </th>
              <th>
                Passenger Location
              </th>
              <th>
                Passenger Destination
              </th>
              <th>
                Application Date
              </th>
                <th>
                Application time
              </th>
              
              <th class="text-center">
                Actions
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                Islamabad
              </td>
              <td>
                January 31, 2021
              </td>
              <td>
                11:00 AM
              </td>
              <td class="text-center">
                <button class="btn btn-danger btn-sm">
                  Report
                </button>
              </td>
            </tr>
            <tr>
              <td>
                2
              </td>
             <td>
                Jawad Ahmed
              </td>
              <td>
                Lahore
              </td>
              <td>
                Islamabad
              </td>
              <td>
                January 31, 2021
              </td>
              <td>
                11:00 AM
              </td>
              <td class="text-center">
                <button class="btn btn-danger btn-sm">
                  Report
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection