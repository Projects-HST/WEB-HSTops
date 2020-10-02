@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Password</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <!-- <a href="" class="text-muted">App Intro Video</a> -->
                        </li>


                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom gutter-b ">
                      @if (Session::has('status'))
                    <div class="alert alert-{{ Session::get('status') }}">
                        <div>
                            <span>{{ Session::get('msg') }}</span>
                        </div>
                    </div>
                @endif
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>

                        </div>

                        <form action="{{ url('admin/update_passsword')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-4">
                                  <label>Old Password <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the old password" value=""  name="old_password"/>
                                  <p class="error">@error('old_password'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>New Password <span class="text-danger">*</span></label>
                                  <input type="password" class="form-control" placeholder="Enter the new password" value=""  name="new_password"/>
                                  <p class="error">@error('new_password'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Confirm Password<span class="text-danger">*</span></label>
                                  <input type="password" class="form-control" placeholder="Enter the confrim password" value=""  name="retype_password"/>
                                  <input type="hidden" class="form-control" placeholder="Enter the phone number" value="{{ $data->id  }}"  name="pf_id"/>
                                  <p class="error">@error('retype_password'){{$message}} @enderror</p>
                                </div>
															</div>




                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>

                            </div>
                        </form>

                    </div>



                </div>
                </div>
        </div>

    </div>

</div>
@endsection
