@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Masters</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">App Intro Video</a>
                        </li>


                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-custom gutter-b ">
                      @if (Session::has('status'))
                    <div class="alert alert-{{ Session::get('status') }}">
                        <div>
                            <span>{{ Session::get('msg') }}</span>
                        </div>
                    </div>
                @endif
                        <div class="card-header">
                            <h3 class="card-title">App Intro Video</h3>
                            <!-- <?php  foreach($res as $rows){}  ?> -->
                        </div>

                        <form action="{{ url('save_intro_video')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group">
																	<label>Video title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the video link" value="{{ $res->video_title }}"  name="video_title"/>
																	<p class="error">@error('video_title'){{$message}} @enderror</p>
															</div>
															<div class="form-group">
																	<label>Video Link <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the video link"  value="{{ $res->video_url }}" name="video_url"/>
																	<p class="error">@error('video_url'){{$message}} @enderror</p>
															</div>
                                <div class="form-group">
                                    <label>Video details <span class="text-danger">*</span></label>
                                    <!-- <textarea class="form-control" name="video_details"></textarea> -->
                                    <textarea name="video_details" class="form-control" rows="10" cols="80" id="video_details" placeholder="Video details">{{ $res->video_details }}</textarea>
					 <script>CKEDITOR.replace( 'video_details' ); </script>
																		<p class="error">@error('video_details'){{$message}} @enderror</p>
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
@endsection
