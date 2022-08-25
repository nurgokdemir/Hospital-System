<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 {
            background-image: url("public/image/slider-bg.png");
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="/image/logo.png" class="img-responsive margin" style="display:inline"  width="100" height="100">
            <a href="#" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-search"></span> Search
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </div>
</nav>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li onclick="check_active('Home')"><a id="Home" href="{{route('welcome')}}">Home</a></li>
        <li onclick="check_active('Doctors')"><a id="Doctors" href="{{route('doctors')}}">Doctors</a></li>
        <li onclick="check_active('About')"><a id="About" href="{{route('about')}}">About Us</a></li>
        <li onclick="check_active('Contact')"><a id="Contact" href="{{route('contact')}}">Contact</a></li>

    </ul>
</div>
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Who Am I?</h3>
</div>
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">What Am I?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>
<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Where To Find Me?</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="appointment-form">
            <h3><span>+</span> 	Doctor's Appointment</h3>
            <div class="form">
                <form class="form" method="POST" {{--action="{{route('appoint.store')}}"--}}>
                    @csrf
                    <fieldset>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    <input type="text" id="name" placeholder="Your Name" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    <input type="email" placeholder="Email Address"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control" >
                                        <option>Day</option>
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" >
                                        <option>Time</option>
                                        <option>AM</option>
                                        <option>PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control">
                                        @foreach($doctors as $doctor)
                                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    <div class="center"><button type="submit">Submit</button></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
