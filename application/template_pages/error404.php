<?= $this->include('layout/custom-head'); ?>
	</head>
	<body class="h-100vh light-mode default-sidebar">
		<div class="page">
			<div class="page-content">
				<div class="container text-center ">
					<img src="<?php echo base_url('public/assets/images/svgs/404.svg'); ?>" alt="img" class="w-30 mb-6">
					<h1 class="h3  mb-3 font-weight-bold">Sorry, an error has occured, Requested Page not found!</h1>
					<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
					<a class="btn btn-primary" href="<?php echo base_url('pages/index'); ?>"><i class="fe fe-arrow-left-circle mr-1"></i>Back to Home</a>
				</div>
			</div>
		</div>
<?= $this->include('layout/custom-footer'); ?>	
	</body>
</html>