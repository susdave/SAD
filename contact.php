<!doctype>
<html>
<head>
	<meta charset="utf-8">
	<title>LWIESupplies</title>
	<meta name="description" content="Leebex App">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="css/leebex.css" rel="stylesheet">
</head>
<body>
	<?php 
	session_start();
	$_SESSION['tabtopush']=4;
	include 'mainbar.php'; 
	?>
	<div class="container">
		<section>
			<div class="page-header" id="contact">
				<h2>Contact Us.<small>Contact us for more info</small></h2>
			</div>
			
			<div class="row">
				<div class="col-lg-4">
					<p>Send us the message, or contact us from the address below</p>
					<address>
						<strong>Leebex E-Supplies pvt ltd.</strong></br>
						L3, B4 Kalinsabay</br>
						KC-121 street</br>
						Quezon City Circle - 8201</br>
						Contact Number: 238-3000
					</address>
				</div>
				<div class="col-lg-8">
					<form action="" class="form-horizontal">
						<div class="form-group">
							<label for="user-name" class="col-lg-2 control-label">Name</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="user-name" placeholder="Enter your name">
							</div>
						</div>
						
						<div class="form-group">
							<label for="user-mail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="user-email" placeholder="Enter your Email address">
							</div>
						</div>
						
						<div class="form-group">
							<label for="user-url" class="col-lg-2 control-label">Request Product</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="user-email" placeholder="if you have any">
							</div>
						</div>
						
						<div class="form-group">
							<label for="user-message" class="col-lg-2 control-label">Any Message</label>
							<div class="col-lg-10">
								<textarea name="user-message" id="user-message" class="form-control" rows="10" placeholder="Enter your message"></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<a class="btn btn-primary" data-toggle="modal" data-target="#Errored">Submit</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
	
	<footer class="footer-fixed">
			<div class="container-fluid text-center" style="padding-bottom: 5px;">
				<ul class="list-inline">
					<li><a href="" data-toggle="modal" data-target="#Errored"><strong>Twitter</strong></a></li>
					<li><a href="" data-toggle="modal" data-target="#Errored"><strong>Facebook</strong></a></li>
					<li><a href="" data-toggle="modal" data-target="#Errored"><strong>Youtube</strong></a></li>
				</ul>
				<p><strong>&copy; Copyright @ Leebex E-Supplies 2016</strong></p>
			</div>
	</footer>
	
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
