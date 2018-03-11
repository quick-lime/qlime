<div class="col-md-5" style="margin-bottom: 20px;">
					<canvas id="pilgubChart" width="400" height="400"></canvas>
				</div>
				<!-- END CHART -->

				<!-- POLING SUARA -->
				<div class="col-md-7">
					<span>Data Masuk : 123 dari 234 TPS</span>
					<div class="progress">
					    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					      70%
					    </div>
					 </div>
					<div class="table-responsive">
						<table class="table" style="border: 1px solid #ccc;">
							<tbody>
								<tr>
									<td>
										<p id="number">1.</p>
									</td>
									<td width="100">
										<img src="<?php echo base_url() ?>assets/img/1.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Edy Rahmayadi</p>
										<p>Musa Rajekshah</p>
										</div>
									</td>
									<td>
										<p id="percen"><!-- <?php echo $pc1; ?> -->%</p></p>
										<p id="suara"><!-- <?php echo $paslon1; ?> --> Suara</p>
									</td>
								</tr>
								<tr>
									<td>
										<p id="number">2.</p>
									</td>
									<td>
										<img src="<?php echo base_url() ?>assets/img/2.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Djarot Saful Hidayat</p>
										<p>Sihar Sitorus</p>
										</div>
									</td>
									<td>
										<p id="percen"><!-- <?php echo $pc2; ?> -->%</p></p>
										<p id="suara"><!-- <?php echo $paslon2; ?> --> Suara</p>
									</td>
								</tr>
								<tr>
									<td>
										<p id="number">3.</p>
									</td>
									<td>
										<img src="<?php echo base_url() ?>assets/img/3.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Jopinus Ramli Saragih</p>
										<p>Ance Selian</p>
										</div>
									</td>
									<td>
										<p id="percen"><!-- <?php echo $pc3; ?> -->%</p></p>
										<p id="suara"><!-- <?php echo $paslon3; ?> --> Suara</p>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<div id="total">TOTAL</div>
									</td>
									<td>
										<p id="percen">100%</p></p>
										<p id="suara"><!-- <?php echo $total; ?> --> Suara</p>
									</td>
								</tr>
							</tbody>
						</table>
						</div>