<?php
include "config/config.php";
$sql = "SELECT * FROM content where content_id = 1";
$qsql = $koneksi->query($sql);
$rsql =$qsql->fetch_assoc();
do{
?>
<!--  -->
<div class="section-admin container-fluid">
	<div class="row">	
		<div class="col-md-12">

		<!--Accordion - Chevron Right -->
		<!-- For MULTIPLE TABS OPEN - NO NEED for id="..." in the below div of panel-group AND NO NEED for data-parent="..." in panel-heading div -->

		<div class="panel-group panel-icon-right theme-panel">

			<!-- Panel 1 -->
			
			<div class="panel panel-default">
				
				<!-- Panel Heading -->
				
				<div class="panel-heading" data-toggle="collapse" data-target="#collapse3">
					<h4 class="panel-title chevron accordion-toggle">
						Article
					</h4>
				</div>
				
				<!-- Panel Content -->
				
				<div id="collapse3" class="panel-collapse collapse in">
					<div class="panel-body">
						
						<!-- Form Simple - Light-->
						<form class="form-theme form-dark" action="updateContent" method="post">
							<div class="row pad-top-30">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Resposible Gambling</label>
										<input type="hidden" name="content_id" value="<?php echo $rsql['content_id']; ?>">
										<textarea class="form-control form-text-area" name="responsible_content"><?php echo $rsql['responsible_content']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">About Us</label>
										<textarea class="form-control form-text-area" name="about_us_content"><?php echo $rsql['about_us_content']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Contact Us</label>
										<textarea class="form-control form-text-area" name="contact_us_content"><?php echo $rsql['contact_us_content']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Home-1</label>
										<textarea class="form-control form-text-area" name="home_1_content"><?php echo $rsql['home_1_content']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Home-2</label>
										<textarea class="form-control form-text-area" name="home_2_content"><?php echo $rsql['home_2_content']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Home-3</label>
										<textarea class="form-control form-text-area" name="home_3_content"><?php echo $rsql['home_3_content']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Home-4</label>
										<textarea class="form-control form-text-area" name="home_4_content"><?php echo $rsql['home_4_content']; ?></textarea>
									</div>
								</div>
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

<?php } while($rsql =$qsql->Fetch_assoc()) ?>

