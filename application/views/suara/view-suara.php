<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
			</div>
			 <div class="panel-body">
			 	<div class="col-md-12" style="margin-bottom:  10px;"">
			 		<span id="notps">No. TPS : <?php echo "".$view['notps'].""; ?></span>
			 		<span id="status"> Status :
			 			<?php if($view['verifikasi'] == 1){
							echo "<span style='color:green;text-align:center;font-weight:bold;'>Telah Diverifikasi</span>";
						}else{
							echo "<span style='color:red;text-align:center;font-weight:bold;'>Belum Diverifikasi";
						} ?>
			 		</span>
			 	</div>
			 	<div class="col-md-4">
			 		<div class="paslon" style="background: #F4D03F;">
				 		<h4 id="nama">EDY - MUSA</h4>
				 		<p id="hasil"><?php echo "".$view['calon1'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-4">
			 		<div class="paslon" style="background: #EC644B;">
				 		<h4 id="nama">DJAROT - SIHAR</h4>
				 		<p id="hasil"><?php echo "".$view['calon2'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-4">
			 		<div class="paslon" style="background: #6BB9F0;">
				 		<h4 id="nama">JR SARAGIH - ANCE</h4>
				 		<p id="hasil"><?php echo "".$view['calon3'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-4">
			 		<div class="paslon" style="background: #22313F;">
				 		<h4 id="nama">Suara Tidak Sah</h4>
				 		<p id="hasil"><?php echo "".$view['tidaksah'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-4">
			 		<div class="paslon" style="background: #22313F;">
				 		<h4 id="nama">Daftar Pemilih Tetap (DPT)</h4>
				 		<p id="hasil"><?php echo "".$view['dpt'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-4">
			 		<div class="paslon" style="background: #22313F;">
				 		<h4 id="nama">Kesempatan</h4>
				 		<p id="hasil"><?php echo "".$view['kesempatan'].""; ?> Suara</p>
			 		</div>
				</div>
				<div class="col-md-12">
					<a href="#" class="btn btn-info"><span class="fa fa-undo"> Kesempatan</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
		

			<!-- END MAIN CONTENT -->

<!-- <div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="50px">No TPS</th>
									<th>Paslon 1</th>
									<th>Paslon 2</th>
									<th>Paslon 3</th>
									<th>Tidak Sah</th>
									<th>DPT</th>
									<th>Menunggu</th>
									<th>Verifikasi</th>
								</thead>
								<tbody>
									<tr>
										<td><?php echo "".$view['notps'].""; ?></td>
										<td><?php echo "".$view['calon1'].""; ?> Suara</td>
										<td><?php echo "".$view['calon2'].""; ?> Suara</td>
										<td><?php echo "".$view['calon3'].""; ?> Suara</td>
										<td><?php echo "".$view['tidaksah'].""; ?> Suara</td>
										<td><?php echo "".$view['dpt'].""; ?> Suara</td>
										<td><?php echo "".$view['kesempatan'].""; ?> Suara</td>
										<td><?php if($view['verifikasi'] == 1){
												echo "<span style='color:green;text-align:center;font-weight:bold;'>Success</span>";
											}else{
												echo "<span style='color:red;text-align:center;font-weight:bold;'>Pending";
											} ?>
										</td>
									</tr>
								</tbody>
							</table>	
						</div> -->