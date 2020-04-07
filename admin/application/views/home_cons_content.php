<?php if(isset($_GET['error1'])){ ?>
	<body onload="myFunction()">

	<script>
		function myFunction() {
		  alert("Periksa Data Kembali");
		  window.location.replace("Cons");
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
										  <th style="text-align:center;">S.P.1</th>
										  <th style="text-align:center;">S.P.2</th>
										  <th style="text-align:center;">S.P.3</th>
										  <th style="text-align:center;">S.P.4</th>
										  <th style="text-align:center;">S.P.5</th>
										  <th style="text-align:center;">S.P.6</th>
										  <th style="text-align:center;">Cs 1</th>
										  <th style="text-align:center;">Cs 2</th>
										  <th style="text-align:center;">Cs 3</th>
										  <th style="text-align:center;">Cs 4</th>
										  <th style="text-align:center;">Cs 5</th>
										  <th style="text-align:center;">Cs 6</th>
										  <th style="text-align:center;">Edit</th>
										  <th style="text-align:center;">Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
										foreach($product_data as $rsql) { ?>
										<tr>
											<td style="text-align:center;"><?php echo $i++; ?></td>
											<td style="text-align:center;"><?php echo $rsql['tanggal']; ?></td>
										  	<td><span style="text-transform:capitalize;"><?php echo $rsql['hari']; ?></span></td>
										 	<td style="text-align:center;"><?php echo $rsql['hasil_1']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_2']; ?></td>
										 	<td style="text-align:center;"><?php echo $rsql['hasil_3']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_4']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_5']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_6']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_7']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_8']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_9']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_10']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_11']; ?></td>
										  	<td style="text-align:center;"><?php echo $rsql['hasil_12']; ?></td>
										  	<td style="text-align:center;"><a href="<?php echo base_url(); ?>Home/editResultCons/<?php echo $rsql['hasil_id']; ?>">Edit</a></td>
											<td style="text-align:center;"><a href="<?php echo base_url(); ?>Home/deleteResultCons/<?php echo $rsql['hasil_id']; ?>" onclick="return confirm('Are You Sure To Delete')"> Delete</a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<?php if(isset($_GET['page'])){
									echo"<script>window.alert('Anda Input di Tanggal Yang Sama')
    window.location='Cs'</script>";
								}
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End of Page Content -->
			