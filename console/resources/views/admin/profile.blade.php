@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Profile</h5>
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
                            <h3 class="card-title">Profile update</h3>

                        </div>

                        <form action="{{ url('admin/update_profile')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-4">
                                  <label>Full name <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the full name" value="{{ $data->full_name }}"  name="full_name"/>
                                  <p class="error">@error('full_name'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Email ID <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the email ID" value="{{ $data->email_id }}"  name="email_id"/>
                                  <p class="error">@error('email_id'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Phone number <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the phone number" value="{{ $data->phone_number  }}"  name="phone_number"/>
                                  <input type="hidden" class="form-control" placeholder="Enter the phone number" value="{{ $data->id  }}"  name="pf_id"/>
                                  <p class="error">@error('phone_number'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-4">
                                  <label>Qualification <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the Qualification" value="{{ $data->qualification }}"  name="qualification"/>
                                  <p class="error">@error('qualification'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Gender <span class="text-danger">*</span></label>

                                  <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                  </select>
                                <script>$('$gender').val("{{ $data->gender }}")</script>
                                  <p class="error">@error('gender'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Address<span class="text-danger">*</span></label>
                                  <textarea class="form-control" placeholder=""   name="address">{{ $data->address }}</textarea>
                                  <p class="error">@error('address'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-4">
                                  <label>Profile picture <span class="text-danger">*</span></label>
                                  <input type="file" class="form-control"   name="profile_pic" value=""/>
                                  <input type="hidden" class="form-control"   name="old_profile_pic" value="{{ $data->profile_pic }}"/>
                                  <!-- <input type="text" class="form-control"   name="old_profile_pic" value="{{ $data->id }}"/> -->
                                  <p class="error">@error('profile_pic'){{$message}} @enderror</p>
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
