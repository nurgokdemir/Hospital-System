<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }

        p {
            font-size: 16px;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-image: url("/image/slider-bg.png");
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

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header ">
            <a href="#" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-search"></span> Search
            </a>
        </div>
    </div>
</nav>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="text-dark" onclick="check_active('Home')"><a id="Home" href="{{route('welcome')}}">Home</a></li>
        <li onclick="check_active('Doctors')"><a id="Doctors" href="{{route('doctors')}}">Doctors</a></li>
        <li onclick="check_active('About')"><a id="About" href="{{route('about')}}">About Us</a></li>
        <li onclick="check_active('Contact')"><a id="Contact" href="{{route('contact')}}">Contact</a></li>
    </ul>
</div>

<div class="container-fluid bg-1 text-center">
    <h3 class="m-2">Welcome Hospital Page</h3>
</div>

</body>

<div class="container-fluid bg-2">
    <div class="row">
        @foreach($doctors as $doctor)
            <div class="col-4 mb-5">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="/image/doctor_01.jpg" alt="Card image" style="width:70%">
                    <div class="card-body text-dark">
                        <h4 class="card-title">Name: {{$doctor->name}}</h4>
                        <p class="card-text">Surname: {{$doctor->surname}}</p>
                        <p class="card-text">Profession: {{$doctor->profession}}</p>
                             <a href="{{route('profile',$doctor->id)}}" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
