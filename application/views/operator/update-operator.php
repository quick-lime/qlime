<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<?php echo form_open('operator/proses_edit?id='.$detail['id']); ?>
								  	<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>NIK (KTP)</label>
								  		<input type="number" class="form-control" placeholder="NIK KTP" value="<?php echo $detail['nik'] ?>" required="" name="nik">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Nama Lengkap</label>
								  		<input type="text" class="form-control" value="<?php echo $detail['nama'] ?>" placeholder="Nama Lengkap" required="" name="nama">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>No Hp</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['nohp'] ?>" placeholder="No Handphone" required="true" name="nohp">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Username</label>
								  		<input type="text" class="form-control" value="<?php echo $detail['username'] ?>" placeholder="Username" required="true" name="username" >
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Password</label>
								  		<input type="password" class="form-control" value="<?php echo $detail['password'] ?>" placeholder="Password" required="" name="password" value="123">
								  	</div>
								    <div class="form-group col-md-4">
								    	<label>Jenis Kelamin</label> 
								    	<select class="form-control"  name="jeniskelamin" required="true">
								    		<option value="" disabled selected class="hide">- Pilih Jenis Kelamin -</option>
									    	<?php
								    			$data_jenis = array('Laki-Laki','Perempuan');
								    			foreach ($data_jenis as $value) {
								    				if($value == $detail['jeniskelamin']){
								    					echo "<option value='".$value."' selected>".$value."</option>";
								    				}else{
								    					echo "<option value='".$value."'>".$value."</option>";
								    				}
								    			}
								    		?>
									    </select>
								    </div>
								    <div class=" form-group col-md-12">
								  		<label>Alamat</label>
								  		<textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $detail['alamat'] ?></textarea>
								  	</div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>operator" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Data Operator</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									<?php echo form_close(); ?>
						    	</div>
							</div>
						</div>
					</div>
			<!-- END MAIN CONTENT -->