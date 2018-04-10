
<!doctype html>
<html lang="en">

<head>
	<title >QLime &mdash; <?php echo $title; ?></title>
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
	<meta name="theme-color" content="#d3242b">
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
	  <div class="container">
	    <div class="navbar-header">	
	      <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo3.png"></a>
	    </div>
	  </div>
	</nav>
	<!-- END NAVBAR -->

	<!-- CONTENT -->
	<div class="container">
		<h3>Data Wilayah</h3>
		<div class="table-responsive">
			<table id="data" class="table table-striped table-hover">
				<thead>
					<th>No.</th>
					<th>Kabupaten</th>
					<th>Kecamatan</th>
					<th>Kelurahan</th>
					<th>Jlh TPS</th>
					<th>Jlh Relawan</th>
					<th>ID Wilayah</th>
				</thead>
				<tbody>
					<?php
					$i=0;
					foreach ($list as $value) {
					$jlh_relawan = count($this->tps_model->jlh_relawan_tps($value['id']));
					$i++;
					echo"
					<tr>
						<td>".$i."</td>
						<td>".$value['kabupaten']."</td>
						<td>".$value['kecamatan']."</td>
						<td>".$value['kelurahan']."</td>
						<td>".$value['jlhtps']."</td>
						<td>".$jlh_relawan."</td>
						<td>".$value['id']."</td>
					</tr>";
					}
					?>
				</tbody>
			</table>	
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
</body>

</html>
