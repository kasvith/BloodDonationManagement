<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @foreach($scripts as $script)
        <script src="{{ $script }}"></script>
    @endforeach
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" width="32" height="32"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/stats">Statistics</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">
                                Search
                            </button>
                        </form>
                        <li>
                            <a id="modal-register-select" href="#modal-register" data-toggle="modal">Register</a>

                        </li>
                        <li>
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="row">
               @yield('content')
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal fade" id="modal-register" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            Select acount type
                                        </h4>
                                    </div>
                                    <div class="modal-body text-center">
                                        <div class="row modal-register-button" style="padding: 10px 10px 10px 10px;">
                                            <button type="button" class="btn btn-lg btn-success modal-register-button" onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'doner']) }}'">
                                                Doner
                                            </button>
                                        </div>
                                        <div class="row modal-register-button" style="padding: 10px 10px 10px 10px;" >
                                            <button type="button" class="btn btn-lg btn-info" onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'hospital']) }}'">
                                                Hospital
                                            </button>
                                        </div>
                                        <div class="row modal-register-button" style="padding: 10px 10px 10px 10px;">
                                            <button type="button" class="btn btn-lg btn-warning" onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'blood_bank']) }}'">
                                                Blood Bank
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>