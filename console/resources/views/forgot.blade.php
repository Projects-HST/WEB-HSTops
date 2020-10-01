@extends('layouts.adminlogin')
@section('content')
<div class="login-form login-forgot">
  <div class="text-center mb-10 mb-lg-20">
    <h3 class="font-size-h1">Forgotten Password ?</h3>
    <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
  </div>
  <!--begin::Form-->
  <form action="{{ url('/forgot')}}" method="post" class="form" id="" name="kt_login_forgot_form" >
    @csrf
    <div class="form-group">
      <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Email" name="email_id" id="email" autocomplete="off" />
        <p class="error">@error('email_id'){{$message}} @enderror</p>
    </div>
    <div class="form-group d-flex flex-wrap flex-center">
      <button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Submit</button>
      <a href="{{ url('admin/login')}}" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Back to Login</a>
    </div>
  </form>
  <!--end::Form-->
</div>
<script>
$('.login-forgot').show();

</script>
@endsection
