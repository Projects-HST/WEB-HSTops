@extends('layouts.admin')
@section('content')

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Party election  list</h5>
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
                            <h3 class="card-title">Create party election list</h3>
                        </div>

                        <form action="{{ url('admin/create_party_election_list')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-3">
                                  <label>Election year</label>
																	<input type="text" class="form-control" placeholder="Election year " value="{{Request::old('election_year')}}"  name="election_year"/>
                                  <p class="error">@error('election_year'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>Election type</label>
                                  <select class="form-control" name="election_type" id="election_type">
                                    <option value="MP">MP</option>
                                    <option value="MLA">MLA</option>
                                  </select>
                                  <p class="error">@error('election_type'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-4">
                                  <label>State name</label>
                                  <select class="form-control" name="state_info_id" id="state_info_id">
                                    <option value="">Select State</option>
                                    <?php foreach($res as $rows){ ?>
                                      <option value="{{ $rows->id }}">{{ $rows->state_name_en }}</option>
                                    <?php } ?>
                                  </select>
                                  <script>$('#state_info_id').val("{{Request::old('state_info_id')}}")</script>
                                  <p class="error">@error('state_info_id'){{$message}} @enderror</p>
                                </div>

                                <div class="col-md-2">
                                  <label>Seats won</label>
																	<input type="text" class="form-control" placeholder="Seats won" value="{{Request::old('seats_won')}}"  name="seats_won"/>
                                  <p class="error">@error('seats_won'){{$message}} @enderror</p>
                                </div>


															</div>
                              <div class="form-group row">
                                <div class="col-md-5">
                                  <label>Party leader name in english</label>
																	<input type="text" class="form-control" placeholder="Leader name in english" value="{{Request::old('party_leader_en')}}"  name="party_leader_en"/>
                                  <p class="error">@error('party_leader_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-5">
                                  <label>Party learder name in tamil</label>
																	<input type="text" class="form-control" placeholder="Leader name in tamil " value="{{Request::old('party_leader_ta')}}"  name="party_leader_ta"/>
                                  <p class="error">@error('party_leader_ta'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-2">
                                  <label>Status</label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="">Select status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <script>$('#status').val("{{Request::old('status')}}")</script>
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
                <div class="row" id="list">

                  <div class="col-md-12">
                        <h3 class="">Election info list</h3>
                    @if (Session::has('status'))
                  <div class="alert alert-{{ Session::get('status') }}">
                      <div>
                          <span>{{ Session::get('msg') }}</span>
                      </div>
                  </div>
              @endif

                    <div class="card card-body">

										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Leader </th>

                          <th>Seats won</th>
                          <th>Year</th>
                          <th>Type</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
  											<tbody>
                          <?php $i=0; foreach($data as $rows){
                            $parameter= Crypt::encrypt($rows->id);
                            ?>
  												<tr>
  													<td>{{ $data->firstItem() + $i }}</td>
  													<td>
                            {{ $rows->party_leader_en }} <br>
                            {{ $rows->party_leader_ta }}
                          </td>
                          <td>{{ $rows->seats_won}}</td>
                          <td>{{ $rows->election_year}}</td>
                            <td>{{ $rows->election_type}}</td>
                            <td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
                            <td><a title="Edit" href="{{ url('/admin/get_edit_party_election')}}/{{ $parameter}}"> <i class="fas fa-edit"></i></a>
                          </td>

  													</tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                      <p class="paginate_links">{{ $data->links() }}</p>
                    </div>


                  </div>
                </div>
        </div>

    </div>

</div>
@endsection
