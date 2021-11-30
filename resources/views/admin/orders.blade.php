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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive " id="ordersTable" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>phone</th>
                                <th>Address</th>
                                <th>FoodName</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
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
{{-- <form id="deleteUserForm" method="post" action="{{ route('users.destroy',['user'=>0]) }}">
    @csrf
    @method('delete')
    <input type="hidden" name="user_id" id="userId" value="0">
</form> --}}
@endsection
@section('script')
<script src="{{ asset('js/pages/Orders.js') }}"></script>

@endsection
