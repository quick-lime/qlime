<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default" style="margin-top: -10px; border-top: 3px solid #aaa;">
					    	<div class="panel-body"  style="padding-top: 10px;">
								<?php echo form_open('suara/proses_edit?id='.$detail['id']); ?>
									<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>Paslon 1</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon1'] ?>" placeholder="Paslon 1" required="" name="no1">
								  	</div>
								    <div class="form-group col-md-4">
								  		<label>Paslon 2</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon2'] ?>"  placeholder="Paslon 2" required="" name="no2">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Paslon 3</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon3'] ?>"  placeholder="Paslon 3" required="" name="no3">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>Suara Tidak Sah</label>
								  		<input type="number" class="form-control"  value="<?php echo $detail['tidaksah'] ?>" placeholder="Suara Tidak Sah" required="" name="tidaksah">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>DPT</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['dpt'] ?>"  placeholder="DPT" required="" name="dpt">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>Kesempatan Memilih</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['kesempatan'] ?>"  placeholder="Kesempatan Memilih" required="" name="kesempatan">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>Nomor TPS</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['notps'] ?>"  placeholder="Kesempatan Memilih" required="" name="notps">
								  	</div>
								  	</div>

								  	<!-- FORM KESEMPATAN -->

								  	<div class="col-md-12" style="margin:10px 0"><h4 style="font-weight:bold;">FORM DATA KESEMPATAN</h4></div>
								  	<div class="form-group">
								  	<div class="form-group col-md-3">
								  		<label>Paslon 1</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon1'] ?>" placeholder="Paslon 1" required="" name="no1">
								  	</div>
								    <div class="form-group col-md-3">
								  		<label>Paslon 2</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon2'] ?>"  placeholder="Paslon 2" required="" name="no2">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>Paslon 3</label>
								  		<input type="number" class="form-control" value="<?php echo $detail['calon3'] ?>"  placeholder="Paslon 3" required="" name="no3">
								  	</div>
								  	<div class="form-group col-md-3">
								  		<label>Suara Tidak Sah</label>
								  		<input type="number" class="form-control"  value="<?php echo $detail['tidaksah'] ?>" placeholder="Suara Tidak Sah" required="" name="tidaksah">
								  	</div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" value="update" name='update' class="btn btn-success" style="margin-bottom: 10px;"><span class="fa fa-send" ></span> Perbarui Data suara</button>
								    	<a href="<?php echo base_url(); ?>suara/view" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Data Suara</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
								  	<?php echo form_close(); ?>
						    	</div>
							</div>
						</div>
					</div>
			<!-- END MAIN CONTENT -->
			<script>
				$('input[type="number"]').on({
			    focus: function() {
			        if (!$(this).data('disabled')) this.blur()
			    },
			    dblclick: function() {
			        $(this).data('disabled', true);
			        this.focus()
			    },
			    blur: function() {
			        $(this).data('disabled', false);
			    }
			});
			</script>