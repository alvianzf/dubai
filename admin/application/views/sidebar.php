<?php
include "config/config.php";
$sidebar_id=1;
$sql = "SELECT * FROM sidebar where sidebar_id = $sidebar_id";
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
						Siteinfo
					</h4>
				</div>
				
				<!-- Panel Content -->
				
				<div id="collapse3" class="panel-collapse collapse in">
					<div class="panel-body">
						
						<!-- Form Simple - Light-->
						<form class="form-theme form-dark" action="updateSidebar" method="post">
							<div class="row pad-top-30">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Sidebar Custom</label>
										<input type="hidden" name="sidebar_id" value="<?php echo $rsql['sidebar_id']; ?>">
										<textarea class="form-control form-text-area" name="sidebar_custom"><?php echo $rsql['sidebar_custom']; ?></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<label class="control-label">Sidebar Contact</label>
										<textarea class="form-control form-text-area" name="sidebar_contact"><?php echo $rsql['sidebar_contact']; ?></textarea>
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

