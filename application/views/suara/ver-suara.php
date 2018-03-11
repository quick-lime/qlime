<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<form>
									<img class="thumbnail zoom img-responsive center"  width="400" src="<?php echo base_url(); ?>assets/img/example.jpg">
								  	<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>Paslon 1</label>
								  		<input type="text" class="form-control" placeholder="Paslon 1" required="" name="#">
								  	</div>
								    <div class="form-group col-md-4">
								  		<label>Paslon 2</label>
								  		<input type="text" class="form-control" placeholder="Paslon 2" required="" name="#">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Paslon 3</label>
								  		<input type="text" class="form-control" placeholder="Paslon 3" required="" name="#">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Suara Tidak Sah</label>
								  		<input type="text" class="form-control" placeholder="Suara Tidak Sah" required="" name="#">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>DPT</label>
								  		<input type="text" class="form-control" placeholder="DPT" required="" name="#">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Kesempatan Memilih</label>
								  		<input type="text" class="form-control" placeholder="Kesempatan Memilih" required="" name="#">
								  	</div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" class="btn btn-info" style="margin-bottom: 10px;"><span class="fa fa-send"></span> Kirim</button>
								    	<a href="<?php echo base_url(); ?>suara/view" class="btn btn-warning" style="margin-bottom: 10px;""><span class="fa fa-list"></span> Data Verifikasi</a>
								    	<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;"><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									</form>
						    	</div>
							</div>
						</div>
					</div>
			<!-- END MAIN CONTENT -->
			<script>
				$('input[type="text"]').on({
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