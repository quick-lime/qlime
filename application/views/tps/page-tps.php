<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				</div>
				  <div class="panel-body">
				  	<a href="<?php echo base_url(); ?>tps/add"><button class="btn btn-info btn-action"><span class="fa fa-plus"> Import Data</span></button></a>
					<a href="#"><button class="btn btn-danger btn-action"><span class="fa fa-refresh"> Refresh</span></button></a>
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th>No.</th>
									<th>Kabupaten</th>
									<th>Kecamatan</th>
									<th>Kelurahan</th>
									<th>Jlh TPS</th>
									<th>Jlh Relawan</th>
									<th>ID Wilayah</th>
								</thead>
								<tbody>
									<?php
									$i=0;
									foreach ($list as $value) {
									$jlh_relawan = count($this->tps_model->jlh_relawan_tps($value['id']));
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['kabupaten']."</td>
										<td>".$value['kecamatan']."</td>
										<td>".$value['kelurahan']."</td>
										<td>".$value['jlhtps']."</td>
										<td>".$jlh_relawan."</td>
										<td>".$value['id']."</td>
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