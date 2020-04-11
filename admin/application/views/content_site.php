<?php
foreach($contents as $rsql ){
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
						<form class="form-theme form-dark" action="updateCustomSite" method="post">
							<div class="row pad-top-30">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Custom Site</label>
										<input type="hidden" name="content_id" value="<?php echo $rsql['content_id']; ?>">
										<textarea class="form-control form-text-area" name="custom_site" style='min-height:400px;'><?php echo $rsql['custom_site']; ?></textarea>
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

<?php } ?>

