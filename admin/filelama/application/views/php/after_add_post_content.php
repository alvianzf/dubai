<script>
			function refreshAt(hours, minutes, seconds) {
			var now = new Date();
			var then = new Date();

			if(now.getHours() > hours ||
			   (now.getHours() == hours && now.getMinutes() > minutes) ||
			    now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
			    then.setDate(now.getDate() + 1);
			}
			then.setHours(hours);
			then.setMinutes(minutes);
			then.setSeconds(seconds);

			var timeout = (then.getTime() - now.getTime());
			setTimeout(function() { window.location.reload(true); }, timeout);
			}
		</script>

<body onload="refreshAt(10,50,00)">

<?php 
include "config/config.php";
$sql = "SELECT * FROM waktu_tbl";
$qsql = $koneksi->query($sql);
$rsql = $qsql->fetch_assoc();

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('h:i:s');
$tanggal1 = $rsql['1st_prize'];
echo $tanggal1;


foreach($product_data as $row) { ?>

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
								<form id="myForm" class="form-theme form-line" action="<?php echo base_url(); ?>Post/addResult1stSubmit" method="post">
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">Date</label>
												<input id="singleDatePicker" type="text" class="form-control" value="<?php echo $row['tanggal']; ?>" name="tanggal">
											</div>
										</div> 
									</div>
										
									
									<div class="row pad-top-30">
										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">1st Prize</label>
												<input type="text" class="form-control" name="hasil_1" maxlength="6" required="" value="<?php echo $row['hasil_1']; ?>"/>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">2nd Prize</label>
												<input type="text" class="form-control" name="hasil_2" maxlength="6" required="" value="<?php echo $row['hasil_2']; ?>"/>
											</div>
										</div>

										<div class="col-sm-2">
											<div class="form-group">
												<label class="control-label">3rd Prize</label>
												<input type="text" class="form-control" name="hasil_3" maxlength="6" required="" value="<?php echo $row['hasil_3']; ?>"/>
											</div>
										</div>
										
										<?php date_default_timezone_set('Asia/Jakarta'); ?>
										<input type="hidden" name="waktu" value="<?php echo date("Y-m-d h:i:s") ?>">
										
										 <div class="col-sm-12">
											<input type="submit" class="btn btn-theme form-submit">
										</div>  
											<!-- <script>
										    document.getElementById("myForm").submit();
											</script> -->
										
										
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

s
<?php } ?>
</body>
