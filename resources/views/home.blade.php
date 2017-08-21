@extends('layouts.master')

@section('content')
    <section id="content1-6" class="content1-6">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="feature-content">
                        <h1 class="content-title">Donate blood, save lives</h1>
                        <p>Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.</p>
                        <div class="text-left">
                            <a href="#modal-register" class="btn btn-info button">Register</a>
                            <a href="/login" class="btn btn-success button">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div><img class="img-responsive" src="{{ asset('images/donate-logo.jpg') }}" alt="#"></div>
                </div>
            </div>
        </div>
    </section>
@endsection