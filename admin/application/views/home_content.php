<?php if(isset($_GET['error1'])){ ?>
	<body onload="myFunction()">

	<script>
		function myFunction() {
		  alert("Periksa Data Kembali");
		  window.location.replace("Home");
		}
	</script>
<?php } ?>
 <!-- Flot Basic -->
 		<div class="section-admin">
 			<div class="section-admin container-fluid">
				<div class="row">	
					<div class="col-md-12">
						<div class="admin-content">
							<div class="table-responsive">
								<table id="example2" class="table table-theme table-striped">
									<thead>
										<tr>
										  <th style="text-align:center;">No</th>
										  <th style="text-align:center;">Tanggal</th>
										  <th style="text-align:center;">Hari</th>
										  <th style="text-align:center;">1st Prize</th>
										  <th style="text-align:center;">2nd Prize</th>
										  <th style="text-align:center;">3rd Prize</th>
										  <th style="text-align:center;">Update</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($product_data as $rsql) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $i++; ?></td>
											<td style="text-align:center;"> <?php echo $rsql['tanggal']; ?></td>
										  	<td><span style="text-transform:capitalize;"><?php echo $rsql['hari']; ?></span></td>
										 	<td style="text-align:center;"><?php echo $rsql['hasil_1']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_2']; ?></td>
										 	<td style="text-align:center;"><?php echo $rsql['hasil_3']; ?></td>
										  	
										  	<td style="text-align:center;"><a href="<?php echo base_url(); ?>Home/editResult1st/<?php echo $rsql['hasil_id']; ?>">Edit</a><a href="<?php echo base_url(); ?>Home/deleteResult1st/<?php echo $rsql['hasil_id']; ?>" onclick="return confirm('Are You Sure To Delete')"> Delete</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->
			
