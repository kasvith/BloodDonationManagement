<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class BloodBankLoginController extends Controller
{
	use AuthenticatesUsers, ThrottlesLogins;

	protected $guard = 'bloodbank';

	protected $username = 'id';
}
