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
                            <h3 class="card-title">Update party election list</h3>
                        </div>

                        <form action="{{ url('admin/update_party_election_list')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-3">
                                  <label>Election year</label>
																	<input type="text" class="form-control" placeholder="Election year " value="{{$data->election_year}}"  name="election_year" id="datepicker" autocomplete="off" readonly='true'/>
                                  <input type="hidden" class="form-control" placeholder="Election year " value="{{$data->id}}"  name="el_id"/>
                                  <p class="error">@error('election_year'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>Election type</label>
                                  <select class="form-control" name="election_type" id="election_type">
                                    <option value="MP">MP</option>
                                    <option value="MLA">MLA</option>
                                  </select>
                                  <script>$('#election_type').val("{{$data->election_type}}")</script>
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
                                  <script>$('#state_info_id').val("{{$data->state_info_id}}")</script>
                                  <p class="error">@error('state_info_id'){{$message}} @enderror</p>
                                </div>

                                <div class="col-md-2">
                                  <label>Seats won</label>
																	<input type="text" class="form-control" placeholder="Seats won" value="{{$data->seats_won}}"  name="seats_won"/>
                                  <p class="error">@error('seats_won'){{$message}} @enderror</p>
                                </div>


															</div>
                              <div class="form-group row">
                                <div class="col-md-5">
                                  <label>Party leader name in english</label>
																	<input type="text" class="form-control" placeholder="Leader name in english" value="{{$data->party_leader_en}}"  name="party_leader_en"/>
                                  <p class="error">@error('party_leader_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-5">
                                  <label>Party learder name in tamil</label>
																	<input type="text" class="form-control" placeholder="Leader name in tamil " value="{{$data->party_leader_ta}}"  name="party_leader_ta"/>
                                  <p class="error">@error('party_leader_ta'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-2">
                                  <label>Status</label>
                                  <select class="form-control" name="status" id="status">
                                    <option value="">Select status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                  </select>
                                  <script>$('#status').val("{{$data->status}}")</script>
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
 startDate: '-80y',
 minDate:0,
 format: "yyyy",
 viewMode: "years",
 minViewMode: "years",
 updateViewDate: true,
 changeYear: true,
 defaultViewDate: {year: '1970'}
});
  });
</script>
@endsection
