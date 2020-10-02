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
                            <h3 class="card-title">Create state list</h3>
                        </div>

                        <form action="{{ url('admin/create_state_list')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-3">
                                  <label>State name in tamil</label>
																	<input type="text" class="form-control" placeholder="Enter the state name in tamil " value="{{Request::old('state_name_ta')}}"  name="state_name_ta"/>
                                  <p class="error">@error('state_name_ta'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>State name in english</label>
																	<input type="text" class="form-control" placeholder="Enter the state name in english" value="{{Request::old('state_name_en')}}"  name="state_name_en"/>
                                  <p class="error">@error('state_name_en'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-3">
                                  <label>State logo</label>
																	<input type="file" class="form-control" placeholder="" value="{{Request::old('state_name_en')}}"  name="state_logo"/>
                                  <p class="error">@error('state_logo'){{$message}} @enderror</p>
                                </div>

                                <div class="col-md-3">
                                  <label>Status</label>
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
                <div class="row" id="list">

                  <div class="col-md-12">
                        <h3 class="">Party state list</h3>
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
                          <th>State name</th>
                          <th>Logo</th>
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
                            {{ $rows->state_name_ta }} <br>
                            {{ $rows->state_name_en }}
                          </td>
                          <td><img src="{{ url('/storage/state/')}}/{{ $rows->state_logo }}" style="width:100px;height:100px;"></td>
                            <td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
                            <td><a title="Edit" href="{{ url('/admin/get_edit_state')}}/{{ $parameter}}"> <i class="fas fa-edit"></i></a>
                          </td>

  													</tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                    </div>
                    <div class="d-flex justify-content-end">
                      <p class="paginate_links">{{ $data->links() }}</p>
                    </div>


                  </div>
                </div>
        </div>

    </div>

</div>
@endsection
