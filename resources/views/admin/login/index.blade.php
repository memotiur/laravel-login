@extends('admin.layout.defaultLayout')
<title>Log In</title>

@section('content')
        <form class="m-t" role="form" action="{{url("/login/check")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" name="password">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="#">Create an account</a>
        </form>

    </div>
</div>

@endsection
