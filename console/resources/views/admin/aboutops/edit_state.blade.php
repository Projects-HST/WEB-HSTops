@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Party state list</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted"></a>
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
                        <div class="card-header">
                            <h3 class="card-title">Update state list</h3>
                        </div>

                        <form action="{{ url('admin/update_state_list')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-3">
                                  <label>State name in tamil</label>
																	<input type="text" class="form-control" placeholder="Enter the state name in tamil " value="{{ $data->state_name_ta }}"  name="state_name_ta"/>
                                  <p class="error">@error('state_name_ta'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>State name in english</label>
																	<input type="text" class="form-control" placeholder="Enter the state name in english" value="{{ $data->state_name_en }}"  name="state_name_en"/>
                                  <p class="error">@error('state_name_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>State logo</label>
																	<input type="file" class="form-control" placeholder="" value=""  name="state_logo"/>
                                  <input type="hidden" class="form-control" placeholder="" value="{{ $data->id }}"  name="st_id"/>
                                  <input type="hidden" class="form-control" placeholder="" value="{{ $data->state_logo }}"  name="old_state_logo"/>
                                  <p class="error">@error('state_logo'){{$message}} @enderror</p>
                                </div>

                                <div class="col-md-3">
                                  <label>Status</label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <script>$('#status').val("{{ $data->status }}");</script>
                                  <p class="error">@error('status'){{$message}} @enderror</p>
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
