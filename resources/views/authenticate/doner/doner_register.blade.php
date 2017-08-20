@extends('layouts.master')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" action="/register/auth/doner" method="post">
            {{ csrf_field() }}
            <fieldset>
                <!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->
                <!-- Form Name -->
                <legend class="text-center">Register as a Blood Donator</legend>

                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="id" class="control-label col-sm-2">National ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id" placeholder="Your NIC NO" required="">
                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="password" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Select password" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="first_name" class="control-label col-sm-2">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_name" placeholder="" required="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="last_name" class="control-label col-sm-2">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="last_name" placeholder="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="weight" class="control-label col-sm-2">Weight</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="weight" placeholder="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="height" class="control-label col-sm-2">Height</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="height" placeholder="">

                    </div>
                </div>
                <!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="genderInput">Gender</label>
                    <div class="col-sm-10">
                        <select class="form-control custom-select" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="blood_groupInput">Blood Group</label>
                    <div class="col-sm-10">
                        <select class="form-control custom-select" name="blood_group">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="blood_typeInput">Blood Type</label>
                    <div class="col-sm-10">
                        <select class="form-control custom-select" name="blood_type">
                            <option value="positive">Positive</option>
                            <option value="negative">Negative</option>
                        </select>
                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="telephone" class="control-label col-sm-2">Telephone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" name="telephone" placeholder="">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="house_no" class="control-label col-sm-2">House No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="house_no" placeholder="House No">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="street" class="control-label col-sm-2">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="street" placeholder="Street">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="town" class="control-label col-sm-2">Town</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="town" placeholder="Town">

                    </div>
                </div>
                <!-- Text input http://getbootstrap.com/css/#forms -->
                <div class="form-group">
                    <label for="province" class="control-label col-sm-2">Province</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="province" placeholder="Province">

                    </div>
                </div>
                <!-- Textarea http://getbootstrap.com/css/#textarea -->
                <div class="form-group">
                    <label class="control-label col-sm-2" for="medical">Medical</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="medical" name="medical" rows="7">Your medical details</textarea>

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