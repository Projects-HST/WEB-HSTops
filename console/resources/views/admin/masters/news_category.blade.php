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
                            <a href="" class="text-muted">News Category</a>
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
                    <div class="card card-body  gutter-b ">
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Category</th>
                          <th>Status</th>
                        </tr>
                        </thead>
  											<tbody>
                          <?php $i=1; foreach($res as $rows){

                            ?>
  												<tr>
  													<td>{{$i}}</td>
  													<td>{{ $rows->category_name}}</td>
  													<td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
  													</tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
