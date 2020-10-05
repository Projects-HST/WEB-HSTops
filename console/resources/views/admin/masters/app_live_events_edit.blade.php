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
                            <a href="" class="text-muted">Live events</a>
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
                            <h3 class="card-title">Update Live Events</h3>

                        </div>

                        <form action="{{ url('update_live_events')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group">
																	<label>Tamil Title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the tamil title" value="{{ $res->title_ta}}"  name="title_ta"/>
																	<p class="error">@error('title_ta'){{$message}} @enderror</p>
															</div>
															<div class="form-group">
																	<label>English Title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the english title"  value="{{ $res->title_en}}" name="title_en"/>
																	<p class="error">@error('title_en'){{$message}} @enderror</p>
															</div>
                              <div class="form-group">
                                  <label>URL <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the video link"  value="{{ $res->live_url}}" name="live_url"/>
                                  <input type="hidden" class="form-control" placeholder="Enter the video link"  value="{{ Crypt::encrypt($res->id)}}" name="live_id"/>
                                  <p class="error">@error('live_url'){{$message}} @enderror</p>
                              </div>
                              <div class="form-group">
                                  <label>Status <span class="text-danger">*</span></label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <script>$('#status').val('{{ $res->status }}')</script>
                                  <p class="error">@error('live_url'){{$message}} @enderror</p>
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
