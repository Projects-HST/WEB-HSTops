@extends('layouts.admin')
@section('content')
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
								<div class="row mt-0 mt-lg-3">
									<div class="col-md-6">
											<div class="card card-custom gutter-b">
													<div class="card-header">
															<h3 class="card-title">App Intro Video</h3>
													</div>
													<form action="{{ url('save_intro_video')}}" method="post" enctype="multipart/form-data">
														@csrf
															<div class="card-body">
																<div class="form-group">
																		<label>Video title <span class="text-danger">*</span></label>
																		<input type="text" class="form-control" placeholder="Enter the video link" value="{{Request::old('video_title')}}"  name="video_title"/>
																		<p class="error">@error('video_title'){{$message}} @enderror</p>
																</div>
																<div class="form-group">
																		<label>Video Link <span class="text-danger">*</span></label>
																		<input type="text" class="form-control" placeholder="Enter the video link"  value="{{Request::old('video_link')}}" name="video_link"/>
																		<p class="error">@error('video_link'){{$message}} @enderror</p>
																</div>
																	<div class="form-group">
																			<label>Video details <span class="text-danger">*</span></label>
																			<textarea class="form-control" name="video_details">{{Request::old('video_details')}}</textarea>
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
