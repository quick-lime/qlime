<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<form>
								  	<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>No. TPS</label>
								  		<input type="text" class="form-control" placeholder="NIK KTP" required="" name="tps">
								  	</div>
								    <div class="form-group col-md-4">
								    	<label>Kabupaten</label> 
								    	<select class="form-control"  name="jeniskelamin" required="" name="kabupaten">
								    		<option value="" disabled selected class="hide">- Pilih Kabupaten -</option>
									    	<?php
								    			$data_jenis = array('Medan Kota','Medan Sunggal');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class="form-group col-md-4">
								    	<label>Kecamatan</label> 
								    	<select class="form-control"  name="jeniskelamin" required="" name="kecamatan">
								    		<option value="" disabled selected class="hide">- Pilih Kecamatan -</option>
									    	<?php
								    			$data_jenis = array('-');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class=" form-group col-md-12">
								  		<label>Alamat</label>
								  		<textarea class="form-control" placeholder="Alamat"></textarea>
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Daftar Pemilih Tetap</label>
								  		<input type="text" class="form-control" placeholder="Daftar Pemilih Tetap" required="" name="DPT">
								  	</div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>tps" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Data TPS</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									</form>
						    	</div>
							</div>
						</div>
					</div>
			<!-- END MAIN CONTENT -->