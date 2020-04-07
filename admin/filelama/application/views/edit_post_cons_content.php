<?php if(isset($product_data)) { ?>
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
								<form id="myForm" class="form-theme form-line" action="<?php echo base_url(); ?>Home/editResultConsSubmit" method="post">
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<input type="hidden" name="hasil_id" value="<?php echo $product_data->hasil_id; ?>">
												<label style="text-align:center !important;" class="control-label">Date</label>
												<input id="singleDatePicker" type="text" class="form-control" value="<?php echo $product_data->tanggal; ?>" name="tanggal">
												<input type="hidden" name="hari" value="<?php echo $product_data->hari; ?>">
												<input type="hidden" name="waktu" value="<?php echo $product_data->waktu; ?>">
											</div>
										</div> 
									</div>
									
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.1</label>
												<input type="text" class="form-control" name="hasil_1" maxlength="4" required="" value="<?php echo $product_data->hasil_1; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.2</label>
												<input type="number" class="form-control" name="hasil_2" maxlength="4" required="" value="<?php echo $product_data->hasil_2; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.3</label>
												<input type="text" class="form-control" name="hasil_3" maxlength="4" required="" value="<?php echo $product_data->hasil_3; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.4</label>
												<input type="text" class="form-control" name="hasil_4" maxlength="4" required="" value="<?php echo $product_data->hasil_4; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.5</label>
												<input type="text" class="form-control" name="hasil_5" maxlength="4" required="" value="<?php echo $product_data->hasil_5; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">S.P.6</label>
												<input type="text" class="form-control" name="hasil_6" maxlength="4" required="" value="<?php echo $product_data->hasil_6; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 1</label>
												<input type="text" class="form-control" name="hasil_7" maxlength="4" required="" value="<?php echo $product_data->hasil_7; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 2</label>
												<input type="text" class="form-control" name="hasil_8" maxlength="4" required="" value="<?php echo $product_data->hasil_8; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 3</label>
												<input type="text" class="form-control" name="hasil_9" maxlength="4" required="" value="<?php echo $product_data->hasil_9; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 4</label>
												<input type="text" class="form-control" name="hasil_10" maxlength="4" required="" value="<?php echo $product_data->hasil_10; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 5</label>
												<input type="text" class="form-control" name="hasil_11" maxlength="4" required="" value="<?php echo $product_data->hasil_11; ?>"/>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label style="text-align:center !important;" class="control-label">Cs 6</label>
												<input type="text" class="form-control" name="hasil_12" maxlength="4" required="" value="<?php echo $product_data->hasil_12; ?>"/>
											</div>
										</div>

										<div class="col-sm-12">
											<input type="submit" class="btn btn-theme form-submit">
										</div> 
											<!--
										<script>
										    document.getElementById("myForm").submit();
										</script>-->
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


<?php } ?>