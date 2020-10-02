@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Newsfeed</h5>
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Gallery</a>
                        </li>


                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-custom gutter-b ">

                        <div class="card-header">
                            <h3 class="card-title">Add Gallery </h3>
                        </div>
                        <form action="{{ url('save_gallery_image')}}" method="post" enctype="multipart/form-data">
													@csrf
                            <div class="card-body">
															<div class="form-group">
																	<label>Add images <span class="text-danger">*</span></label>
																	<input type="file" class="form-control"   name="filenames[]" multiple/>
                                  <input type="hidden" class="form-control"   name="nf_id" value="{{ $id }}"/>
																	<p class="error">@foreach ($errors->all() as $message)
                                            {{ $message }}
                                            @endforeach</p>
															</div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Upload</button>

                            </div>
                        </form>
                    </div>
                </div>
                </div>
                <div class="row" id="list">
                  <div class="col-md-12">
                    @if (Session::has('status'))
                  <div class="alert alert-{{ Session::get('status') }}">
                      <div>
                          <span>{{ Session::get('msg') }}</span>
                      </div>
                  </div>
              @endif
                    <div class="card card-custom gutter-b ">
                      <div class="card-header">
                          <h3 class="card-title">List of images uploaded </h3>
                      </div>
                      <div class="row" style="margin:10px;">
                        <?php

                          foreach($data as $image){
                            $parameter= Crypt::encrypt($image->id);
                            ?>
                          <div class="col-md-3">
                            <div class="img_box">
                              <img src="{{ url('/storage/gallery')}}/{{ $image['nf_image']}}" class="img-responsive" style="width:250px;height:200px;">
                            <div class="img_icon_box">
                              <a title="Delete" href="{{ url('admin/delete_galley_image') }}/{{ $parameter }}"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            </div>
                          <!-- <?php echo $image['nf_image']; ?> -->
                          </div>
                        <?php } ?>

                      </div>
                    </div>

                  </div>
                </div>
        </div>

    </div>

</div>
@endsection
