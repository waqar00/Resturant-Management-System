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
                    <table class="table table-bordered table-striped dt-responsive " id="reservationTable" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Guest</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Message</th>
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
<script src="{{ asset('js/pages/reservation.js') }}"></script>

@endsection
