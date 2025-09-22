<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Select2 css -->
		<link href="<?php echo base_url('public/assets/plugins/select2/select2.min.css'); ?>" rel="stylesheet" />
		<!-- Fullcalendar css-->
		<link href='<?php echo base_url('public/assets/plugins/fullcalendar/fullcalendar.css'); ?>' rel='stylesheet' />
		<link href='<?php echo base_url('public/assets/plugins/fullcalendar/fullcalendar.print.min.css'); ?>' rel='stylesheet' media='print' />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Full Calender</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Full Calender</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="card">
							<div class="row no-gutters">
								<div class="col-lg-3">
									<div class="card-body p-0">
										<div class="card-header">
											<div class="card-title">Event List</div>
										</div>
										<div class="card-body">
											<nav class="nav main-nav-column main-nav-calendar-event">
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-primary-transparent mr-3"></div>
													<div>Calendar Events</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-secondary-transparent mr-3"></div>
													<div>Birthday Events</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-success-transparent mr-3"></div>
													<div>Holiday Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-info-transparent mr-3"></div>
													<div>Other Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-warning-transparent mr-3"></div>
													<div>Office Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex" href="">
													<div class="w-4 h-4 brround bg-danger-transparent mr-3"></div>
													<div>Work Calendar</div>
												</a>
												<a class="nav-link w-100 d-flex exclude" href="">
													<div class="w-4 h-4 brround bg-light mr-3"></div>
													<div>Discovered Events</div>
												</a>
											</nav>
											<div class="mt-5">
												<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalSetSchedule"><i class="fe fe-plus"></i> Add New Event</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-9">
									<div class="main-content-body main-content-body-calendar card-body border-left">
										<div class="main-calendar" id="calendar"></div>
									</div>
								</div>
							</div>
						</div>

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('/pages/calendar'); ?>" id="mainFormCalendar" method="post" name="mainFormCalendar">
							<div class="form-group">
								<input class="form-control" placeholder="Add title" type="text">
							</div>
							<div class="form-group d-flex align-items-center">
								<label class="custom-control custom-radio mr-4">
									<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
									<span class="custom-control-label">Event</span>
								</label>
								<label class="custom-control custom-radio">
									<input type="radio" class="custom-control-input" name="example-radios" value="option1">
									<span class="custom-control-label">Reminder</span>
								</label>
							</div>
							<div class="form-group mg-t-30">
								<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="mainEventStartTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2 main-event-time" data-placeholder="Select time" id="EventEndTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
							</div>
							<div class="d-flex mg-t-15 mg-lg-t-30">
								<button class="btn btn-primary mr-4" type="submit">Save</button>
								<a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<nav class="nav nav-modal-event">
							<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
							<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
							<a class="nav-link" data-dismiss="modal" href="#">
							<i class="icon ion-md-close"></i></a>
						</nav>
					</div>
					<div class="modal-body">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
								<p class="event-start-date"></p>
							</div>
							<div class="col-sm-6">
								<label class="tx-13 mg-b-2">End Date</label>
								<p class="event-end-date"></p>
							</div>
						</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
						<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!--Select2 js -->
		<script src="<?php echo base_url('public/assets/plugins/select2/select2.full.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>
		<!-- Full-calendar js-->
		<script src='<?php echo base_url('public/assets/plugins/fullcalendar/moment.min.js'); ?>'></script>
		<script src='<?php echo base_url('public/assets/plugins/fullcalendar/fullcalendar.min.js'); ?>'></script>
		<script src="<?php echo base_url('public/assets/js/app-calendar-events.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/app-calendar.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>