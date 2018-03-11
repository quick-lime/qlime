<?php
	$paslon1 = $data['tpaslon1'];
	$paslon2 = $data['tpaslon2'];
	$paslon3 = $data['tpaslon3'];
	$total = $paslon1 + $paslon2 + $paslon3;
	$pc1 = number_format(100 / $total * $paslon1 , 2);
	$pc2 = number_format(100 / $total * $paslon2 , 2);
	$pc3 = number_format(100 / $total * $paslon3 , 2);
?>
<!doctype html>
<html lang="en">

<head>
	<title>QLime &mdash; Quick Count 2018</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- DataTables -->
	<link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<!-- ICONS -->
	<meta name="theme-color" content="#dd2d6f">
	<link rel="icon" sizes="192x192" href="<?php echo base_url() ?>assets/img/logo-q.png">
	<!-- CHART -->
	<script src="<?php echo base_url() ?>assets/js/Chart.js"></script>
	<script src="<?php echo base_url() ?>assets/js/Chart.bundle.js"></script>
	<script type="text/javascript">
    var auto_refresh = setInterval(
    function () {
       $('#load_content').load('<?php echo base_url() ?>welcome/data').fadeIn("slow");
    }, 2000);
    
</script>
</head>

<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo base_url('login') ?>"><img src="<?php echo base_url() ?>assets/img/logo3.png"></a>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- <div class="bg-header">
			
	</div> -->
	<div class="container">
		<div class="goal">
				<h3>PILKADA PROVINSI SUMATERA UTARA 2018</h3>
				<h4>Hasil Hitung TPS Provinsi Sumatera Utara</h4>
		</div>
		
		<div class="panel panel-headline">
			<div class="panel-body">
				<!-- CHART -->
				<div class="col-md-5" style="margin-bottom: 20px;">
					<canvas id="pilgubChart" width="400" height="400"></canvas>
				</div>
				<!-- END CHART -->

				<!-- POLING SUARA -->
				<div class="col-md-7">
					<span>Data Masuk : 123 dari 234 TPS</span>
					<div class="progress">
					    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					      70%
					    </div>
					 </div>
					<div class="table-responsive">
						<table class="table" style="border: 1px solid #ccc;">
							<tbody>
								<tr>
									<td>
										<p id="number">1.</p>
									</td>
									<td width="100">
										<img src="<?php echo base_url() ?>assets/img/1.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Edy Rahmayadi</p>
										<p>Musa Rajekshah</p>
										</div>
									</td>
									<td>
										<p id="percen"><?php echo $pc1; ?>%</p></p>
										<p id="suara"><?php echo $paslon1; ?> Suara</p>
									</td>
								</tr>
								<tr>
									<td>
										<p id="number">2.</p>
									</td>
									<td>
										<img src="<?php echo base_url() ?>assets/img/2.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Djarot Saful Hidayat</p>
										<p>Sihar Sitorus</p>
										</div>
									</td>
									<td>
										<p id="percen"><?php echo $pc2; ?>%</p></p>
										<p id="suara"><?php echo $paslon2; ?> Suara</p>
									</td>
								</tr>
								<tr>
									<td>
										<p id="number">3.</p>
									</td>
									<td>
										<img src="<?php echo base_url() ?>assets/img/3.png" width="80">
									</td>
									<td>
										<div id="name">
										<p>Jopinus Ramli Saragih</p>
										<p>Ance Selian</p>
										</div>
									</td>
									<td>
										<p id="percen"><?php echo $pc3; ?>%</p></p>
										<p id="suara"><?php echo $paslon3; ?> Suara</p>
									</td>
								</tr>
								<tr>
									<td colspan="3">
										<div id="total">TOTAL</div>
									</td>
									<td>
										<p id="percen">100%</p></p>
										<p id="suara"><?php echo $total; ?> Suara</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END POLING -->
				<!-- LIST KABUPATEN -->
				<div class="col-md-12">
					<h4>Hasil Perhitungan per Wilayah</h4>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<th width="30">No.</th>
								<th>Kabupaten/Kota</th>
								<th>Calgub 1</th>
								<th>Calgub 2</th>
								<th>Calgub 3</th>
								<th>Data Masuk</th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td><a href="#">Kabupaten Asahan</a></td>
									<td id="center">20%</td>
									<td id="center">50%</td>
									<td id="center">30%</td>
									<td id="center">123/234 TPS</td>
								</tr>
								<tr>
									<td>2.</td>
									<td><a href="#">Kabupaten Batubara</a></td>
									<td id="center">20%</td>
									<td id="center">50%</td>
									<td id="center">30%</td>
									<td id="center">123/234 TPS</td>
								</tr>
								<tr>
									<td>3.</td>
									<td><a href="#">Kabupaten Dairi</a></td>
									<td id="center">20%</td>
									<td id="center">50%</td>
									<td id="center">30%</td>
									<td id="center">123/234 TPS</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END LIST -->
			</div>
		</div>
	</div>
	<!-- END CONTENT -->

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

	<!-- CHART -->
	<script>
	var pilgub = document.getElementById("pilgubChart");

	Chart.defaults.global.defaultFontSize = 16;

	var pilgubData = {
	    labels: [
	        "Edy Rahmayadi - Musa R",
	        "Djarot S - Sihar Sitorus",
	        "JR Saragih - Ance Selian",
	    ],
	    datasets: [
	        {
	            data: [<?php echo $pc1; ?>, <?php echo $pc2; ?>, <?php echo $pc3; ?>],
	            backgroundColor: [ 
	                "#e6ed31",
	                "#f23078",
	                "#31a9ed",
	            ]
	        }]
	};

	var pieChart = new Chart(pilgub, {
	  type: 'pie',
	  data: pilgubData
	});
	</script>

	<!-- EXAMPLE -->

	<!-- CHART -->
</body>

</html>
