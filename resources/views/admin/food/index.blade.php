@extends('admin.index')

@section('content')
<div class="container table-responsive" style="margin-top:150px">
    @if (session('success'))
        <h6 class="alert aler-danger">{{ session('success') }}</h6>
    @endif

<div class="row">

    <div class="col-lg-12">
        <hr>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('foods.create') }}" class="btn btn-success float-right">Add New Dish</a>
                <div class="table-responsive">
                    <table style="overflow-x:auto" class="table table-bordered table-striped dt-responsive " id="foodTable" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Delete Permission Form -->
<form id="deleteFoodForm" method="post" action="{{ route('foods.destroy',['food'=>0]) }}">
    @csrf
    @method('delete')
    <input type="hidden" name="food_id" id="foodId" value="0">
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/food.js') }}"></script>

@endsection
