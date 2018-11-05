<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iCare</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url('assets/css/core.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/components.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/colors.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap-datetimepicker.min.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/nicescroll.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/drilldown.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/fab.min.js') ?>"></script>
	<!-- /core JS files -->

	<!-- Chart JS -->
	<script type="text/javascript" src="<?php echo base_url('assets/charts/chart.js')?>"></script>
	<!-- /Chart JS -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/d3/d3.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/d3/d3_tooltip.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/moment/moment.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/daterangepicker.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/pages/datatables_sorting.js') ?>"></script> -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/myscript.js') ?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js') ?>"></script>
	<script type="text/javascript">
		var site_url = "<?php echo site_url(); ?>";
		var base_url = "<?php echo base_url(); ?>";
	</script>

	<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/data_tables/assets.js') ?>"></script> -->

	<script type="text/javascript" src="<?php echo base_url('assets/js/ajax_requests.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/notifications/pnotify.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/components_notifications_pnotify.js') ?>"></script>

	<script type="text/javascript">
		$(".alert").delay(4000).slideUp(200, function() {
		    $(this).alert('close');
		});


	</script>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span><?php echo ucfirst($this->session->username); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="<?php echo site_url('home/profile'); ?>"><i class="icon-user-plus"></i> Edit Profile</a></li>
						<li><a href="<?= site_url('auth/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			


			