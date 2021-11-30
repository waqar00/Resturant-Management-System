@extends('admin.index')

@section('content')

<div class="container-fluid"   style="margin-top:150px">
    @if (session('status'))
        <h6 class="alert alert-success">
            {{ session('status') }}
        </h6>
    @endif
    <div class="row d-flex justify-content-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{ route('chefs.update',$chef->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ $chef->name }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Speciality</label>
                      <input type="num" name="Speciality" class="form-control" id="exampleInputEmail1" value="{{ $chef->speciality }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Old Image</label>
                        <img width="100" height="100" src="/images/chefImages/{{ $chef->image }}">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file"  name="image" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                  </form>
                </div>
              </div>
            </div>
    </div>
</div>

@endsection
