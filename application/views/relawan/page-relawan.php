<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				</div>
				  <div class="panel-body">
				  	<a href="<?php echo base_url(); ?>relawan/add"><button class="btn btn-info btn-action"><span class="fa fa-plus"> Tambah</span></button></a>
					<a href="#"><button class="btn btn-danger btn-action"><span class="fa fa-refresh"> Refresh</span></button></a>
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="10px">No.</th>
									<th >NIK</th>
									<th>Nama</th>
									<th width="100px">Jenis Kelamin</th>
									<th>No Hp</th>
									<th width="10px">TPS</th>
									<th width="50px"></th>
								</thead>
								<tbody>
								<?php
									$i=0;
									foreach ($list as $value) {
										$i++;
										echo"
										<tr>
											<td>".$i."</td>
											<td>".$value['nik']."</td>
											<td>".$value['nama']."</td>
											<td>".$value['jeniskelamin']."</td>
											<td>".$value['nohp']."</td>
											<td>".$value['tps']."</td>
											<td>
												<a href='".base_url('relawan/update?id='.$value['id'])."' class='btn btn-warning btn-xs'><span class='fa fa-edit'></span></a>
												<a href='".base_url('relawan/proses_hapus?id='.$value['id'])."' class='btn btn-danger btn-xs'><span class='fa fa-trash'></span></a>
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