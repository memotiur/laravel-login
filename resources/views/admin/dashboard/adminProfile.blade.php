@extends('admin.dashboard.defaultLayout');
@section('content')
    <form class="m-t" role="form" action="{{url("/dashboard/profileUpdate")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="User Name" required="" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required="" name="email" value="{{Auth::user()->email}}">
        </div>

        <div class="col-md-8">
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Current Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">New Password</label>
                        <input name="new_password" type="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Confirm Password</label>
                        <input name="new_password_confirmation" type="password" class="form-control">
                    </div>
                </div>
                <div class="card-footer bg-light text-right">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>

        </div>

    </form>
@endsection


