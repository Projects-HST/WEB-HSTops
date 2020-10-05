    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">Gallery</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/photos/">Photos /</a></li>
							<li><a href="<?php echo base_url(); ?>/index/photos_gallery/">Photo Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-icon">
            <i class="flaticon-fireworks"></i>
        </div>
    </div>
    <!-- breadcrumb-area end -->

  
<?php if (count($postgallery)>0){ 
		$assets_url = $this->config->item("assets_url")."gallery/";
?>
    <!-- service start -->
    <div class="our-service-area margin-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
			<?php foreach($postgallery as $gallery){   ?>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box-style-05 margin-bottom-30">
                        <div class="causes-img">
						<a href="<?php echo $assets_url.$gallery->nf_image;?>" class="image-popup" title=""><img src="<?php echo $assets_url.$gallery->nf_image;?>"></a></div>
                    </div>
                </div>
<?php } ?>

            </div>
        </div>
    </div>
    <!-- service end -->
<?php } ?>