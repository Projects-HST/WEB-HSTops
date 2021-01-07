 <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">Achievements</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/ops_achievements/">Achievements</a></li>
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


<?php if (count($achievementdetails)>0){ 
		$assets_url = $this->config->item("assets_url")."awards/";

		foreach($achievementdetails as $rows){ }
	}
?>
	<div class="leadership-area margin-top-100 padding-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-style-01 margin-bottom-100">
                        <div class="b-img" style="max-width:740px;border-radius: 10px;">
                            <img src="<?php echo $assets_url.$rows->achievement_image;?>" alt="" style="border-radius: 10px 10px 0px 0px;">
                            <div class="blog-date-box">
                                <h4><?php echo date("d",strtotime($rows->achievement_date)) ?><br><span><?php echo date("M",strtotime($rows->achievement_date))?></span></h4>
                            </div>
                        </div>
						<div class="b-content">
                            <h4><?php echo $rows->achievement_title_en;?></h4>
                            <p><?php echo htmlspecialchars_decode(stripslashes($rows->achievement_text_en)); ?></p>						
							</div>
                        </div>
                    </div>
					
					
                    <!--<div id="comments" class="comments-area comments-area-wrapper">
                        <h4 class="comments-title">5 Comments</h4>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img alt="" src="<?php echo base_url(); ?>assets/basic/img/blog/c1.png" class="avatar">
                                        </div>
                                        <div class="desc">
                                            <div class="d-flex justify-content-between comment_title">
                                                <div class="d-flex align-items-center">
                                                    <h5>Monalisa Khatun <br><span>5 June 2019</span></h5>                       
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you would agree. Prepared do an dissuade be so whatever steepest.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img alt="" src="<?php echo base_url(); ?>assets/basic/img/blog/c2.png" class="avatar"> 
                                                </div>
                                                <div class="desc">
                                                    <div class="d-flex justify-content-between comment_title">
                                                        <div class="d-flex align-items-center">
                                                            <h5>Naeem <br><span>23 Dec 2019</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you would agree. Prepared do an dissuade be so whatever steepest.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img alt="" src="<?php echo base_url(); ?>assets/basic/img/blog/c3.png" class="avatar">                
                                        </div>
                                        <div class="desc">
                                            <div class="d-flex justify-content-between comment_title">
                                                <div class="d-flex align-items-center">
                                                    <h5>Asade <br><span>9 May 2019</span></h5>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Sometimes ‘short and sweet’ workouts are all you need. If you've done a HIIT workout before you would agree. Prepared do an dissuade be so whatever steepest.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div id="respond" class="comment-respond">
                            <form id="comment_form" class="commentform">
									<div class="form-submit">
                                    <button type="submit" class="btn btn-custom-primary">Post comment</button>
                                </div>	
                            </form>
                        </div>
                    </div>
                </div>-->
				
                <div class="col-lg-4 text-center">
                    <div class="ls-date-box">
                        <h4>Date</h4>
							<p><?php echo date("D, M j Y",strtotime($rows->achievement_date)) ?></p>
                        <hr>
						<div class="ls-social-share">
                        <ul>
                            <li><span>Share On</span></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>index/achievement_details/<?php echo base64_encode($rows->id*98765); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/share?&text=<?php echo base_url(); ?>index/achievement_details/<?php echo base64_encode($rows->id*98765); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url(); ?>index/achievement_details/<?php echo base64_encode($rows->id*98765); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>