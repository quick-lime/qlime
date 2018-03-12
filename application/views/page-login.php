<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login &mdash; QLime</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<meta name="theme-color" content="#dd2d6f">
	<link rel="icon" sizes="192x192" href="assets/img/logo-q.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-q.png" alt="Logo" width="100" style="margin-bottom: 20px;"></div>
								<p class="lead">Silahkan masukan akun anda.</p>
							</div>
							<?php echo form_open(base_url().'welcome/proses_login'); ?>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">No Handphone</label>
									<input type="text" class="form-control" name="nohp" id="username" placeholder="No Handphone" autofocus="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-danger btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<p style="margin-top: 20px;">&copy; 2018 <a href="#"> - Quick Count.</a> All Rights Reserved.</p>
								</div>
							<?php echo form_close() ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<p>Sistem Informasi Hitung Cepat Pilkada</p>
							<h1 class="heading">QUICK COUNT SUMATERA UTARA 2018</h1>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
</body>

</html>
