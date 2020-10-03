@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">About OPS</h5>
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
                            <h3 class="card-title">About OPS political career</h3>
                            <?php
                            if(count($data)==0){
                              $political_career_text_ta='';
                              $political_career_text_en='';
                            }else{
                              foreach($data as $rows){}
                              $political_career_text_ta= $rows->political_career_text_ta;
                              $political_career_text_en=$rows->political_career_text_en;
                            }
                               ?>
                        </div>

                        <form action="{{ url('save_political_career_info')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">

                                <div class="form-group row">
                                  <div class="col-md-6">
                                    <label>Career info in Tamil <span class="text-danger">*</span></label>
                                    <!-- <textarea class="form-control" name="video_details"></textarea> -->
                                    <textarea name="political_career_text_ta" class="form-control" rows="10" cols="80" id="personal_life_text_ta" placeholder="">{{ $political_career_text_ta }}</textarea>
					                           <script>CKEDITOR.replace( 'political_career_text_ta' ); </script>
																		<p class="error">@error('personal_life_text_ta'){{$message}} @enderror</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label>Career info in English <span class="text-danger">*</span></label>
                                    <!-- <textarea class="form-control" name="video_details"></textarea> -->
                                    <textarea name="political_career_text_en" class="form-control" rows="10" cols="80" id="political_career_text_en" placeholder="">{{$political_career_text_en}}</textarea>
					                               <script>CKEDITOR.replace( 'political_career_text_en' ); </script>
																		<p class="error">@error('political_career_text_en'){{$message}} @enderror</p>
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
