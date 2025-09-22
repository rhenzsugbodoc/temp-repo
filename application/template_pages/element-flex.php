<?= $this->include('layout/head'); ?>

		<!-- INTERNAL CSS START-->
		<!-- Prism Css -->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">
		<!-- INTERNAL CSS END -->
	</head>

<?= $this->include('layout/menu'); ?>

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title">Flex</h4>
							</div>
							<div class="page-rightheader ml-auto d-lg-flex d-none">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#" class="d-flex"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/><path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3"/></svg><span class="breadcrumb-icon"> Home</span></a></li>
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Flex</li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Enable Flex
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex p-3 bg-light">
											I'm a flexbox container!
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Direction
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row-reverse bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Justify Content
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row justify-content-start bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-end bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-center bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between bg-light mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-around bg-light">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Align Items
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row align-items-start bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-center bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-end bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-stretch bg-light h-9">
												<div class="p-3 bg-gray-100">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Align Self
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex flex-row bg-light h-9 mb-4">
												<div class="p-3 bg-gray-100 align-self-start">
													Flex item 1
												</div>
												<div class="p-3 bg-gray-200 align-self-center">
													Flex item 2
												</div>
												<div class="p-3 bg-gray-300 align-self-end">
													Flex item 3
												</div>
												<div class="p-3 bg-gray-400 align-self-stretch">
													Flex item 4
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Fill
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-fill">
													Flex item with a lot of content
												</div>
												<div class="p-3 bg-gray-200 flex-fill">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 flex-fill">
													Flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Grow and Shrink
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 flex-grow-1">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Auto Margins
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100">
													Flex item
												</div>
												<div class="p-3 bg-gray-200">
													Flex item
												</div>
												<div class="p-3 bg-gray-300 mg-l-auto">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Order
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="d-flex bg-light">
												<div class="p-3 bg-gray-100 order-3">
													First Item
												</div>
												<div class="p-3 bg-gray-200 order-2">
													Second Item
												</div>
												<div class="p-3 bg-gray-300 order-1">
													Third Item
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<?= $this->include('layout/footer'); ?>

		<!-- INTERNAL JS START -->
		<!-- Clipboard js -->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>
		<!-- INTERNAL JS END -->
	</body>
</html>
