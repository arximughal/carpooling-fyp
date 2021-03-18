<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
	
	public function adminPage() {
		return view('admin.index');
	}


	
public function driverPage() {
		return view('driver.login');
	}

	public function passengerPage() {
		return view('passenger.login');
	}








}
