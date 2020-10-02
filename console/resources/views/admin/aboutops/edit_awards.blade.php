@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Awards and Achievements </h5>
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
                            <h3 class="card-title">Update awards and achievements</h3>
                        </div>

                        <form action="{{ url('admin/update_awards')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
                              <div class="form-group row">
                                <div class="col-md-4">
                                  <label>Date</label>
																	<input type="text" class="form-control" placeholder="Select the date" id="datepicker" value="{{ date('d-m-Y', strtotime($data->achievement_date))}}"  name="achievement_date" readonly='true'/>
                                  <p class="error">@error('achievement_date'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>Image <span class="text-danger">*</span></label>
                                  <input type="file" class="form-control" placeholder="" value=""  name="achievement_image"/>
                                  <input type="hidden" class="form-control" placeholder="" value="{{ $data->achievement_image }}"  name="old_achievement_image"/>
                                  <input type="hidden" class="form-control" placeholder="" value="{{ $data->id }}"  name="aw_id"/>
																	<p class="error">@error('achievement_image'){{$message}} @enderror</p>
                                </div>

                              </div>
															<div class="form-group row">
                                <div class="col-md-4">
                                  <label>Title tamil </label>
																	<input type="text" class="form-control" placeholder="Enter the title in tamil" value="{{ $data->achievement_title_ta }}"  name="achievement_title_ta"/>
                                  <p class="error">@error('achievement_title_ta'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Details in tamil</label>
																	<textarea class="form-control" placeholder="Enter the details in tamil" rows="5" cols="10" name="achievement_text_ta"/>{{ $data->achievement_text_ta }}</textarea>
                                  <p class="error">@error('achievement_text_ta'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-4">
                                  <label>Title english </label>
																	<input type="text" class="form-control" placeholder="Enter the title in english" value="{{ $data->achievement_title_en }}"  name="achievement_title_en"/>
                                  <p class="error">@error('achievement_title_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Details in english</label>
																	<textarea class="form-control" placeholder="Enter the details in english" rows="5" cols="10" name="achievement_text_en"/>{{ $data->achievement_text_en }}</textarea>
                                  <p class="error">@error('achievement_text_en'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-4">
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
<script>

$(document).ready(function() {

$( "#datepicker" ).datepicker({
  endDate: "today",

  format: 'dd-mm-yyyy'
});
  });
</script>
@endsection
