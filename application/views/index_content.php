
	<?php if (isset($content_page)) { ?>
        <?php if ($content_page == "index_content") { ?>
			<?php 
				if(strtotime(date("H:i:s")) < strtotime($show_time['first_result_time']) ) {
					$time = abs(strtotime(date("H:i:s")) - strtotime($show_time['first_result_time'])); 
					$timeinms = $time * 1000;
			?>	
				<script>
					setTimeout(function() {
						location.reload();
					}, <?php echo $timeinms; ?>);
				</script>
				<?php } else {
					$timeinms = 0;
				}
				?>
				<?php 
			if(strtotime(date("H:i:s")) < strtotime($show_time['second_result_time']) ) {
					$time = abs(strtotime(date("H:i:s")) - strtotime($show_time['second_result_time'])); 
					$timeinms = $time * 1000;
			?>	
				<script>
					setTimeout(function() {
						location.reload();
					}, <?php echo $timeinms; ?>);
				</script>
				<?php } else {
					$timeinms = 0;
				}
				?>
				<?php 
			if(strtotime(date("H:i:s")) < strtotime($show_time['third_result_time']) ) {
					$time = abs(strtotime(date("H:i:s")) - strtotime($show_time['third_result_time'])); 
					$timeinms = $time * 1000;
			?>	
				<script>
					setTimeout(function() {
						location.reload();
					}, <?php echo $timeinms; ?>);
				</script>
				<?php } else {
					$timeinms = 0;
				}
				?>
		      <div class="container">
		      	<header class="jumbotron my-4">
		      		<div class="container">
		      			<div class="row">
		      				<div class="col-lg-4" style="float:left;">
		      					<div class="information">
		      						<h2 style="margin-bottom:0px;font-size: 24px;text-align:center;">Winning Result</h2>
		      						<?php 
										foreach ($product_data_1st as $data_1st) {
										?>

									<p style="font-size: 11px;text-align:center;">
										<?php $date=date_create($data_1st['tanggal']); ?>
										<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) >= strtotime($show_time['preparation_time']) ) { ?>
											<?php  echo date_format($date,"d-m-Y");?> | <span style="text-transform:capitalize;"><?php echo $data_1st['hari']; ?></span>

										<?php } else {?>
											<?php  echo date_format(date_create($product_data_day_before['tanggal']),"d-m-Y");?> | <span style="text-transform:capitalize;"><?php echo $product_data_day_before['hari']; ?></span>
										<?php } ?>

									</p>
								</div>
						
									<div class="prize">
										<div style="text-align:center;">
											<h2 class="h2_result">GRAND JACKPOT</h2>
										</div>
										<div class="result" style="text-align:center;">
											
											<?php 
											if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) >= strtotime($show_time['preparation_time']) ) { ?>
											
												<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) < strtotime($show_time['first_result_time']) ) { ?>
													
													
												<?php } elseif(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['first_result_time']) ){ ?>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>	
												<?php } else {?>	
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
													<span class="ball_result"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>	
												<?php } ?>
											<?php } else {?>
												<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
											<?php } ?>
										</div>
										<?php } ?>
									  <div class="border_prize"></div>
									  <!-- End of first Prize -->
									  <?php
									  foreach ($product_data_1st as $data_2nd) {
									  	?>
									  		<div style="text-align:center;">
									  			<h2 class="h2_result">MAJOR</h2>
									  		</div>
											<div class="result" style="text-align:center;">
											<?php 
												if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) >= strtotime($show_time['preparation_time']) ) { ?>
												
													<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) < strtotime($show_time['second_result_time'])) { ?>
													
													<?php } elseif(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['second_result_time'])){ ?>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,0,-3);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,1,-2);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,2,-1);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,3,1);?></span>	
													<?php } else {?>	
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,0,-3);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,1,-2);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,2,-1);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_2'];echo $namafile= substr($data1,3,1);?></span>	
													<?php } ?>
												<?php } else {?>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_2'];echo $namafile= substr($data1,0,-3);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_2'];echo $namafile= substr($data1,1,-2);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_2'];echo $namafile= substr($data1,2,-1);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_2'];echo $namafile= substr($data1,3,1);?></span>
												<?php } ?>

											</div>
											<?php } ?>
												<div class="border_prize"></div>
												 <!-- End of Second Prize -->
												<?php
												foreach ($product_data_1st as $data_3rd) {
									  		?>
									  		<div style="text-align:center;">
									  			<h2 class="h2_result">MINOR</h2>
									  		</div>
											<div class="result" style="text-align:center;">
												<?php 
												if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) >= strtotime($show_time['preparation_time']) ) { ?>
													<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) < strtotime($show_time['third_result_time'])) { ?>

													<?php } elseif(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['third_result_time'])){ ?>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,0,-3);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,1,-2);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,2,-1);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,3,1);?></span>	
													<?php } else {?>	
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,0,-3);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,1,-2);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,2,-1);?></span>
														<span class="ball_result"><?php $data1=$data_1st['hasil_3'];echo $namafile= substr($data1,3,1);?></span>	
													<?php } ?>
													
												<?php } else {?>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
													<span class="ball_result"><?php $data1=$product_data_day_before['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
												<?php } ?>
											</div>

											</div>
											<?php } ?>
											<!-- End of Third Prize -->
										</div>
										<div class="col-lg-8">
				
				<table class="table table-theme">
								<thead class="bg-yellow" style="background:#faca39 !important">
									<tr>
										<th>
											Periode
										</th>
										<th class="th_mobile">
											Day
										</th>
										<th>
											Date
										</th>
										<th>
											Result
										</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										foreach ($product_data as $data_1st) {
											$date=date_create($data_1st['tanggal']);
									?>
										<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['preparation_time']) ) { ?>
											<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) < strtotime($show_time['first_result_time']) ) { ?>


											<?php } elseif(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['first_result_time']) ){ ?>
												<tr>
													<td>
													<?php echo $data_1st['hasil_id']; ?>
													</td>
													<td class="td_mobile">
														<span style="text-transform:capitalize;"><?php echo $data_1st['hari']; ?></span>
													</td>
													<td class="td_date">
														<?php 
															
															echo date_format($date,"d-m-Y");?> 	
													</td>
													<td>
														<div class="result_page" style="text-align:center;">
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
														</div>
													</td>
												</tr>
											<?php } else { ?>
												<tr>
													<td>
													<?php echo $data_1st['hasil_id']; ?>
													</td>
													<td class="td_mobile">
														<span style="text-transform:capitalize;"><?php echo $data_1st['hari']; ?></span>
													</td>
													<td class="td_date">
														<?php 
															echo date_format($date,"d-m-Y");?> 	
													</td>
													<td>
														<div class="result_page" style="text-align:center;">
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
														</div>
													</td>
												</tr>
											<?php } ?>
										<?php } else { ?>
											<?php if(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) < strtotime($show_time['first_result_time']) ) { ?>


											<?php } elseif(date_format($date,"d") == date("d") && strtotime(date("H:i:s")) > strtotime($show_time['first_result_time']) ){ ?>
												<tr>
													<td>
													<?php echo $data_1st['hasil_id']; ?>
													</td>
													<td class="td_mobile">
														<span style="text-transform:capitalize;"><?php echo $data_1st['hari']; ?></span>
													</td>
													<td class="td_date">
														<?php 
															
															echo date_format($date,"d-m-Y");?> 	
													</td>
													<td>
														<div class="result_page" style="text-align:center;">
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
														</div>
													</td>
												</tr>
											<?php } else { ?>
												<tr>
													<td>
													<?php echo $data_1st['hasil_id']; ?>
													</td>
													<td class="td_mobile">
														<span style="text-transform:capitalize;"><?php echo $data_1st['hari']; ?></span>
													</td>
													<td class="td_date">
														<?php 
															echo date_format($date,"d-m-Y");?> 	
													</td>
													<td>
														<div class="result_page" style="text-align:center;">
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,0,-3);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,1,-2);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,2,-1);?></span>
															<span class="ball_result_page"><?php $data1=$data_1st['hasil_1'];echo $namafile= substr($data1,3,1);?></span>
														</div>
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
									<?php } ?>
								</tbody>
							</table>	
						</div> 

			</div>
		</div>
	</header>
</div>

<?php } ?>

<?php } ?>
