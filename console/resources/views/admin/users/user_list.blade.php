@extends('layouts.admin')
@section('content')
  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-5 subheader-transparent" id="kt_subheader">
        <div class="container mb_0">

            <div class="row mb_0">
              <div class="col-md-4">
                <h5 class="text-dark font-weight-bold my-1 mr-5">User list</h5>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-7">
                <form method="get" action="{{ url('admin/search_data')}}">
                  @csrf
                  <div class="form-group row mb_0">
                    <div class="col-md-8" >
                      <?php if(empty($search_val)){
                        $search='';
                      }else{
                        $search=$search_val;
                      } ?>
                      <input class="form-control" name="search_text" placeholder="Search name,phone number" value="{{ $search }}">

                    </div>
                    <div class="col-md-2">
                      <input type="submit" class="btn btn-primary ml-12" value="Go">
                    </div>
                    <div class="col-md-1">
                      <a href="{{ url('admin/user_list')}}" class="btn btn-danger ml-12">Clear</a>
                    </div>
                  </div>
                </form>
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
                          <?php $i=0; foreach($data as $rows){
                            $parameter= Crypt::encrypt($rows->id);
                            ?>
  												<tr>
  													<!-- <td>{{$i}}</td> -->
                            <td>{{ $data->firstItem() + $i }}</td>
  													<td>{{ $rows->full_name}}</td>
                            <td>{{ $rows->phone_number}}</td>
                            <td>{{ $rows->email_id}}</td>
                            <td>{{ $rows->gender}}</td>
                            <td>{{  date("d-m-Y", strtotime($rows->dob))}}</td>
  													<td><a href="#" class="badge-{{ $rows->status }}" onclick="change_status('{{$parameter}}')">{{ $rows->status}}</a></td>
  													</tr>
                          <?php $i++; } ?>

                        </tbody>
                      </table>

                    </div>
                    <div class="d-flex justify-content-end">
                      @if(!empty($data))
             {{ $data->appends(request()->except('page'))->links() }}
         @endif
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
<script>
function change_status(id){
  $.ajax({
        url: "{{ url('/')}}/admin/change_status",
        type: "GET",
        data: {id:id},
        success: function(d) {
            alert(d);
            window.location.reload();

        }
    });
}
</script>
@endsection
