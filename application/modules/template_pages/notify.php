<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START -->
		<!-- Notifications  Css -->
		<link href="<?php echo base_url('public/assets/plugins/notify/css/jquery.growl.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/notify/css/notifIt.css'); ?>" rel="stylesheet" />
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Notifications</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notifications</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Styles Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-primary">Default</button>
											<button onclick="not2()" class="btn btn-secondary">Center</button>
											<button onclick="not3()" class="btn btn-warning">Left</button>
											<button onclick="not4()" class="btn btn-info">Center Info</button>
											<button onclick="not5()" class="btn btn-danger">Center Error</button>
											<button onclick="not6()" class="btn btn-success">Center Warning</button>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Side Alerts Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a href="#" class="btn btn-primary notice">Primary</a>
											<a href="#" class="btn btn-secondary warning">Warning</a>
											<a href="#" class="btn btn-info error">Danger</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<button type="button" class="btn btn-success mr-2" data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
											Show success
										</button>
										<button type="button" class="btn btn-info mr-2" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
											Show info
										</button>
										<button type="button" class="btn btn-warning mr-2" data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
											Show warning
										</button>
										<button type="button" class="btn btn-secondary mr-2" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
											Show secondary
										</button>
										<button type="button" class="btn btn-danger mr-2" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
											Show danger
										</button>
										<button type="button" class="btn btn-primary mr-2" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
											Show primary
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- popover js -->
		<script src="<?php echo base_url('public/assets/js/popover.js'); ?>"></script>

		<!-- Notifications js -->
		<script src="<?php echo base_url('public/assets/plugins/notify/js/rainbow.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/notify/js/sample.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/notify/js/jquery.growl.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/notify/js/notifIt.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
