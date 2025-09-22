<?= $this->include('layout/custom-head'); ?>
	</head>
	<body class="h-100vh light-mode default-sidebar">
		<div class="page">
			<div class="page-content">
				<div class="container text-center">
					<div class="display-1 text-primary mb-5 font-weight-bold"> 5<i class="fa fa-frown-o"></i>3</div>
					<h1 class="h3  mb-3 font-weight-bold">Sorry, an error has occured, Serive Unavaliable </h1>
					<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
					<a class="btn btn-primary" href="<?php echo base_url('pages/index'); ?>"><i class="fe fe-arrow-left-circle mr-1"></i>Back to Home</a>
				</div>
			</div>
		</div>
<?= $this->include('layout/custom-footer'); ?>	
	</body>
</html>