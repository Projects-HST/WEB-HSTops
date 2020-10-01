@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Social media </h5>
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
                            <h3 class="card-title">Create Social media links</h3>
                        </div>

                        <form action="{{ url('admin/create_social_media_link')}}" method="post" enctype="multipart/form-data">
													@csrf

                            <div class="card-body">
															<div class="form-group row">
                                <div class="col-md-3">
                                  <label>Media name</label>
																	<input type="text" class="form-control" placeholder="Enter the title" value="{{Request::old('sm_title')}}"  name="sm_title"/>
                                  <p class="error">@error('sm_title'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-7">
                                  <label>Media link</label>
																	<input type="text" class="form-control" placeholder="Enter the link" value="{{Request::old('sm_url')}}"  name="sm_url"/>
                                  <p class="error">@error('sm_url'){{$message}} @enderror</p>
                                </div>
                                <div class="col-md-2">
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
                        <h3 class="">Social media list</h3>
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
                          <th>title</th>
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
                            <a href="<?php echo $rows->sm_url; ?>" target="_blank">{{ $rows->sm_title}}</a>
                          </td>
                            <td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
                            <td><a title="Edit" href="{{ url('/admin/get_edit_socialmedia')}}/{{ $parameter}}"> <i class="fas fa-edit"></i></a>
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
