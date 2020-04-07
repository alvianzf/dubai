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

											foreach ($product_data_result as $data_1st_result) {
									?>
										<tr>
											<td>
													<?php echo $data_1st_result['hasil_id']; ?>
											</td>
											<td class="td_mobile_result">
												<span style="text-transform:capitalize;"><?php echo $data_1st_result['hari']; ?></span>
											</td>
											<td>
												<?php 
													$date=date_create($data_1st_result['tanggal']);
													echo date_format($date,"d-m-Y");?> 	
											</td>
											<td>
												<div class="result_page" style="text-align:center;">
													<span class="ball_result_page"><?php $data13=$data_1st_result['hasil_1'];echo $namafile= substr($data13,0,-3);?></span>
													<span class="ball_result_page"><?php $data13=$data_1st_result['hasil_1'];echo $namafile= substr($data13,1,-2);?></span>
													<span class="ball_result_page"><?php $data13=$data_1st_result['hasil_1'];echo $namafile= substr($data13,2,-1);?></span>
													<span class="ball_result_page"><?php $data13=$data_1st_result['hasil_1'];echo $namafile= substr($data13,3,1);?></span>
												</div>
											</td>
										</tr>
										<?php }  ?>
										
											</tbody>
										</table>
									</div>
									<!-- End Content -->
								</div>
							</div>
						
						</div>
						