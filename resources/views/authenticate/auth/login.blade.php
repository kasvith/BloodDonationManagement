@extends('layouts.master')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal text-center" action="auth/login" method="post">
            <fieldset>
                <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->

                {{ csrf_field() }}

                <!-- Form Name -->
                <legend>Login to your account</legend>

                <!-- Fuel UX Select http://getfuelux.com/javascript.html#selectlist -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="account_type">Account Type</label>
                    <div class="controls text-left col-sm-10">
                        <select class="form-control custom-select" name="account_type">
                            <option value="donor">Donor</option>
                            <option value="bloodbank">Blood Bank</option>
                            <option value="hospital">Hospital</option>
                        </select>
                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="id" class="control-label col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" placeholder="Your Account ID" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">

                    </div>
                </div>
                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <div class="text-center col-sm-10">
                        <button type="submit" id="login" name="login" class="btn btn-default btn-lg" aria-label="">Login</button>
                    </div>
                </div>


            </fieldset>
        </form>
    </div>
@endsection