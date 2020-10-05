@extends('layouts.admin')
@section('content')
<style>
.timeline.timeline-6 .timeline-item .timeline-badge{
	margin-left: 3px;
}
.timeline.timeline-6:before{
	left: 60px;
}
</style>					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid" style="background-color: #F0F7F1;">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row mt-0 mt-lg-3">
									<div class="col-xl-4">
										<!--begin::Mixed Widget 17-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<div class="card-title font-weight-bolder">
													<div class="card-label">Users
													<div class="font-size-sm text-muted mt-2">{{ $totalcount }} Users</div></div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 d-flex flex-column">
												<!--begin::Items-->
												<div class="flex-grow-1 card-spacer">
													<div class="row row-paddingless mt-5 mb-10">
														<!--begin::Item-->
														<div class="col">
															<div class="d-flex align-items-center mr-2">

																<div class="symbol symbol-45 symbol-light-box mr-4 flex-shrink-0">
																	<div class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-danger">
																			<i class="fa fa-users" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																<div>
																	<div class="font-size-h4 text-dark-75 font-weight-bolder">{{ $totalcount }}</div>
																	<div class="font-size-sm text-muted font-weight-bold mt-1">Total Users</div>
																</div>
																<!--end::Title-->
															</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="col">
															<div class="d-flex align-items-center mr-2">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light-box mr-4 flex-shrink-0">
																	<div class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-danger">
																			<i class="fa fa-male" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div>
																	<div class="font-size-h4 text-dark-75 font-weight-bolder">{{ $malecount}}</div>
																	<div class="font-size-sm text-muted font-weight-bold mt-1">Male </div>
																</div>
																<!--end::Title-->
															</div>
														</div>
														<!--end::Widget Item-->
													</div>
													<div class="row row-paddingless">
														<!--begin::Item-->
														<div class="col">
															<div class="d-flex align-items-center mr-2">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light-box mr-4 flex-shrink-0">
																	<div class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-success">
																			<i class="fa fa-female" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div>
																	<div class="font-size-h4 text-dark-75 font-weight-bolder">{{ $femalecount }}</div>
																	<div class="font-size-sm text-muted font-weight-bold mt-1">Female</div>
																</div>
																<!--end::Title-->
															</div>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="col">
															<div class="d-flex align-items-center mr-2">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light-box mr-4 flex-shrink-0">
																	<div class="symbol-label">
																		<span class="svg-icon svg-icon-lg svg-icon-primary">
																			<i class="fa fa-user" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div>
																	<div class="font-size-h4 text-dark-75 font-weight-bolder">{{ $otherscount}}</div>
																	<div class="font-size-sm text-muted font-weight-bold mt-1">Others</div>
																</div>
																<!--end::Title-->
															</div>
														</div>
														<!--end::Item-->
													</div>
												</div>
												<!--end::Items-->
												<!--begin::Chart-->
												<div id="kt_mixed_widget_17_chart" class="card-rounded-bottom" data-color="primary" style="height: 200px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 17-->
									</div>
									<div class="col-xl-4">
										<!--begin::List Widget 9-->
										<div class="card card-custom gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="font-weight-bolder text-dark">Posts</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Total posts : {{ $postcount }}</span>
												</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<div class="timeline timeline-6 mt-3">

													<?php
													$colors = array('primary', 'danger', 'success');
													$x=0;
													foreach($post as $rows_post){
														$x++;

														?>


													<div class="timeline-item align-items-start">
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">{{date("d-M", strtotime($rows_post->news_date))}}</div>
														<div class="timeline-badge">
															<i class="fa fa-genderless text-{{ $colors[$x%3] }}  icon-xl"></i>
														</div>
														<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3 text_overlap">{{ $rows_post->title_en}}</div>
													</div>
													<?php
 } ?>

												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<!--begin::Engage Widget 5-->
										<div class="card card-custom gutter-b card-stretch bg-info">
											<div class="card-body d-flex p-0">
												<div class="flex-grow-1 bg-info   card-rounded flex-grow-1 bgi-no-repeat" style="background-position: right bottom; background-size: 55% auto;">
													<p class="text-inverse-info pb-5 font-size-h6 p-12">Offering discounts for better
													<br />online a store can loyalty
													<br />weapon into driving</p>

													<img src="{{ url('/')}}/assets/admin/media/bg/bg_2.png" class="img-responsive" style="width:260px;margin-left:50px;margin-top:14px;">
												</div>
											</div>
										</div>
										<!--end::Engage Widget 5-->
									</div>
								</div>
								<!--end::Row-->
								<div class="row">
									<div class="col-md-8">
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Latest Events</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Total events : {{ $eventcount }}</span>
												</h3>

											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables2">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>

																	</tr>
																</thead>
																<tbody>
																	<?php foreach($events as $rows_events){?>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-50 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="{{ url('/storage/newsfeed/')}}/{{ $rows_events->nf_cover_image }}" class="align-self-center" alt="" style="width:50px;height:50px;">
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<p class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $rows_events->title_en  }}
																			</p><small class="">{{   date("d-m-Y", strtotime($rows_events->news_date)) }}</small>
																			<!-- <span class="text-muted font-weight-bold d-block">{{ stripslashes($rows_events->description_en)  }}</span> -->
																			<p class="event_details"><?php echo htmlspecialchars_decode(stripslashes($rows_events->description_en));	 ?></p>
																		</td>
																	</tr>
																	<?php } ?>
																</tbody>
															</table>
														</div>
														<center><a href="{{ url('admin/list_events')}}" class="btn btn-viewmore">View more</a></center>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>


								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
<style>
.pl-0 p{
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		width:900px;
}
.event_date{
	position: relative;
	display: inline;
	left: 700px;
}
.fa{
	color:#317BD3;
}
.symbol-light-box{
	background-color: #AAD1FF;
}
</style>
@endsection
