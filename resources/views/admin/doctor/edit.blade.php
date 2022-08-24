
@extends("admin.main")
@section("content")
    <div class="col-12">
        <div class="row">
            <form class="form" method="POST" action="{{route('admin.doctor.update',$doctor->id)}}">
                    @csrf
                    <div class="mb-5">
                        <label class="mb-5">Name</label>
                        <input type="text" class="form-control" name="doc_name" value="{{$doctor->name}}">
                    </div>
                    <div class="mb-5">
                        <label class="mb-5">Surname</label>
                        <input type="text" class="form-control" name="doc_surname" value="{{$doctor->surname}}">
                    </div>
                    <div class="mb-5">
                        <label class="mb-5">Profession</label>
                        <input type="text" class="form-control" name="doc_profession" value="{{$doctor->profession}}">
                    </div>

                    <button type="submit" class="btn btn-success" >Kaydet</button>
            </form>
        </div>
    </div>
@endsection

@extends("admin.main")


