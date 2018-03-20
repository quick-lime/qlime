<style type="text/css">
	.panel-heading{
		font-weight: bold;
		text-transform: uppercase;
	}
</style>
<!--MAIN CONTENT -->
	<?php echo form_open_multipart('suara/input_suara'); ?>
	<div class="main-content">
		<div class="container-fluid">
		<h3 class="page-title">TAMBAH DATA SUARA</h3></div>
		<div class="col-md-4">
			<div class="panel panel-warning">
		      <div class="panel-heading">1. Edy Rahmayadi & Musa Rajekshah</div>
		      <div class="panel-body">
		      
			      	<div class="form-group">
			      		<input type="number" name="no1" required="true" class="form-control" placeholder="Masukan Jumlah Suara">
			      	</div>
		      	
		      </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-danger">
		      <div class="panel-heading">2. Djarot Saful Hidayat & Sihar Sitorus</div>
		      <div class="panel-body">
		      	
			      	<div class="form-group">
			      		<input type="number" name="no2" required="true" class="form-control" placeholder="Masukan Jumlah Suara">
			      	</div>
		      	
		      </div>
		    </div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
		      <div class="panel-heading">3. Jopinus Ramli Saragih & Ance Selian</div>
		      <div class="panel-body">
		      	
			      	<div class="form-group">
			      		<input type="number" name="no3" required="true" class="form-control" placeholder="Masukan Jumlah Suara">
			      	</div>
			      	
		      </div>
		    </div>
		</div>
		<div class="col-md-12">
			<div class="panel panel-headline">
				<div class="panel-body" style="padding: 20px 10px">
					<div class="form-group col-md-3">
			      		<label>Tidak Sah</label>
			      		<input type="number" name="tidaksah" required="true" class="form-control" placeholder="Tidak Sah">
			      	</div>
			      	<div class="form-group col-md-3">
			      		<label>Daftar Pemilih Tetap (DPT)</label>
			      		<input type="number" name="dpt" required="true" class="form-control" placeholder="DPT">
			      	</div>
			      	<div class="form-group col-md-3">
			      		<label>Kesempatan Memilih</label>
			      		<input type="number" name="kesempatan" required="true" class="form-control" placeholder="Kesempatan Memilih" value="0">
			      	</div>
			      	<div class="form-group col-md-3">
			      		<label>Nomor TPS</label>
			      		<input type="number" name="notps" required="true" class="form-control" placeholder="No TPS">
			      	</div>
			      	<div class="form-group col-md-12">
			      		<label>Foto Bukti</label>
			      		<input type="file" name="foto" required="true" class="form-control">
			      	</div>
			      	<div class="col-md-12">
			      		<a href=""><button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button></a>
			      		<a href=""><button class="btn btn-warning"><span class="fa fa-list"></span> Data Suara</button></a>
						<a href=""><button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button></a>
			      	</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php echo form_close(); ?>
			<!-- END MAIN CONTENT