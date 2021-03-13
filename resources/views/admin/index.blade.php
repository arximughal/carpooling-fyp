@extends('__template_parts.admin_page')
@section('title', 'Admin - Intercity Carpooling App')
@section('content')
	<br />
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>
					Welcome - Admin
				</h1>
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>
					New Driver Applications
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
								Application Date
							</th>
							<th>
								Vehicle
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
								January 31, 2021
							</td>
							<td>
								Honda Civic
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
								Bashir Sheikh
							</td>
							<td>
								February 22, 2021
							</td>
							<td>
								Suzuki Wagon R
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
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>
					New Events
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
							Event Date
						</th>
						<th>
							Vehicle
						</th>
						<th>
							Available Seats
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
							January 31, 2021
						</td>
						<td>
							Honda Civic
						</td>
						<td>
							3
						</td>
						<td class="text-center">
							<button class="btn btn-success btn-sm">
								Accept Event
							</button>
							<button class="btn btn-danger btn-sm">
								Reject Event
							</button>
						</td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td>
							Bashir Sheikh
						</td>
						<td>
							February 22, 2021
						</td>
						<td>
							Suzuki Wagon R
						</td>
						<td>
							2
						</td>
						<td class="text-center">
							<button class="btn btn-success btn-sm">
								Accept Event
							</button>
							<button class="btn btn-danger btn-sm">
								Reject Event
							</button>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center">
				<button class="btn btn-lg btn-primary">
					Manage Drivers
				</button>
			</div>
			<div class="col-md-4 text-center">
				<button class="btn btn-lg btn-primary">
					Manage Events
				</button>
			</div>
			<div class="col-md-4 text-center">
				<button class="btn btn-lg btn-primary">
					Manage Passengers
				</button>
			</div>
		</div>
	</div>
@endsection