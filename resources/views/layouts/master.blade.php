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
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bootstrap-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    @foreach($scripts as $script)
        <script src="{{ $script }}"></script>
    @endforeach
</head>
<body style="padding: 70px">
<div class="container-fluid">

    <div class="row">
    @if (count($errors) > 0)
        <!-- Form Error List -->
            <div class="alert alert-danger alert-dismissible col-md-12 text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" width="32" height="32"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @if(isset($menus) && count($menus) > 0)
                            @foreach($menus->all() as $menuItem)
                                <li>
                                   <a href="{{ $menuItem->url }}">{{ $menuItem->text }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/stats">Statistics</a>
                            </li>
                            <li>
                                <a href="/about">About</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right" >
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-default">
                                Search
                            </button>
                        </form>

                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li>
                               @if(\Illuminate\Support\Facades\Auth::guard('doner'))
                                    <a href="#">Hi {{ \Illuminate\Support\Facades\Auth::user()->first_name }} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</a>
                                @else
                                    <a href="#">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                                @endif
                            </li>
                            <li>
                                <a href="/logout">Logout</a>
                            </li>
                        @else
                        <li>
                            <a id="modal-register-select" href="#modal-register" data-toggle="modal">Register</a>
                        </li>
                        <li style="padding-right: 10px;">
                            <a href="/login">Login</a>
                        </li>
                        @endif
                    </ul>
                </div>

            </nav>

            <div class="row col-md-12">
               @yield('content')
            </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="modal fade" id="modal-register" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="container-fluid " style="height: 300px; float: none; margin: 0 auto;">
                                        <div class="py-5">
                                            <div class="container-fluid" >
                                                <div class="row" >
                                                    <div class="col-md-12">
                                                        <h3 class="text-primary"> Register Form </h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">

                                                        <button id="Hospital" class="btn btn-large btn-primary" style="padding: 20px; width: 150px ;padding:10px; height: 150px ; font-size: 20px; " onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'doner']) }}'" >
                                                            <span class="glyphicon glyphicon-user"><br>Donor</span>
                                                            <i class="icon-ok" style="font-size:30px; font: 'Lucida Bright'; vertical-align: middle;"></i>
                                                        </button>

                                                    </div>
                                                    <div class="col-md-4" style="">
                                                        <button id="Hospital" class="btn btn-large btn-primary" style="padding: 20px; width: 150px ;padding:10px; height: 150px ; font-size: 20px; " onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'hospital']) }}'" >
                                                            <span class="glyphicon glyphicon-home"><br>Hospital</span>
                                                            <i class="icon-ok" style="font-size:30px; font: 'Lucida Bright'; vertical-align: middle;"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <button id="Blood_Bank" class="btn btn-large btn-primary" style="padding: 20px; width: 150px ;padding:10px; height: 150px ; font-size: 20px; " onclick="location.href ='{{ route('register/pages', ['as' => 'register', 'type' => 'blood_bank']) }}'" >
                                                            <span class="glyphicon glyphicon-tint"><br>Blood Bank</span>
                                                            <i class="icon-ok" style="font-size:30px; font: 'Lucida Bright'; vertical-align: middle;"></i>
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
        </div>

    </div>
</div>
</body>


</html>