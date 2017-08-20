@extends('layouts.master')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal text-center" action="auth/login" method="post">
            <fieldset>
                <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


                <!-- Form Name -->
                <legend>Login to your account</legend>

                <!-- Fuel UX Select http://getfuelux.com/javascript.html#selectlist -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="account_type">Account Type</label>
                    <div class="controls text-left col-sm-10">
                        <div class="btn-group selectlist" data-initialize="selectlist" data-resize="auto" id="account_type">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" required="">
                                <span class="selected-label">&nbsp;</span>
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li data-value="Donor"><a href="#">Donor</a></li>
                                <li data-value="Hospital"><a href="#">Hospital</a></li>
                                <li data-value="Blood Bank"><a href="#">Blood Bank</a></li>
                            </ul>
                            <input class="hidden hidden-field" name="account_type" readonly="readonly" aria-hidden="true" type="text">
                        </div>

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="id" class="control-label col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="Your Account ID" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Password" required="">

                    </div>
                </div>
                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="login"></label>
                    <div class="text-center col-sm-10">
                        <button type="button" id="login" name="login" class="btn btn-default btn-lg" aria-label="">Login</button>
                    </div>
                </div>


            </fieldset>
        </form>
    </div>
@endsection