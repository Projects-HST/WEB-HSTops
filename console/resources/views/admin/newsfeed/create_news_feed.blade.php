@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Newsfeed</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Create Newsfeed</a>
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
                            <h3 class="card-title">Newsfeed</h3>

                        </div>

                        <form action="{{ url('save_newsfeed')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
                              <div class="form-group row">
                                <div class="col-md-6">
                                  <label>Category <span class="text-danger">*</span></label>
                                  <select class="form-control" name="nf_category_id" id="nf_category_id">
                                    <option value="">Select Category</option>
                                    <?php foreach($res as $rows){ ?>
                                      <option value="{{ $rows->id}}">{{ $rows->category_name}}</option>
                                    <?php } ?>
                                  </select>
                                  <script>$('#nf_category_id').val('{{Request::old("nf_category_id")}}')</script>
																	<p class="error">@error('nf_category_id'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Newsfeed Date <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the Newsfeed Date" readonly='true' autocomplete="off" id="datepicker" value="{{Request::old('news_date')}}"  name="news_date"/>
																	<p class="error">@error('news_date'){{$message}} @enderror</p>

                                </div>
															</div>
															<div class="form-group row">
                                <div class="col-md-6">
                                  <label>English title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the English title" value="{{Request::old('title_en')}}"  name="title_en"/>
																	<p class="error">@error('title_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Tamil title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the tamil title" value="{{Request::old('title_ta')}}"  name="title_ta"/>
																	<p class="error">@error('title_ta'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-6">
                                  <label>English description <span class="text-danger">*</span></label>
                                  <textarea name="description_en" class="form-control" rows="10" cols="80" id="description_en" placeholder="">{{Request::old("description_ta")}}</textarea>
                                  <script>CKEDITOR.replace( 'description_en' ); </script>
                                  <p class="error">@error('description_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Tamil description <span class="text-danger">*</span></label>
                                  <textarea name="description_ta" class="form-control" rows="10" cols="80" id="description_ta" placeholder="">{{Request::old("description_ta")}}</textarea>
                                  <script>CKEDITOR.replace( 'description_ta' ); </script>
                                  <p class="error">@error('description_ta'){{$message}} @enderror</p>
                                </div>
															</div>

                              <div class="form-group row">
                                <div class="col-md-6">
                                  <label>Newsfeed type <span class="text-danger">*</span></label>
                                  <select class="form-control" name="nf_profile_type" id="nf_profile_type">
                                    <option value="">Select type</option>
                                    <option value="i">Image</option>
                                    <option value="v">Video</option>
                                  </select>
                                  <script>$('#nf_profile_type').val('{{Request::old("nf_profile_type")}}')</script>
                                  <p class="error">@error('nf_profile_type'){{$message}} @enderror</p>

                                </div>
                                <div class="col-md-6">
                                  <label>Cover image <span class="text-danger">*</span></label>
                                  <input type="file" class="form-control" placeholder="Enter the Newsfeed Date" value="{{Request::old('nf_cover_image')}}"  name="nf_cover_image"/>
																	<p class="error">@error('nf_cover_image'){{$message}} @enderror</p>
                                </div>
															</div>
                              <div class="form-group row">
                                <div class="col-md-6" id="video_url">
                                  <label>Video token id <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the Video Token" value="{{Request::old('nf_video_token_id')}}"  name="nf_video_token_id"/>
																	<p class="error">@error('nf_video_token_id'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-6">
                                  <label>Status <span class="text-danger">*</span></label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <p class="error">@error('status'){{$message}} @enderror</p>
                                </div>
															</div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
<script type="text/javascript">
$('#video_url').hide();
$('#nf_profile_type').on('change', function() {
  var nf_type_id=this.value;
  if(nf_type_id=='v'){
    $('#video_url').show();
  }else{
    $('#video_url').hide();

  }
});
$(document).ready(function() {

$( "#datepicker" ).datepicker({
  startDate: "dateToday",
  format: 'dd-mm-yyyy'
});
  });



</script>
@endsection
