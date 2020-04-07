<?php

if(!$this->session->has_userdata('username')){
	redirect(base_url(). 'AdminLogin');
}

?>
<!DOCTYPE html>
<html lang="en">
	
<head>

        <!-- Meta Tags -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>DataTables | Nucleus</title>
		<meta name="description" content="Premium HTML5 Template">
		<meta name="keywords" content=" HTML5, Premium Template, Nucleus Theme">
		<meta name="author" content="Amazyne Themes">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Favicon -->

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Loading Google Fonts --> 

		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

		<!-- Loading Third Party Styles --> 

		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/et-line/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/elegant-icons/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/pe-icon-7-stroke/css/helper.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/nivo-lightbox/css/nivo-lightbox.css" /> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/nivo-lightbox/themes/default/default.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/animate/css/animate.css"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/owl/css/owl.carousel.css"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/owl/css/owl.theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/form-validation/css/formValidation.min.css">	

		<!-- Loading Page's Style -->
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>third-party/datatables/media/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>third-party/datatables/media/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/date-range-picker/css/daterangepicker.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/pick-a-color/css/pick-a-color-1.2.3.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>third-party/bootstrap-multiselect/css/bootstrap-multiselect.css">
		
		<!-- Loading Theme's Styles -->

		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">

		<!-- Script for IE < 9 -->

		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>third-party/respond/js/respond.min.js"></script>
		<![endif]-->

		
	
	</head>
	
	<!-- Remove "header-side" if side menu isn't present | Remove "in" if you want the side-header closed by default -->
	
	<body class="header-side in dark-body">

		<!-- Page Loader

		<div class="loader">
			<div class="spinner"></div>
		</div> 
 -->
		<!-- Page Content -->

		<div class="page-content">

            <!-- Header - Add "light" for light menu | "nav-dark-blue" for dark-blue accent | "nav-blue" for blue accent | "nav-blue-grey" for blue-grey accent |
				 "nav-green" for green accent | "nav-dark-green" for dark-green accent | "nav-purple" for purple accent | "nav-red" for red accent |
				  "nav-Orange" for Orange accent | "nav-yellow" for yellow accent -->