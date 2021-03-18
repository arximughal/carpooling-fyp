@extends('__template_parts.page')
@section('title', 'Driver driver')
@section('content')


<!-- View and Request trips created by driver -->

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
          Trips created by Drivers
        </h3>
        <br>
        <br>
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
              <th>
                Seats Available
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
              <td>
                3
              </td>
              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Request
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
                January 31, 2021 11:00AM
              </td>
              <td>
                Islamabad
              </td>
               <td>
                January 31, 2021 12:00AM
              </td>
              <td>
                2
              </td>
              <td class="text-center">
                <button class="btn btn-success btn-sm">
                  Request
                </button>
                
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<!-- Report Driver -->

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
          Report Driver to Admin
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
                Destination time
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
                January 31, 2021 11:00AM
              </td>
              <td>
                Islamabad
              </td>
               <td>
                January 31, 2021 12:00AM
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