<?= $this->include('layout/head'); ?>
	</head>
<?= $this->include('layout/menu'); ?>

		<!-- Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body text-center">
						<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="80" viewBox="0 0 24 24" width="80"><path d="M4.47 19h15.06L12 5.99 4.47 19zM13 18h-2v-2h2v2zm0-4h-2v-4h2v4z" opacity=".3"/><path d="M1 21h22L12 2 1 21zm3.47-2L12 5.99 19.53 19H4.47zM11 16h2v2h-2zm0-6h2v4h-2z"/></svg>
						<h4 class="text-primary fs-20 font-weight-semibold">Session Timeout</h4>
						<progress id="custom-bar" class="custom-progress mb-4 wd-70p mt-3" max="100" value="0">0%</progress>
						<p class="mb-4 mx-4">You're being timed out due to inactivity. Please choose to stay signed in or to logoff. Otherwise, you will logged off automatically..</p>
						<a class="btn btn-light px-5" href="<?php echo base_url('pages/login-1'); ?>">Log Out</a>
						<a aria-label="Close" class="btn btn-primary px-5 text-white" data-dismiss="modal">Stay Logedin</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Session Time Out</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Session TimeOut</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Session Time Out Demo
								</div>
							</div>
							<div class="card-body">
								<p class="mg-b-20">The Basic Collapse Accordion Styles of Nixlot template</p>
								<p class="mg-b-10">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Session js -->
		<script src="<?php echo base_url('public/assets/js/session.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>

