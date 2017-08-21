<?php

namespace App\Http\Controllers\Auth\Doner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
	protected $redirectTo = '/';

    public function validate( Request $request) {
    	return Validator::make($request->all(), [
    		'id' => 'required|unique:persons',
		    'password' => 'required'
	    ]);
    }


}
