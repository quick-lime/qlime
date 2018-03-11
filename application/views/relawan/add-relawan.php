<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<?php echo form_open('relawan/proses_tambah'); ?>
								  	<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>NIK (KTP)</label>
								  		<input type="text" class="form-control" placeholder="NIK KTP" required="" name="nik">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Nama Lengkap</label>
								  		<input type="text" class="form-control" placeholder="Nama Lengkap" required="" name="nama">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>No Hp</label>
								  		<input type="number" class="form-control" placeholder="No Handphone" required="" name="nohp">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Password</label>
								  		<input type="password" class="form-control" placeholder="Nama Lengkap" required="" name="password" value="123">
								  	</div>
								    <div class="form-group col-md-4">
								    	<label>Jenis Kelamin</label> 
								    	<select class="form-control"  name="jeniskelamin" required="true">
								    		<option value="" disabled selected class="hide">- Pilih Jenis Kelamin -</option>
									    	<?php
								    			$data_jenis = array('Laki-Laki','Perempuan');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class="form-group col-md-4">
								    	<label>No TPS</label> 
								    	<input type="number" class="form-control" placeholder="No TPS" required="true" name="notps" value="">
								    </div>
								    <div class=" form-group col-md-12">
								  		<label>Alamat</label>
								  		<textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
								  	</div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>relawan" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Data Relawan</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									<?php echo form_close(); ?>
						    	</div>
							</div>
						</div>
					</div>
			<!-- END MAIN CONTENT -->