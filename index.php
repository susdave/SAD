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
	$_SESSION['tabtopush']=1;
	include 'mainbar.php'; 
	?>
	<!--Main Page home-->
	<div class="container">
		<h3>Welcome <?php echo $_SESSION['welcome'];?></h3>
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Leebex App</h1>
				<h2><small>Coming soon...</small></h2>
				<p style="text-indent: 5px;">As the <strong>Leebex E-Supplies</strong> find a way to contact their costumers, Android app will be soon to release after the website becomes successful.</p>
				<p><strong>Download now</strong></p>
				
				<div class="btn-group">
					<a href="" class="btn btn-lg btn-default" disabled>Download App</a>
					<a href="contact.php" class="btn btn-lg btn-default">Visit Store</a>
					<a href="supplies.php" class="btn btn-lg btn-info">Check Supplies</a>
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
