export default function Head() {
	return (
		<>
			{/* Meta data */}
			<meta charSet="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
			<meta name="description" content="Rygel Dash Theme" />
			<meta name="author" content="Rygel Technology Solutions" />
			<meta name="keywords" content="codeigniter admin template" />

			{/* Title */}
			<title>HomeCare Dashboard</title>

			{/* Favicon */}
			<link rel="icon" href="/assets/images/brand/favicon.ico" type="image/x-icon" />

			{/* Bootstrap css */}
			<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />

			{/* Style css */}
			<link rel="stylesheet" href="/assets/css/style.css" />

			{/* Dark css */}
			<link rel="stylesheet" href="/assets/css/dark.css" />

			{/* Skins css */}
			<link rel="stylesheet" href="/assets/css/skins.css" />

			{/* Animate css */}
			<link rel="stylesheet" href="/assets/css/animated.css" />

			{/* Sidemenu css */}
			<link id="theme" rel="stylesheet" href="/assets/css/sidemenu.css" />

			{/* P-scroll bar css */}
			<link rel="stylesheet" href="/assets/plugins/p-scrollbar/p-scrollbar.css" />

			{/* Icons css */}
			<link rel="stylesheet" href="/assets/plugins/web-fonts/icons.css" />
			<link rel="stylesheet" href="/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" />
			<link rel="stylesheet" href="/assets/plugins/web-fonts/plugin.css" />

			{/* INTERNAL CSS START */}
			{/* Select2 css */}
			<link rel="stylesheet" href="/assets/plugins/select2/select2.min.css" />
			{/* Fullcalendar css */}
			<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.css" />
			<link rel="stylesheet" href="/assets/plugins/fullcalendar/fullcalendar.print.min.css" media="print" />
			{/* INTERNAL CSS END */}
            
            {/* INTERNAL CSS START Menu*/}
            <link rel="stylesheet" href="/assets/plugins/jvectormap/jqvmap.css" />
            <link rel="stylesheet" href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" />
            <link rel="stylesheet" href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
            {/* INTERNAL CSS END */}
		</>
	);
}
