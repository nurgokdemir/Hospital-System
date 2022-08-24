@extends("admin.main")
@section("content")
    <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <style>
                body{
                    background: #C9D6FF;
                    background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
                    background: linear-gradient(to right, #E2E2E2, #C9D6FF);
                }
            </style>
        </head>
        <body>
<div class="row">

            <div class="col-md-3">
                <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Folders</h3>
                        <div class="card-tools">

                </div>
                    </div>
                    <div class="card-body p-0">
                        <u1 class="nav nav-pills flex-column">
                            <a href="#" class="nav-item active">Inbox</a>
                            <a href="#" class="nav-item active">Sent</a>
                            <a href="#"="nav-item active">Trash</a>
                        </u1>
                    </div>

                </div>
                <div class="card bg-dark text-white">
                    <h3 class="card-title text-center">
                        <div class="d-flex flex-wrap justify-content-center mt-2">
                            <a><span class="badge hours"></span></a> :
                            <a><span class="badge min"></span></a> :
                            <a><span class="badge sec"></span></a>
                        </div>
                    </h3>
                </div>
            </div>


        </div><!-- /.clock row -->

    </div><!-- /.container -->

    <script>
        $(document).ready(function() {
            setInterval( function() {
                var hours = new Date().getHours();
                $(".hours").html(( hours < 10 ? "0" : "" ) + hours);
            }, 1);
            setInterval( function() {
                var minutes = new Date().getMinutes();
                $(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
            },1);
            setInterval( function() {
                var seconds = new Date().getSeconds();
                $(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
            },1);
        });
    </script>

    <body>
    </html>

@endsection
