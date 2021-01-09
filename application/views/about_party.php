 <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">About Party</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/about_party/">About</a></li>
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

  

    <!-- action area start -->
    <div class="action-area padding-top-100 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">About Party</p>
                        <h3 >All India Anna Dravida Munnetra Kazhagam</h3>
                        <p class="para"><?php 
							if (count($partyhistory)>0){ 
									foreach($partyhistory as $rows){ }
										echo htmlspecialchars_decode(stripslashes($rows->party_text_en));
						} ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="goal-area">
                        <ul class="goal-list">
                            <li>
                                <div class="icon"><i class="flaticon-financial"></i></div>
                                <div class="content">
                                    <h4 class="title">Economic Viability</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-hospital"></i></div>
                                <div class="content">
                                    <h4 class="title">Good Governance</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-earth-globe"></i></div>
                                <div class="content">
                                    <h4 class="title">Foreign Policy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt.</p>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- action area end  -->


	<div class="stories-area padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stories-thumb mr-4">
                        <img src="<?php echo base_url(); ?>assets/basic/img/party_achievements.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-06">
                        <p class="section-subtitle">Success stories</p>
                        <h3>Achievement of Party</h3>
                        <p class="para">AIADMK is a Dravidian party founded by M. G. Ramachandran </p>
                        <div class="row margin-top-50">
						
						<?php if (count($electioninfo1)>0){ ?>
                                   
                                        <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<th width="15%">Year</th>
												<th width="15%">Type</th>
												<th width="55%">Party Leader</th>
												<th width="15%">Seats Won</th>
									<?php foreach($electioninfo1 as $rows){ ?>
											<tr>
												<td><?php echo $rows->election_year;?></td>
												<td><?php echo $rows->election_type;?></td>
												<td><?php echo $rows->party_leader_en?></td>
												<td><?php echo $rows->seats_won?></td>
											</tr>
								<?php } ?>
										  </tr>
										</table>
                                   
						<?php } ?>
						
                            <!--<div class="col-md-4">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" data-toggle="tab" href="#home">Tamilnadu</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Puducherry</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Karnataka</a></li>
                                </ul>
                            </div>-->
                            <!--<div class="col-md-8">
                                <div class="tab-content">
						<?php if (count($electioninfo1)>0){ ?>
                                    <div id="home" class="tab-pane fade in active show">
                                      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<th>Year</th>
												<th>Type</th>
												<th>Party Leader</th>
												<th>Seats Won</th>
									<?php foreach($electioninfo1 as $rows){ ?>
											<tr>
												<td><?php echo $rows->election_year;?></td>
												<td><?php echo $rows->election_type;?></td>
												<td><?php echo $rows->party_leader_en?></td>
												<td><?php echo $rows->seats_won?></td>
											</tr>
								<?php } ?>
										  </tr>
										</table>
                                    </div>
									
						<?php } ?>
						<?php if (count($electioninfo2)>0){ ?>
                                    <div id="menu1" class="tab-pane fade">
                                        <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<th>Year</th>
												<th>Type</th>
												<th>Party Leader</th>
												<th>Seats Won</th>
									<?php foreach($electioninfo2 as $rows){ ?>
											<tr>
												<td><?php echo $rows->election_year;?></td>
												<td><?php echo $rows->election_type;?></td>
												<td><?php echo $rows->party_leader_en?></td>
												<td><?php echo $rows->seats_won?></td>
											</tr>
								<?php } ?>
										  </tr>
										</table>
                                    </div>
						<?php } ?>
						
						<?php if (count($electioninfo3)>0){ ?>
                                    <div id="menu2" class="tab-pane fade">
                                        <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<th>Year</th>
												<th>Type</th>
												<th>Party Leader</th>
												<th>Seats Won</th>
									<?php foreach($electioninfo3 as $rows){ ?>
											<tr>
												<td><?php echo $rows->election_year;?></td>
												<td><?php echo $rows->election_type;?></td>
												<td><?php echo $rows->party_leader_en?></td>
												<td><?php echo $rows->seats_won?></td>
											</tr>
								<?php } ?>
										  </tr>
										</table>
                                    </div>
							<?php } ?>

                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
