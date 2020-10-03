@extends('layouts.admin')
@section('content')
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-5 subheader-transparent" id="kt_subheader">
        <div class="container mb_0">

            <div class="row mb_0">
              <div class="col-md-4">
                <h5 class="text-dark font-weight-bold my-1 mr-5">User list</h5>
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <!-- <form method="post" action="{{ url('admin/search_data')}}">
                  @csrf
                  <div class="form-group row mb_0">
                    <div class="col-md-10" >
                      <input class="form-control" name="search_text" placeholder="Search name,phone number" value="">

                    </div>
                    <div class="col-md-2">
                      <input type="submit" class="btn btn-primary ml-12" value="Go">
                    </div>
                  </div>
                </form> -->
              </div>
            </div>


        </div>

    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">

                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-body  gutter-b ">
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Full name</th>
                          <th>Phone number</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Dob</th>
                          <th>Status</th>
                        </tr>
                        </thead>
  											<tbody>
                          <?php $i=0; foreach($res as $rows){

                            ?>
  												<tr>
  													<!-- <td>{{$i}}</td> -->
                            <td>{{ $res->firstItem() + $i }}</td>
  													<td>{{ $rows->full_name}}</td>
                            <td>{{ $rows->phone_number}}</td>
                            <td>{{ $rows->email_id}}</td>
                            <td>{{ $rows->gender}}</td>
                            <td>{{  date("d-m-Y", strtotime($rows->dob))}}</td>
  													<td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
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
