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
								<form id="myForm" class="form-theme form-line" action="<?php echo base_url(); ?>Home/addResultConsSubmit" method="post">
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Date</label>
												<input id="singleDatePicker" type="text" class="form-control" value="<?php echo date("Y-m-d"); ?>" name="tanggal">

												<?php
								               	$tanggal = date("Y-m-d");
												$day = date('D', strtotime($tanggal));
												$dayList = array(
													'Sun' => 'Sunday',
													'Mon' => 'Monday',
													'Tue' => 'Tuesday',
													'Wed' => 'Wednesday',
													'Thu' => 'Thursday',
													'Fri' => 'Friday',
													'Sat' => 'Saturday'
												);
												$hari= $dayList[$day];
												
										?>
										<input type="hidden" name="hari" value="<?php echo $hari; ?>">
										<?php  date_default_timezone_set('Asia/Jakarta'); ?>
												<input type="hidden" name="waktu" value="<?php echo date("Y-m-d h:i:s") ?>">
											</div>
										</div> 
									</div>
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Pertama</label>
												<input type="text" class="form-control" name="hasil_1" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 2</label>
												<input type="number" class="form-control" name="hasil_2" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 3</label>
												<input type="text" class="form-control" name="hasil_3" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 4</label>
												<input type="text" class="form-control" name="hasil_4" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 5</label>
												<input type="text" class="form-control" name="hasil_5" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 6</label>
												<input type="text" class="form-control" name="hasil_6" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 7</label>
												<input type="text" class="form-control" name="hasil_7" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 8</label>
												<input type="text" class="form-control" name="hasil_8" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 9</label>
												<input type="text" class="form-control" name="hasil_9" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 10</label>
												<input type="text" class="form-control" name="hasil_10" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 11</label>
												<input type="text" class="form-control" name="hasil_11" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Tokoh Ke 12</label>
												<input type="text" class="form-control" name="hasil_12" maxlength="4" required="" value="<?php echo (rand(1000,9999)); ?>"/>
											</div>
										</div>
										<!--
										<div class="col-sm-12">
											<input type="submit" class="btn btn-theme form-submit">
										</div>
										-->
										<script>
										    document.getElementById("myForm").submit();
										</script>
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
