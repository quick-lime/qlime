<?php
	$paslon1 = $data['tpaslon1'];
	$paslon2 = $data['tpaslon2'];
	$paslon3 = $data['tpaslon3'];
	$total = $paslon1 + $paslon2 + $paslon3;
	if($total > 0){
		$pc1 = number_format(100 / $total * $paslon1 , 2);
		$pc2 = number_format(100 / $total * $paslon2 , 2);
		$pc3 = number_format(100 / $total * $paslon3 , 2);
	}
?>
<!doctype html>
<html lang="en">

<head>
	<title >QLime &mdash; Quick Count 2018</title>
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
	      <button type="button" class="navbar-toggle" id="custom-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span>
	        <span class="icon-bar" id="custom-icon"></span> 
	      </button>		
	      <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/img/logo3.png"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="menu_r" id="ayam">Hasil per Wilayah</span></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="goal">
		<h3>Hitung Cepat Hasil Pilkada</h3>
		<h4>Pilkada Sumatera Utara 27 Juni 2018</h4>
	</div>
	<div class="container">
		<div class="col-lg-4" style="margin-bottom: 20px;">
			<img src="<?php echo base_url() ?>assets/img/edysihar.png" class="img-responsive center">
			<div class="poling">
				<div class="col-md-12">
					<div id="name">
						<p>Edy Rahmayadi</p>
						<p>Musa Rajekshah</p>
					</div>
					<span id="percen" class="p1"><?php echo $pc1; ?>%</span>
					<span id="suara" class="s1"><?php echo $paslon1; ?> Suara</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4" style="margin-bottom: 20px;">
			<img src="<?php echo base_url() ?>assets/img/djarot-sihar-jpnn.png" style="width: 93%;" class="center">
			<div class="poling">
				<div class="col-md-12">
					<div id="name">
						<p>Djarot S Hidayat</p>
						<p>Sihar Sitorus</p>
					</div>
					<span id="percen" class="p2"><?php echo $pc2; ?>%</span>
					<span id="suara" class="s2"><?php echo $paslon2; ?> Suara</span>
				</div>
			</div>
		</div>
		<div class="col-lg-4" style="margin-bottom: 20px;">
			<img src="<?php echo base_url() ?>assets/img/paslon3.png"  style="width: 82%;" class="center">
			<div class="poling">
				<div class="col-md-12">
					<div id="name">
						<p>JR Saragih</p>
						<p>Ance Selian</p>
					</div>
					<span id="percen" class="p3"><?php echo $pc3; ?>% </span>
					<span id="suara" class="s3"><?php echo $paslon3; ?> Suara</span>
				</div>
			</div>
		</div>
		<div class="col-lg-6" style="margin-bottom: 20px;">
			<div class="total-poling">
				<div class="col-md-12">
					<div id="name-2">
						<p>Total Suara</p>
					</div>
					<span id="percen-2" class="ts"><?php echo $total; ?></span>
				</div>
			</div>
		</div>
		<div class="col-lg-6" style="margin-bottom: 20px;">
			<div class="total-poling">
				<div class="col-md-12">
					<div id="name-2">
						<p>Total TPS</p>
					</div>
					<span id="percen-2" class="tt">21.332</span>
				</div>
			</div>
		</div>
		<div class="col-lg-12 text-center" style="margin-bottom: 50px;"> 
		    <button id="singlebutton" name="singlebutton" class="btn btn-danger ">Hasil per Wilayah</button> 
		</div>
	</div>
	<footer class="footer" style="padding-top: 15px;"><span>&copy; 2018 - <a href="#">QLime</a> All Rights Reserved.</span></footer>
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
	$(document).ready(function() {
		function get_json(){
			$.ajax({url: "welcome/get_json", 
				success: function(result){
					var obj = jQuery.parseJSON(result);
					$(".p1").html(obj.persen1 + '%');
					$(".p2").html(obj.persen2 + '%');
					$(".p3").html(obj.persen3 + '%');
					$(".s1").html(obj.suara1 + ' Suara');
					$(".s2").html(obj.suara2 + ' Suara');
					$(".s3").html(obj.suara3 + ' Suara');
					$(".ts").html(obj.totalsuara);
					$(".tt").html(obj.totaltps);
				}
			});
		}
		get_json();

		setInterval(function(){ 
			get_json();
		}, 1000);
	});	

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
	                "#d3242b",
	                "#31a9ed",
	            ]
	        }]
	};

	var options = {
		legend : {
			display : true,
			position : "bottom"
		}
	};

	var pieChart = new Chart(pilgub, {
	  type: 'pie',
	  data: pilgubData,
	  options : options
	});


	</script>

	<!-- EXAMPLE -->

	<!-- CHART -->

</body>

</html>
