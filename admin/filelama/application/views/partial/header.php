            <header class="navigation">	
            
                <!-- Header Wrapper -->

                <div class="main-nav dark-dropdown nav-icons-right header-icons header-right">
                    <div class="navbar navbar-default" role="navigation">
						<div class="container active">
							<div class="navbar-header">
                                <a href="#" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <ul class="bar-icon-wrapper">
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                        <li class="bar-icon"></li>
                                    </ul>
								</a>
								
								<!-- Logo -->

								<a class="logo" href="index.php">
									<img alt="image" src="<?php echo base_url(); ?>images/logo.png" />
								</a><!-- End of Logo -->
							</div>
							
							<!-- Top Bar Icons -->
							
                            <div class="navbar-icons">
								
								<!-- Left aligned icons-->
								
                                <ul class="nav navbar-nav navbar-left">
									
									<!-- Sidebar Menu Trigger -->
									
                                    <li class="menu-icon">
                                        <a class="side-menu-trigger" href="#">
                                            <ul class="bar-icon-wrapper">
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                                <li class="bar-icon"></li>
                                            </ul>
                                        </a>
                                    </li><!-- End of Sidebar Menu Trigger -->
									
									
									
										
								<!-- Right Aligned Icons -->
								
								
                            </div>                            
                        </div>
                    </div>
                    
					<!-- Search panel -->
				
                    <div class="full-screen-search">
                        <div class="search-container">
                            <div class="search-holder">
                                <form id="searchForm" method="post" action="#">
                                    <input type="text" name="search" class="search-field" placeholder="Type and Press Enter to Submit" />
                                    <input type="hidden" name="search" />
                                </form>
                            </div>
                        </div>
                    </div><!-- End of Search Panel -->

					<!-- Side Header | Remove "active" if you want side header closed by default -->

					<div class="side-header active">
						<div class="side-header-container">	
							<div class="side-header-inner-container">
								<ul class="side-header-nav">
									<li class="with-dropdown active">
										<a class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-presentation"></i><strong><?php echo $this->session->userdata('username'); ?></strong> <span class="dropdown-icon"></a>
										<ul class="menu-dropdown collapse">
											<li class="active"><a href="<?php echo base_url(). 'AdminLogin/logOut'; ?>">logout</a></li>	</ul>

									</li>

									<li class="menu-heading">Features</li>
									<li class="with-dropdown">
										<a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Result Prize <span class="dropdown-icon"></span></a>
										<ul class="menu-dropdown collapse">
											<li><a href="<?php echo base_url();?>Home/index">Prize</a></li>
											<li><a href="<?php echo base_url();?>Home/addResult1st">Add Prize</a></li>
											<li><a href="<?php echo base_url();?>Home/Cons">Cons & Special Prize</a></li>
											<li><a href="<?php echo base_url();?>Home/addCons">Add Cons & Special Prize</a></li>
										</ul>
									</li>
									
									<li class="with-dropdown">
										<a  class="menu-dropdown-link" data-toggle="collapse" aria-expanded="true" href="#"><i class="icon-browser"></i>Config<span class="dropdown-icon"></span></a>
										<ul class="menu-dropdown collapse">
											<li><a href="<?php echo base_url();?>Home/Time">Time</a></li>
											<li><a href="<?php echo base_url();?>Home/Content">Content</a></li>
											
										</ul>
									</li>
								</ul>
									
							</div>
						</div>
					</div>
				</div>
			</header> <!-- End of Header -->