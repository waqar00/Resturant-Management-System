@extends('admin.index')

@section('content')
<div class="container-fluid table-responsive" style="margin-top:150px">
    @if (session('success'))
        <h6 class="alert aler-danger">{{ session('success') }}</h6>
    @endif
    <a href="{{ route('chefs.create') }}" class="btn btn-success float-right">Add New Chef</a>
<div class="row">
    <div class="col-lg-12">
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table style="overflow-x:auto" class="table table-bordered table-striped dt-responsive " id="chefTable" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Speciality</th>
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
<form id="deleteChefForm" method="post" action="{{ route('chefs.destroy',['chef'=>0]) }}">
    @csrf
    @method('delete')
    <input type="hidden" name="chef_id" id="chefId" value="0">
</form>
@endsection
@section('script')
<script src="{{ asset('js/pages/chef.js') }}"></script>

@endsection

