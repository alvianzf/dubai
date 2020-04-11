<?php
	foreach($sites as $rsql) {
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
						Siteinfo
					</h4>
				</div>
				
				<!-- Panel Content -->
				
				<div id="collapse3" class="panel-collapse collapse in">
					<div class="panel-body">
						
						<!-- Form Simple - Light-->
						<form class="form-theme form-dark" action="updateSiteinfo" method="post">
							<div class="row pad-top-30">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Title</label>
										<input type="hidden" name="siteinfo_id" value="<?php echo $rsql['siteinfo_id']; ?>">
										<textarea class="form-control form-text-area" name="siteinfo_title"><?php echo $rsql['siteinfo_title']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Description</label>
										<textarea class="form-control form-text-area" name="siteinfo_desc"><?php echo $rsql['siteinfo_desc']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Keyword</label>
										<textarea class="form-control form-text-area" name="siteinfo_keyword"><?php echo $rsql['siteinfo_keyword']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Favicon</label>
										<textarea class="form-control form-text-area" name="siteinfo_favicon"><?php echo $rsql['siteinfo_favicon']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Logo</label>
										<textarea class="form-control form-text-area" name="siteinfo_logo"><?php echo $rsql['siteinfo_logo']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Logo Bank</label>
										<textarea class="form-control form-text-area" name="siteinfo_logo_bank"><?php echo $rsql['siteinfo_logo_bank']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Pools Name</label>
										<textarea class="form-control form-text-area" name="siteinfo_namepools"><?php echo $rsql['siteinfo_namepools']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Heading Content</label>
										<textarea class="form-control form-text-area" name="siteinfo_heading"><?php echo $rsql['siteinfo_heading']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">How To Purchase</label>
										<textarea class="form-control form-text-area" name="siteinfo_how_to"><?php echo $rsql['siteinfo_how_to']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Notice</label>
										<textarea class="form-control form-text-area" name="siteinfo_notice"><?php echo $rsql['siteinfo_notice']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Analitik</label>
										<textarea class="form-control form-text-area" name="siteinfo_analitics"><?php echo $rsql['siteinfo_analitics']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Google Verifikasi</label>
										<textarea class="form-control form-text-area" name="siteinfo_verification"><?php echo $rsql['siteinfo_verification']; ?></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Footer</label>
										<textarea class="form-control form-text-area" name="siteinfo_footer"><?php echo $rsql['siteinfo_footer']; ?></textarea>
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

<?php }  ?>

