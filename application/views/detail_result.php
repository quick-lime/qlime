
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
		<h3>Perhitungan PerKabupaten</h3>
		<div class="table-responsive">
			<table class="table table-bordered" id="data">
				<thead>
					<th width="10px">No.</th>
					<th>Kabupaten/Kota</th>
					<th>Suara</th>
					<th width="200px">Hasil</th>
					<th>Data Masuk</th>
				</thead>
				<tbody>
				<?php
					$i=0;
					foreach ($list_kabupaten as $value) {
						$i++;
						$dpt = 0;
						$calon1 = 0;
						$calon2 = 0 ;
						$calon3 = 0;
						$tidaksah = 0;
						$tps_masuk = 0;
						$jlh_tps = 0 ;
						//Mengambil ID Wilayah
						$tps = $this->tps_model->list_kabupaten($value['kabupaten']);
						foreach ($tps as $tps) {
							$jlh_tps = $jlh_tps + $tps['jlhtps'];
							//Mencari Suara Berdasarkan ID Wilayah Yang Sama
							$suara = $this->welcome_model->list_suara_idtps($tps['id']);
							foreach ($suara as $suara) {
								$tps_masuk++;
								$kesempatan = $this->suara_model->detail_kesempatan($suara['id']);
								$dpt = $dpt + $suara['dpt'];	
								$calon1 = $calon1 + $suara['calon1'] + $kesempatan['calon1'];
								$calon2 = $calon2 + $suara['calon2'] + $kesempatan['calon2'];
								$calon3 = $calon3 + $suara['calon3'] + $kesempatan['calon3'];
								$tidaksah = $tidaksah + $suara['tidaksah'] + $kesempatan['tidaksah'];
							}
						}
						$suara_sah = $calon1 + $calon2 + $calon3;
						$total_suara = $calon1 + $calon2 + $calon3 + $tidaksah;

					echo "
					<tr>
						<td>".$i."</td>
						<td><a href='#'>".$value['kabupaten']."</a></td>
						<td>
							<table class='table table-hover'>
								<tr>
									<td>Suara Sah</td>
									<td align='right'>".$suara_sah."</td>
								</tr>
								<tr>
									<td>Suara Tidak Sah</td>
									<td align='right'>".$tidaksah."</td>
								</tr>
								<tr>
									<td>Total Suara</td>
									<td align='right'>".$total_suara."</td>
								</tr>
							</table>
						</td>
						<td>
							<canvas id='pilgubChart".$i."' width='100px' height='100px'></canvas>
						</td>
						<td>".$tps_masuk." / ".$jlh_tps." TPS</td>
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

	<!-- <script type="text/javascript">
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
	</script> -->

	<?php
		$i=0;
		foreach ($list_kabupaten as $value) {
			$i++;
			$dpt = 0;
			$calon1 = 0;
			$calon2 = 0 ;
			$calon3 = 0;
			$tidaksah = 0;
			$tps_masuk = 0;
			$jlh_tps = 0 ;
			//Mengambil ID Wilayah
			$tps = $this->tps_model->list_kabupaten($value['kabupaten']);
			foreach ($tps as $tps) {
				$jlh_tps = $jlh_tps + $tps['jlhtps'];
				//Mencari Suara Berdasarkan ID Wilayah Yang Sama
				$suara = $this->welcome_model->list_suara_idtps($tps['id']);
				foreach ($suara as $suara) {
					$tps_masuk++;
					$kesempatan = $this->suara_model->detail_kesempatan($suara['id']);
					$dpt = $dpt + $suara['dpt'];	
					$calon1 = $calon1 + $suara['calon1'] + $kesempatan['calon1'];
					$calon2 = $calon2 + $suara['calon2'] + $kesempatan['calon2'];
					$calon3 = $calon3 + $suara['calon3'] + $kesempatan['calon3'];
					$tidaksah = $tidaksah + $suara['tidaksah'] + $kesempatan['tidaksah'];
				}
			}
			$suara_sah = $calon1 + $calon2 + $calon3;
			$total_suara = $calon1 + $calon2 + $calon3 + $tidaksah;
	?>
			<script>
			var pilgub<?php echo $i; ?> = document.getElementById("pilgubChart<?php echo $i; ?>");
			Chart.defaults.global.defaultFontSize = 11;
			var pilgubData<?php echo $i; ?> = {
			    labels: [
			        "Edy Rahmayadi - Musa R",
			        "Djarot S - Sihar Sitorus",
			        "JR Saragih - Ance Selian",
			    ],
			    datasets: [
			        {
			            data: [<?php echo $calon1.",".$calon2.",".$calon3; ?>],
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

			var pieChart = new Chart(pilgub<?php echo $i; ?>, {
			  type: 'pie',
			  data: pilgubData<?php echo $i; ?>,
			  options : options
			});
			</script>

	<?php } ?>

</body>
</html>
