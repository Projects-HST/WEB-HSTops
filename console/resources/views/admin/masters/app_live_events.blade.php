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
                            <h3 class="card-title">Add Live Events</h3>

                        </div>

                        <form action="{{ url('save_live_events')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group">
																	<label>Tamil Title <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the tamil title" value="{{Request::old('title_ta')}}"  name="title_ta"/>
																	<p class="error">@error('title_ta'){{$message}} @enderror</p>
															</div>
															<div class="form-group">
																	<label>English Link <span class="text-danger">*</span></label>
																	<input type="text" class="form-control" placeholder="Enter the english title"  value="{{Request::old('title_en')}}" name="title_en"/>
																	<p class="error">@error('title_en'){{$message}} @enderror</p>
															</div>
                              <div class="form-group">
                                  <label>URL <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="Enter the video link"  value="{{Request::old('live_url')}}" name="live_url"/>
                                  <p class="error">@error('live_url'){{$message}} @enderror</p>
                              </div>
                              <div class="form-group">
                                  <label>Status <span class="text-danger">*</span></label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <p class="error">@error('status'){{$message}} @enderror</p>
                              </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-body  gutter-b ">
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Title tamil</th>
                          <th>Title english</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
  											<tbody>
                          <?php $i=0; foreach($res as $rows){
                            $parameter= Crypt::encrypt($rows->id);

                            ?>
  												<tr>
                            <td>{{ $res->firstItem() + $i }}</td>
  													<td>{{ $rows->title_ta}}</td>
  													<td>{{ $rows->title_en}}</td>
  													<td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
  													<td><a href="{{ url('/admin/get_live_events_edit')}}/{{ $parameter}}"> <i class="fas fa-edit"></i></a></td>
  												</tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                    </div>
                    <div class="d-flex justify-content-end">
                      <p class="paginate_links">{{ $res->links() }}</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
