<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets2/css/my-login.css">
</head>

<body class="my-login-page" style="">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">


				<div class="card-wrapper">

					<div class="brand">
						<img src="<?= base_url() ?>assets2/img/logo1.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title text-center">Login Admin Ebunga</h4>
							 <?php echo $this->session->flashdata('pesan'); ?>
							 <?php echo $this->session->flashdata('pesan2'); ?>
							<form method="POST" class="my-login-validation" novalidate="" action="<?= base_url() ?>auth/cek_login">
								<div class="form-group">
									<label for="email">Username</label>
									<input id="email" type="text" class="form-control" value="" required autofocus name="username">
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
					
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="pass" required data-eye >
									 <?php echo $this->session->flashdata('pesan1'); ?>
								    <div class="invalid-feedback">
								    	Password is required

							    	</div>
								</div>


								<div class="form-group m-0">

									<input type="submit" name="cek" class="btn btn-primary btn-block" value="Login">
									
								</div>
								<div class="mt-4 text-center">
									Masukan username dan password anda dengan benar
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						www.ebunga.com
					</div>
				</div>
			</div>
		</div>
	</section>

	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php base_url() ?>assets2/js/my-login.js"></script>

	 <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
</body>
</html>
