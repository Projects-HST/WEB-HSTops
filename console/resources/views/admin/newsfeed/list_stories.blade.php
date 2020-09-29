@extends('layouts.admin')
@section('content')
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Newsfeed</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">list of Stories</a>
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
                    @if (Session::has('status'))
                  <div class="alert alert-{{ Session::get('status') }}">
                      <div>
                          <span>{{ Session::get('msg') }}</span>
                      </div>
                  </div>
              @endif
              
                    <div class="card card-body  gutter-b ">
										<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>title</th>
                          <th>Cover image</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
  											<tbody>
                          <?php $i=1; foreach($res as $rows){
                            $parameter= Crypt::encrypt($rows->id);
                            ?>
  												<tr>
  													<td>{{$i}}</td>
  													<td>
                            {{ $rows->title_en}} <br>
                            {{ $rows->title_en}}
                          </td>
                            <td><img src="{{ url('/storage/newsfeed/')}}/{{ $rows->nf_cover_image }}" style="width:100px;height:100px;"></td>
  													<td>{{$newDate = date("d-m-Y", strtotime($rows->news_date))  }}</td>
                            <td><p class="badge-{{ $rows->status }}">{{ $rows->status}}</p></td>
                            <td><a title="Edit" href="{{ url('/admin/get_edit_newsfeed')}}/{{ $parameter}}"> <i class="fas fa-edit"></i></a>
                            &nbsp; <a title="Gallery" href="{{ url('/admin/add_gallery_newfeed')}}/{{ $parameter}}"> <i class="far fa-images"></i></a></td>

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
