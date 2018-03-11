<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
				<h3 class="panel-title"><?php echo $title; ?></h3>
				</div>
				  <div class="panel-body">
				  	<a href="<?php echo base_url(); ?>tps/add"><button class="btn btn-info btn-action"><span class="fa fa-plus"> Tambah</span></button></a>
					<a href="#"><button class="btn btn-danger btn-action"><span class="fa fa-refresh"> Refresh</span></button></a>
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th>No.</th>
									<th>Nomor TPS</th>
									<th>Alamat</th>
									<th>Daftar Pemilih Tetap</th>
									<th></th>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>TPS001</td>
										<td>Jln. Sunggal, No.0, Medan Sunggal, Sumatera Utara</td>
										<td>123.456</td>
										<td>
											<button class="btn btn-warning btn-xs"><span class="fa fa-edit"></span></button>
											<button class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></button>
										</td>
									</tr>
								</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->