@extends('admin.index')

@section('content')

<div class="container"   style="margin-top:150px">
    @if (session('status'))
        <h6 class="alert alert-success">
            {{ session('status') }}
        </h6>
    @endif
    <div class="row d-flex justify-content-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{ route('foods.update',$food->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputUsername1" value="{{ $food->title }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="num" name="price" class="form-control" id="exampleInputEmail1" value="{{ $food->price }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Old Image</label>
                      <img width="100" height="100" src="/images/foodimages/{{ $food->image }}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="image" class="form-control" >
                      </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{ $food->description }}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                  </form>
                </div>
              </div>
            </div>
    </div>
</div>

@endsection
