<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
			</div>
			 <div class="panel-body">
			 	<div class="col-md-12" style="margin-bottom:  10px; margin-top: -15px;"">
			 		<ol class="breadcrumb">
						<li><a href="#"><?php echo $wilayah['kabupaten'] ?></a></li>
						<li><a href="#"><?php echo $wilayah['kecamatan'] ?></a></li>
						<li><a href="#"><?php echo $wilayah['kelurahan'] ?></a></li>
						<li class="active">NO TPS : <?php echo "".$view['notps'].""; ?></li>
					</ol>
			 		<span id="notps"></span>
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
				 		<p id="hasil"><?php echo "".$view['kesempatan'].""; ?> Pemilih</p>
			 		</div>
				</div>
				<div class="col-md-12">
					<a href="<?php echo base_url(); ?>suara/ralat_suara?id=<?php echo $view['id'] ?>" class="btn btn-warning" style="margin-bottom: 10px;"><span class="fa fa-edit"> Ralat Data Suara</span></a>
				<?php
					if($view['kesempatan'] >= 1){
						$kesempatan = $this->suara_model->cek_isi_kesempatan($view['id']);
						if($kesempatan >= 1){
							echo"<a href='".base_url()."suara/ralat_kesempatan?idsuara=".$view['id']."' class='btn btn-success' style='margin-bottom: 10px;''><span class='fa fa-edit'> Ralat Suara Kesempatan</span></a>";
						}else{
							echo"<a href='".base_url()."suara/input_kesempatan?id=".$view['id']."' class='btn btn-success' style='margin-bottom: 10px;'><span class='fa fa-edit'> Input Suara Kesempatan</span></a>";
						}
					}
				?>
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