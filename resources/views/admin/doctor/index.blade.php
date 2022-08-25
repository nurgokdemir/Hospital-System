@extends("admin.main")
@section("content")
    <div class="row mt-0">
        <div class="col-12 d-flex justify-content-end">
        <a href="{{route('admin.doctor.create')}}" class="btn btn-primary">Create</a>
        </div>
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

        @foreach($doctors as $doctor)
            <div class="col-3">

                <div class="card-group">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="/image/doctor_01.jpg" alt="Card image" style="width:70%">
                        <div class="card-body">
                            <h4 class="card-title">Name: {{$doctor->name}}</h4>
                            <p class="card-text">Surname: {{$doctor->surname}}</p>
                            <p class="card-text">Profession: {{$doctor->profession}}</p>
                                <a href="{{route('admin.doctor.edit',$doctor->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('admin.doctor.destroy',$doctor->id)}}" class="btn btn-primary">Delete</a>
                                <a href="{{route('admin.doctor.profile',$doctor->id)}}" class="btn btn-primary">See Profile</a>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </body>
    </html>
@endsection
