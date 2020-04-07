<!DOCTYPE html>
<html lang="en">
	
<head>
		
		<!-- Meta Tags -->
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>Login</title>
		
		
		<!-- Favicon -->

		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Loading Google Fonts --> 

		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

		<!-- Loading Third Party Styles --> 

		<link rel="stylesheet" href="<?php echo base_url();?>third-party/bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/et-line/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/elegant-icons/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/pe-icon-7-stroke/css/helper.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/nivo-lightbox/css/nivo-lightbox.css" /> 
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/nivo-lightbox/themes/default/default.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/animate/css/animate.css"> 
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/owl/css/owl.carousel.css"> 
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/owl/css/owl.theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>third-party/form-validation/css/formValidation.min.css">

		<!-- Loading Theme's Styles -->

		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">

		<!-- Script for IE < 9 -->

		<!--[if lt IE 9]>
		<script src="third-party/respond/js/respond.min.js"></script>
		<![endif]-->
		<style>
			a.button p{
				margin:0px !important;font-size:10px;color:red;
			}


			
		</style>

	</head>
	<body style="background-color:#1f232b;">

		

		<!-- Page Content -->

		<div class="page-content no-margin-top">
				
			<div class="pad-top-100 pad-bot-100" style="background-color:#1f232b;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="tab-theme login-register-tab">
								<div class="tab-content">
									<div id="tab1" class="tab-pane active">
										<div class="row">
											<div class="col-md-12">
												<h3 class="text-light mar-bot-25">Login To Your Account</h3>
												<div class="form-theme form-dark">

												<form action="<?php echo base_url();?>AdminLogin/loginSubmit" method="post">
													<div class="form-group pad-bot-15">
														<label class="control-label text-uppercase letter-spacing-3 pad-bot-5 text-lighter"><small>Username</small> <i class="icon-profile-female text-right text-lighter"></i></label>
														<input type="text" class="form-control" id="name1" name="username">
													</div>
													<div class="form-group pad-bot-15">
														<label class="control-label text-uppercase letter-spacing-3 pad-bot-5 text-lighter"><small>Password</small> <i class="icon-lock text-right text-lighter"></i></label>
														<input type="password" class="form-control" id="password1" name="password">
													</div>
													<div class="row">
														<div class="col-sm-6 pad-top-5 text-center-mobile">
															<a class="button">
																<?php echo validation_errors(); ?>
																<?php if(isset($loginerror)){ ?>
																<?php echo $loginerror; ?>
																<?php } ?> 
															</p>
															</a> 
														</div>
														<div class="col-sm-6 text-right mar-top-15-mobile text-center-mobile">
															<input type="submit" class="btn btn-dark btn-lg" value="login">
														</div>
													</div>

												</form>

																			
												</div>
											</div>
										</div>
									</div>
									
									
								</div>
							</div>
							<hr class="mar-top-25 mar-bot-25 light"/>
							
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->
		
		<!-- Loading Third Party Scripts -->

		<script src="<?php echo base_url();?>third-party/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>third-party/easing/js/jquery.easings.min.js"></script>
		<script src="<?php echo base_url();?>third-party/bootstrap/js/bootstrap.min.js"></script>	
		<script src="<?php echo base_url();?>third-party/nivo-lightbox/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo base_url();?>third-party/owl/js/owl.carousel.js"></script>
		<script src="<?php echo base_url();?>third-party/isotope/js/isotope.pkgd.min.html"></script> 
		<script src="<?php echo base_url();?>third-party/counter-up/js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url();?>third-party/form-validation/js/formValidation.js"></script>
		<script src="<?php echo base_url();?>third-party/form-validation/js/framework/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>third-party/waypoint/js/waypoints.min.js"></script>
		<script src="<?php echo base_url();?>third-party/wow/js/wow.min.js"></script>
		<script src="<?php echo base_url();?>third-party/smooth-scroll/js/smoothScroll.js"></script>
		<script src="<?php echo base_url();?>third-party/jquery-parallax/js/jquery.parallax.js"></script>
		<script src="<?php echo base_url();?>third-party/jquery-parallax/js/jquery.localscroll.min.js"></script>
		<script src="<?php echo base_url();?>third-party/jquery-parallax/js/jquery.scrollTo.js"></script>
        
		<!-- Loading Theme's Scripts -->

		<script src="<?php echo base_url();?>js/scripts.js"></script>
		<script src="<?php echo base_url();?>js/custom.js"></script>
		
		<!-- Google Analytics Tracking -->
		
		
		
    </body>

</html>