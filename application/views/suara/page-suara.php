<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				</div>
				  <div class="panel-body">
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="10px">No</th>
									<th>Kabupaten</th>
									<th>Kecamatan</th>
									<th>Kelurahan</th>
									<th>TPS</th>
									<th>Relawan</th>
									<th width="10px">Verifikasi</th>
								</thead>
								<tbody>
								<?php
									$i=0;
									foreach ($list as $value) {
									$relawan = $this->suara_model->detail_relawan($value['idrelawan']);
									$tps = $this->suara_model->detail_tps($relawan['idtps']);
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$tps['kabupaten']."</td>
										<td>".$tps['kecamatan']."</td>
										<td>".$tps['kelurahan']."</td>
										<td>".$value['notps']."</td>
										<td>".$relawan['nama']."</td>
										<td align='center'>
											<a href='".base_url()."suara/ver?id=".$value['id']."'><button class='btn btn-info btn-xs' ><span class='fa fa-send'></span></button></a>
										</td>
									</tr>";
									}
								?>
								</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->