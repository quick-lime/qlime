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
									<th width="20">No.</th>
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
										<td>1.</td>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->
