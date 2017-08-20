@extends('layouts.master')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" action="/auth/register/bloodbank">
            <fieldset>


                <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


                <!-- Form Name -->
                <legend class="text-center">Register as a Blood Bank</legend>

                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="id" class="control-label col-sm-2">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="Blood Bank ID" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="textinput" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="textinput" placeholder="Password" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="textinput" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="textinput" placeholder="Blood Bank Name" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="telephone" class="control-label col-sm-2">Telephone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="telephone" placeholder="Telephone " required="">

                    </div>
                </div>

                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="house_no" class="control-label col-sm-2">House No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="house_no" placeholder="House No">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="street" class="control-label col-sm-2">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="street" placeholder="Street">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="town" class="control-label col-sm-2">Town</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="town" placeholder="Town">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="province" class="control-label col-sm-2">Province</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="province" placeholder="Province">

                    </div>
                </div>

                <!-- Button http://getbootstrap.com/css/#buttons -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="singlebutton"></label>
                    <div class="text-center col-sm-10">
                        <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" aria-label="">Register Account</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

@endsection