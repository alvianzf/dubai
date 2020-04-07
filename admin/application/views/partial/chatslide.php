			<!-- Sliding Chat : add "chat-light" along with "chat-slide" for light chat window-->
            
			<div class="chat-slide">
				<a href="#" class="chat-trigger"><i class="arrow_right"></i></a>
						
				<!-- Tabs -->
				<ul class="nav tab-theme tab-underline tab-light">
					<li class="active">
						<a href="#tab-chat" data-toggle="tab"><i class="pe-7s-chat"></i></a>
					</li>
					<li>
						<a href="#tab-settings" data-toggle="tab"><i class="pe-7s-config"></i></a>
					</li>
				</ul>
				<div class="tab-theme">
					<div class="tab-content">
						<div id="tab-chat" class="tab-pane active">
							<div class="list-pane">
								<div class="chat-top container-fluid">
									<div class="row">
										<div class="col-xs-8">
											<h5>Friends List</h5>
										</div>
										<div class="col-xs-2 chat-top-icon">
											<a href="#"><i class="icon_plus"></i></a>
										</div>
										<div class="col-xs-2 chat-top-icon">
											<a href="#"><i class="pe-7s-more"></i></a>
										</div>
									</div>
								</div>
								
								<!-- Search -->
								
								<div class="form-theme form-search">
									<div class="input-group">
										<input class="form-control" name="search" id="search" type="text">
										<span class="input-group-btn">
											<a class="btn" href="#"><i class="icon_search"></i></a>
										</span>
									</div>
								</div>
								<div class="slim-scroll-content-friends">
									<div class="slim-scroll-div">
									
										<!-- Friend List -->
										
										<ul class="friend-list">
											<li class="unread">
												<a class="message-trigger" href="#">
													<div class="media">
														<div class="media-left friend-online">
															<img alt="img" class="media-object" src="images/team/woman-test.jpg">
															<i></i>
														</div>
														<div class="media-body">
															<h4 class="media-heading">Jane Doe</h4>
															<small>Nulla vel metus</small>
														</div>
													</div>
													<span class="badge">1</span>
												</a>
											</li>
											<li>
												<a class="message-trigger" href="#">
													<div class="media">
														<div class="media-left friend-busy">
															<img alt="img" class="media-object" src="images/team/3-square.jpg">
															<i></i>
														</div>
														<div class="media-body">
															<h4 class="media-heading">John Doe</h4>
															<small>Nulla vel metus</small>
														</div>
													</div>
												</a>
											</li>
											<li class="unread">
												<a class="message-trigger" href="#">
													<div class="media">
														<div class="media-left friend-online">
															<img alt="img" class="media-object" src="images/team/man-test-2.jpg">
															<i></i>
														</div>
														<div class="media-body">
															<h4 class="media-heading">James Doe</h4>
															<small>Nulla vel metus</small>
														</div>
													</div>
													<span class="badge">3</span>
												</a>
											</li>
											<li>
												<a class="message-trigger" href="#">
													<div class="media">
														<div class="media-left friend-away">
															<img alt="img" class="media-object" src="images/team/2-square.jpg">
															<i></i>
														</div>
														<div class="media-body">
															<h4 class="media-heading">June Doe</h4>
															<small>Nulla vel metus</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a class="message-trigger" href="#">
													<div class="media">
														<div class="media-left friend-busy">
															<img alt="img" class="media-object" src="images/team/man-test.jpg">
															<i></i>
														</div>
														<div class="media-body">
															<h4 class="media-heading">Jack Doe</h4>
															<small>Nulla vel metus</small>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="message-pane">
								<div class="container-fluid message-top">
									<div class="row">
										<div class="col-xs-2">
											<a href="#" class="message-trigger"><i class="arrow_left"></i></a>
										</div>
										<div class="col-xs-8 name">
											John
										</div>
										<div class="col-xs-2">
											<a href="#" class="message-trigger"><i class="pe-7s-more"></i></a>
										</div>
									</div>
								</div>
								
								<div class="slim-scroll-content-messages">
									<div class="slim-scroll-div">
								
										<!-- Messages -->
										
										<ul class="message-list">
											<li>
												<div class="message-body">
													<p class="message">Hi, how are you?</p>
													<p class="message">Could you give me a detailed report on the project we had discussed asap?</p>
												</div>
												<img alt="img" class="message-img" src="images/team/woman-test.jpg">
											</li>
											<li class="message-right">
												<div class="message-body">
													<p class="message">Sure, I'll send it to you in a few minutes.</p>
												</div>
												<img alt="img" class="message-img" src="images/team/man-test.jpg">
											</li>
											<li>
												<div class="message-body">
													<p class="message">Thanks.</p>
												</div>
												<img alt="img" class="message-img" src="images/team/woman-test.jpg">
											</li>
										</ul>
									</div>
								</div>
								<div class="form-theme form-big">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button"><i class="icon_plus"></i></button>
											</span>
											<input type="text" class="form-control" placeholder="Enter message">
										</div>
									</div>
								</div>
							</div>						
						</div>
						<div id="tab-settings" class="tab-pane">
							<h4>General Settings</h4>
							<div class="slim-scroll-content-settings">
								<div class="slim-scroll-div">
									<ul class="settings-list">	
										<li>
											<label class="setting-option">Notifications</label>
											<div class="toggle">
												<input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-1" checked>
												<label class="toggle-label" for="set-toggle-1"></label>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</li>
										<li>
											<label class="setting-option">Emails</label>
											<div class="toggle">
												<input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-2">
												<label class="toggle-label" for="set-toggle-2"></label>
											</div>
											<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</li>
										<li>
											<label class="setting-option">Enable SMS Alerts</label>
											<div class="toggle">
												<input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-3">
												<label class="toggle-label" for="set-toggle-3"></label>
											</div>
											<p>Consectetur adipisicing elit.</p>
										</li>
										<li>
											<label class="setting-option">Show Tasks</label>
											<div class="toggle">
												<input type="checkbox" name="toggle" class="toggle-checkbox" id="set-toggle-4" checked>
												<label class="toggle-label" for="set-toggle-4"></label>
											</div>
											<p>Leiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</li>	
									</ul>
								</div>
							</div>
						</div>
					</div><!-- End of Tabs -->
				</div> 
			</div><!-- End of Chat -->