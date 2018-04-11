<!doctype html>
<html lang="en">

<head>
	<title>QLime &mdash; <?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#d3242b">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/logo-q.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#"><img src="<?php echo base_url(); ?>assets/img/logo2.png" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="log">Administrator <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-edit"> Ganti Password</span></a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="<?php echo base_url('welcome/logout'); ?>"><span class="fa fa-sign-out"></span> Logout</a></li>
			          </ul>
			        </li>
			    </ul>

			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div id="scroll">
				<nav>
					<ul class="nav">
						<li class="header" style="text-align:center; margin: 15px 0;">MAIN NAVIGATION</li>
						
						<!-- LEvel Login Super -->
						<?php 
						
						$level = $this->session->userdata('level');
						if($level == "super"){ ?>
						<li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo base_url(); ?>suara/view"><i class="fa fa-bar-chart"></i> <span>Suara Masuk</span></a></li>
						<li><a href="<?php echo base_url(); ?>tps"><i class="fa fa-archive"></i> <span>Data Wilayah</span></a></li>
						<li><a href="<?php echo base_url(); ?>operator"><i class="fa fa-users"></i> <span>Data Pengguna</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#setting"><i class="fa fa-gears"></i> <span>Pengaturan</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> <span>Ganti Password</span></a></li>
						<li><a href="<?php echo base_url('welcome/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
						<?php } ?>
						<!-- End Login Super -->
						
						<!-- Level Login Admin/ Operator -->
						<?php if($level == "admin"){ ?>
						<li><a href="<?php echo base_url(); ?>suara/view"><i class="fa fa-bar-chart"></i> <span>Suara Masuk</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> <span>Ganti Password</span></a></li>
						<li><a href="<?php echo base_url('welcome/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
						<?php } ?>
						<!-- end Login ADmin -->
						<!-- Level Login Relawan -->
						<?php if($level == "relawan"){ ?>
						<li><a href="<?php echo base_url(); ?>suara"><i class="fa fa-archive"></i> <span>Data Suara</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> <span>Ganti Password</span></a></li>
						<li><a href="<?php echo base_url('welcome/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
						<?php } ?>
						<!-- End Login Relawan -->
					</ul>
				</nav>
			</div>
			
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">	
			<?php $this->load->view($isi); ?>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="http://akure-solusi.com" target="_blank" id="Quick Count">Quick Count</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->

	<!-- MODAL SETTING -->
	<div class="modal fade" id="setting" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-gears"></span> Pengaturan</h4>
        </div>
        <div class="modal-body">
        	<form>
        	<div class="form-group">
		  		<label>Tanggal Pilkada</label>
		  		<input type="date" name="" class="form-control">
		  	</div>
		  	<div class="form-group">
		  		<label>Tanggal Hari Kesempatan</label>
		  		<input type="date" name="" class="form-control">
		  	</div>
		  	<div class="form-group">
		  		<label>Pendaftaran</label>
		  		<label class="switch">
				  <input type="checkbox" checked>
				  <span class="slider round"></span>
				</label>
		  	</div>
		  	<hr>
		  	<button type="submit" class="btn btn-info"><span class="fa fa-save"> Simpan</span></button>
	        <button type="reset" class="btn btn-danger"><span class="fa fa-remove"> Batal</span></button>
	        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->

	<!-- MODAL FORGOT PASSWORD -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-edit"></span> Ganti Password</h4>
        </div>
        <div class="modal-body">
        	<form>
	          <div class="form-group">
	          	<label>Password Lama</label>
	          	<input type="Password" name="#" class="form-control">
	          </div>
	          <div class="form-group">
	          	<label>Password Baru</label>
	          	<input type="Password" name="#" class="form-control">
	          </div>
	          <div class="form-group">
	          	<label>Konfirmasi Password Baru</label>
	          	<input type="Password" name="#" class="form-control">
	          </div>
	          <button type="submit" class="btn btn-info"><span class="fa fa-save"> Simpan</span></button>
	          <button type="reset" class="btn btn-danger"><span class="fa fa-remove"> Batal</span></button>
          	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL  -->
        
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/klorofil-common.js"></script>
	<!-- DATA TABLES -->
	<script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables/buttons.bootstrap.min.js" type="text/javascript"></script>
        <script>
	    $(document).ready(function() {
	        $('#data').DataTable({
	            "oLanguage": {
	                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
	                "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
	                "sInfoFiltered": "(difilter dari _MAX_ total data)",
	                "sZeroRecords": "Pencarian tidak ditemukan",
	                "sEmptyTable": "Data kosong",
	                "sLoadingRecords": "Harap Tunggu...",
	                "oPaginate": {
	                    "sPrevious": "Prev",
	                    "sNext": "Next"
	                }
	            }
	        });
	    });
	</script>

	<script type="text/javascript">
		$(function(){
    $('#scroll').slimScroll({
	    height: 'auto',
	    size: '13px',
	    color:'#bbb'
	    });
	});
	</script>
</body>

</html>