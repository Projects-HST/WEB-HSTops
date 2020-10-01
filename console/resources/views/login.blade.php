@extends('layouts.adminlogin')
@section('content')
<title>Login Page</title>

<div class="login-form login-signin">
  <div class="text-center mb-10">
    <h3 class="font-size-h1">Sign In</h3>
    <p class="text-muted font-weight-bold">Enter your Email and password</p>
  </div>

  @if (Session::has('status'))
<div class="alert alert-{{ Session::get('status') }}">
    <div>
        <span>{{ Session::get('msg') }}</span>
    </div>
</div>
@endif
  <form action="{{ url('checklogin')}}" method="post" class="form" id="" name="kt_login_signin_form" >
    <div class="form-group">
      @csrf

      <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Email" name="email" id="username" autocomplete="off" />
      <p class="error">@error('email'){{$message}} @enderror</p>
    </div>
    <div class="form-group">
      <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
      <p class="error">@error('password'){{$message}} @enderror</p>
    </div>
    <!--begin::Action-->
    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
      <a href="{{ url('admin/forgot')}}" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">Forgot Password ?</a>
      <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
    </div>
    <!--end::Action-->
  </form>
  <!--end::Form-->
</div>
<!--end::Signin-->
@endsection
