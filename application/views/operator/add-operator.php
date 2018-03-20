<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title"><?php echo $title; ?></h3>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<?php echo form_open('operator/proses_tambah'); ?>
								  	<div class="form-group">
								  	<div class="form-group col-md-4">
								  		<label>NIK (KTP)</label>
								  		<input type="number" class="form-control" placeholder="NIK KTP" required="" name="nik">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Nama Lengkap</label>
								  		<input type="text" class="form-control" placeholder="Nama Lengkap" required="" name="nama">
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
								  		<label>No Hp</label>
								  		<input type="number" class="form-control" placeholder="No Handphone" required="true" name="nohp">
								  	</div>
								  	<div class="form-group col-md-4">
								  		<label>Password</label>
								  		<input type="password" class="form-control" placeholder="Password" required="" name="password" value="123">
								  	</div>
								    <div class="form-group col-md-4">
								    	<label>Level</label> 
								    	<select class="form-control"  name="level" id="level" required="true">
								    		<option value="" disabled selected class="hide">- Pilih Level Akun -</option>
									    	<?php
								    			$data_jenis = array('relawan','admin');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>

								    <div id="frelawan">
									  	<div class="form-group col-md-4">
									    	<label>Kabupaten</label> 
									    	<select class="form-control"  id="kabupaten">
									    		<option value="" disabled selected class="hide">- Pilih Kabupaten -</option>
										    	<?php
									    			foreach ($list_kabupaten as $value) {
									    				echo "<option value='".$value['kabupaten']."'>".$value['kabupaten']."</option>";
									    			}
									    		?>
										    </select>
									    </div>
									    <div class="form-group col-md-4">
									    	<label>Kecamatan</label> 
									    	<select class="form-control" id="kecamatan" >
									    		<option value="" disabled selected class="hide">- Pilih Kecamatan -</option>
										    	<!--  Isi List Kecamatan Setelah Kabupaten di pilih -->
										    </select>
									    </div>
									    <div class="form-group col-md-4">
									    	<label>Kelurahan</label> 
									    	<select class="form-control"  name="kelurahan" id="kelurahan" required="true">
									    		<option value="" disabled selected class="hide">- Pilih Kelurahan -</option>
										    	<!-- Isi list kelurahan setelah kecamatan di pilih -->
										    </select>
									    </div>
								  	</div>

								    <div class=" form-group col-md-12">
								  		<label>Alamat</label>
								  		<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
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

<script>
	$("#frelawan").hide();
	$("#kelurahan").html('');
	$( "#level" ).change(function(){
		var nilai = $(this).val();
		if(nilai == "relawan"){
			$("#frelawan").show();
			$("#kelurahan").attr('required',true);
		}else{
			$("#frelawan").hide();
			$("#kelurahan").attr('required',false);
			$("#kelurahan").html('');
		}
	});

	$("#kabupaten").change(function(){
		var kabupaten = $(this).val();
	    $.ajax({url: "<?php echo base_url(); ?>operator/get_kecamatan?kabupaten=" + kabupaten , 
	    	success: function(result){
	    		$("#kecamatan").html(result);
	    	}
		});
	});

	$("#kecamatan").change(function () {
		var kabupaten = $("#kabupaten").val();
		var kecamatan = $(this).val();
	    $.ajax({url: "<?php echo base_url(); ?>operator/get_kelurahan?kabupaten="+ kabupaten +"&kecamatan=" + kecamatan , 
	    	success: function(result){
	    		$("#kelurahan").html(result);
	    	}
		});
	});



</script>