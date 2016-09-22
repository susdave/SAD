<!doctype>
<html>
<head>
	<meta charset="utf-8">
	<title>LWIESupplies</title>
	<meta name="description" content="Leebex App">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="css/leebex.css" rel="stylesheet">
</head>
<body>
	<?php 
		session_start();
		$_SESSION['tabtopush']=3;
		include 'mainbar.php'; 
	?>
	<div class="container">
		<div class="panel">
			<div class="panel-body">
			<h3><strong><mark>History</mark></strong></h3>
				<div class="row">
					<div class="col-md-7">
						<br>
						<h4 style="text-indent: 10%;">Leebex Electronic Supplies was established and registered at Securities and Exchange Commission (SEC) in May 2012 and it started to build stalls in different malls and places. The company had many rivals in the distribution of electrical products and managed to be quite good.  In order to become known, the company joined different electrical associations. In 2014, the company’s owner, became one of the founding members/incorporators and Leebex Electronic Supplies was born.</h4>
					</div>
					<div class="col-md-5">
						<img src="aboutpic.jpg" class="img-thumbnail" alt="Cinque Terre" width="600" height="500">
					</div>
				</div>
			</div>
		</div>
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
