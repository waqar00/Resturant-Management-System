@extends('admin.index')

@section('content')

<div class="container"   style="margin-top:150px">
    @if (session('status'))
        <h6 class="alert alert-success">
            {{ session('status') }}
        </h6>
    @endif
    <div class="row d-flex justify-content-center ">
            <div class="col-md-6">
              <div class="card border border-white rounded shadow-lg p-3 mb-5  bg-gray">
                <div class="card-body">
                  <form class="forms-sample" method="post" action="{{ route('foods.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Tiltle">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="num" name="price" class="form-control" id="exampleInputEmail1" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Image</label>
                      <input type="file"  name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Add</button>

                  </form>
                </div>
              </div>
            </div>
    </div>
</div>

@endsection
