@extends("admin.main")
@section("content")
    <div class="row mt-0">
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="row">
        <div class="col-3">
            <h4>Patient's Profile</h4>
                <div class="card-group">
                    <div class="card" style="width:400px">
                        <div class="card-body">
                            <p class="card-title">Name: </p>
                            <p class="card-text">Surname: </p>
                            <p class="card-text">Complaint: </p>
                            <a href="#" class="btn btn-primary">Delete</a>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </body>
    </html>
@endsection
