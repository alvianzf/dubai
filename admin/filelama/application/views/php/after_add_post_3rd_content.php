

<div class="section-admin">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-12">
					<div class="panel-group panel-icon-right theme-panel">
						<!-- Panel 1 -->
						<div class="panel panel-default">
							<!-- Panel Heading -->
							<div class="panel-heading" data-toggle="collapse" data-target="#collapse4">
								<h4 class="panel-title chevron accordion-toggle">
									Add Post
								</h4>
							</div>
							<!-- Panel Content -->
							<div id="collapse4" class="panel-collapse collapse in">
								<div class="panel-body">
									<!-- Form Simple - Grey -->
								<form id="myForm" class="form-theme form-line" action="<?php echo base_url(); ?>Home/addResult1stSubmit" method="post">
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Date</label>
												<input id="singleDatePicker" type="text" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="tanggal">
											</div>
										</div> 
									</div>
										
									
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">1st Prize</label>
												<input type="text" class="form-control" name="hasil_1" maxlength="6" required="" value="<?php echo (rand(100000,999999)); ?>"/>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">2nd Prize</label>
												<input type="text" class="form-control" name="hasil_2" maxlength="6" required="" value="<?php echo (rand(100000,999999)); ?>"/>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">3rd Prize</label>
												<input type="text" class="form-control" name="hasil_3" maxlength="6" required="" value="<?php echo (rand(100000,999999)); ?>"/>
											</div>
										</div>
										
										<?php date_default_timezone_set('Asia/Jakarta'); ?>
										<input type="hidden" name="waktu" value="<?php echo date("Y-m-d h:i:s") ?>">
										
										<div class="col-sm-12">
											<input type="submit" class="btn btn-theme form-submit">
										</div> 
										
										
										
									</div>
								</form>
								</div>
							</div>
						</div>
					</div> <!--End of Accordion - Chevron Right -->		
				</div>
			</div>
		</div>
	</div>
</div><!-- End of Page Content -->
