<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				</div>
				  <div class="panel-body">
				  	<a href="<?php echo base_url(); ?>operator/add"><button class="btn btn-info btn-action"><span class="fa fa-plus"> Tambah</span></button></a>
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="10px">No</th>
									<th>NIK</th>
									<th>Nama</th>
									<th width="100px">Jenis Kelamin</th>
									<th width="110px">No Hp</th>
									<th width="70px">Level</th>
									<th width="50px">Wilayah</th>
									<th width="50px"></th>
								</thead>
								<tbody>
									<?php
										$i=0;
										foreach ($list as $value) {
											$i++;
											$wilayah = $value['idtps'];
											if($wilayah == ""){ $wilayah="-";} 
											echo"
											<tr>
												<td>".$i."</td>
												<td>".$value['nik']."</td>
												<td>".$value['nama']."</td>
												<td>".$value['jeniskelamin']."</td>
												<td>".$value['nohp']."</td>
												<td>".$value['level']."</td>
												<td align='center'>".$wilayah."</td>
												<td>
													<a href='".base_url('operator/update?id='.$value['id'])."' class='btn btn-warning btn-xs'><span class='fa fa-edit'></span></a>
													<a href='".base_url('operator/proses_hapus?id='.$value['id'])."' class='btn btn-danger btn-xs'><span class='fa fa-trash'></span></a>
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