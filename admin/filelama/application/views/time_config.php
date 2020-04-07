<?php
	include "config/config.php";
	$sql = "SELECT * FROM waktu_tbl where waktu_id = 1";
	$qsql = $koneksi->query($sql);
	$rsql =$qsql->fetch_assoc();
	do{
?>
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
									<form id="myForm" class="form-theme form-line" action="<?php echo base_url(); ?>Home/updateTimeSubmit" method="post">
										<div class="row pad-top-30">
											<div class="col-sm-2">
												<div class="form-group">
													<input id="" type="hidden" name="waktu_id" value="1">
													<label class="control-label">1st Prize</label>
													
													<input id="" type="time" class="form-control" value="<?php echo $rsql['1st_prize']; ?>" name="1st_prize">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">2nd Prize</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['2nd_prize']; ?>" name="2nd_prize">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">3rd Prize</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['3rd_prize']; ?>" name="3rd_prize">
												</div>
											</div> 
										</div>
										<div class="row pad-top-30">
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.1</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_1']; ?>" name="spec_1">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.2</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_2']; ?>" name="spec_2">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.3</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_3']; ?>" name="spec_3">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.4</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_4']; ?>" name="spec_4">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.5</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_5']; ?>" name="spec_5">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">S.P.6</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['spec_6']; ?>" name="spec_6">
												</div>
											</div> 
										</div>
										<div class="row pad-top-30">
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 1</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_1']; ?>" name="cons_1">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 2</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_2']; ?>" name="cons_2">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 3</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_3']; ?>" name="cons_3">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 4</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_4']; ?>" name="cons_4">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 5</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_5']; ?>" name="cons_5">
												</div>
											</div> 
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">Cons 6</label>
													<input id="" type="time" class="form-control" value="<?php echo $rsql['cons_6']; ?>" name="cons_6">
												</div>
											</div> 
											<div class="col-sm-12">
												<input type="submit" class="btn btn-theme form-submit">
											</div>  
										</div>
										<!-- 
										<script>
											document.getElementById("myForm").submit();
										</script> 
										-->
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


<?php } while($rsql =$qsql->Fetch_assoc()) ?>

