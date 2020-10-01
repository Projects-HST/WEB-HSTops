@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">About Party</h5>
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
                      @if (Session::has('status'))
                    <div class="alert alert-{{ Session::get('status') }}">
                        <div>
                            <span>{{ Session::get('msg') }}</span>
                        </div>
                    </div>
                @endif
                        <div class="card-header">
                            <h3 class="card-title">About party Info</h3>
                            <?php
                            if(count($data)==0){
                              $party_text_ta='';
                              $party_text_en='';
                            }else{
                              foreach($data as $rows){}
                              $party_text_ta= $rows->party_text_ta;
                              $party_text_en=$rows->party_text_en;
                            }
                               ?>
                        </div>

                        <form action="{{ url('save_party_info')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">

                                <div class="form-group row">
                                  <div class="col-md-6">
                                    <label>Info in Tamil <span class="text-danger">*</span></label>
                                    <!-- <textarea class="form-control" name="video_details"></textarea> -->
                                    <textarea name="party_text_ta" class="form-control" rows="10" cols="80" id="party_text_ta" placeholder="">{{ $party_text_ta }}</textarea>
					                           <script>CKEDITOR.replace( 'party_text_ta' ); </script>
																		<p class="error">@error('party_text_ta'){{$message}} @enderror</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Info in English <span class="text-danger">*</span></label>
                                    <!-- <textarea class="form-control" name="video_details"></textarea> -->
                                    <textarea name="party_text_en" class="form-control" rows="10" cols="80" id="party_text_en" placeholder="">{{$party_text_en}}</textarea>
					                               <script>CKEDITOR.replace( 'party_text_en' ); </script>
																		<p class="error">@error('party_text_en'){{$message}} @enderror</p>
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
@endsection
