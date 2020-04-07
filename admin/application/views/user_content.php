<div class="container-fluid">    	
	<div class="row">
		<div class="col-sm-12">
			<div class="admin-content">
				<h4 class="text-center">Change Password</h4>
				
				
				<!--Form with Live Validation & Feedback Icons-->
				
				<form id="liveForm" method="post" action="<?php echo base_url(); ?>Home/changePassword" class="form-theme">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">

								<label class="control-label">Current Password</label>
								<input type="password" class="form-control" name="oldpassword" required="required"/>
							</div>
						</div>
						<div class="col-sm-12	">
							<div class="form-group">
								<label class="control-label">New Password</label>
								<input type="password" class="form-control" name="newpassword" required="required"/>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label class="control-label">Re-type New Password</label>
								<input type="password" class="form-control" name="newpasswordconf" required="required"/>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-theme">Submit</button>
								<span class="form-loader">
									<i class="fa fa-spinner fa-spin"></i>
								</span>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<?php if(isset($_GET['error1'])){
									echo "Data Tidak Cocok";
								}
								?>
								<?php if(isset($_GET['success'])){
									echo "Password Telah Berganti";
								}
								?>
							</div>
						</div>
					</div>
					<div id="formResponse" class="form-response alert"></div>
				</form><!--End of Form with Live Validation & Feedback Icons-->
			</div>
		</div>
	</div>
</div>