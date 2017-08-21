<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class HospitalLoginController extends Controller
{
	use AuthenticatesUsers, ThrottlesLogins;

	protected $guard = 'hospital';

	protected $username = 'id';
}
