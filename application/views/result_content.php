<div id="post-10" class="container content-main clearfix post-10 page type-page status-publish hentry">
	<div class="grid">
		<article class="column span-9">
			<header class="section-title large post-header">
				<h1 class="heading">Home Page</h1>
					</header>
					<div class="story post-story">
						<div class="div-result">
							<h5 class="title-page-result">Lotto Results / نتائج اليانصيب</h5>
							<div class="table-result">
								<div id="footable_parent_490" class="footable_parent ninja_table_wrapper loading_ninja_table wp_table_data_press_parent semantic_ui ">
									<!-- Content here -->
									<div class="no-padding">
										<table class="table_result table-theme">
											<thead class="bg-yellow" style="background:#023e73 !important">
												<tr>
													<th>
														Periode
													</th>
													<th class="th_mobile_result">
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
													foreach ($product_data_result as $data_1st) {
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
									
									<!-- End Content -->
								</div>
								<div class="text-center">
									<?php echo $links; ?>
								</div>
							</div>
						
						</div>
						