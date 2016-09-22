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
		$_SESSION['tabtopush']=2;
		include 'mainbar.php'; 
	?>
	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<div class="jumbotron alert alert-info text-center">
						<h1>Supplies Section</h1>
						<br>
						<p> Lists of supplies sorted from new items to old items</p>
					</div>
					<hr>
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row" id="#headerpanel">
							<p style="margin-left: 15px">Sort By/View By</p>
								<div class="col-md-8">
									<div class="btn-group text-left">
										<a href="" class="btn btn-lg btn-info" data-toggle="modal" data-target="#Errored">Ascending</a>
										<a href="" class="btn btn-lg btn-info" data-toggle="modal" data-target="#Errored">Descending</a>
										<a href="" class="btn btn-lg btn-default" data-toggle="modal" data-target="#Errored">List</a>
										<a href="" class="btn btn-lg btn-default" data-toggle="modal" data-target="#Errored">Tumbnail</a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Find items">
										<span class="input-group-btn">
											<a href="#" class="btn btn-info btn-md" data-toggle="modal" data-target="#Errored"><span class="glyphicon glyphicon-search"> </span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-info" style="border-bottom: 3px solid blue">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<h4><strong>ITEM</strong></h4>
					</div>
					<div class="col-sm-6">
						<h4><strong>DESCRIPTION</strong></h4>
					</div>
					<div class="col-sm-2">
						<h4><strong>PRICE</strong></h4>
					</div>
					<div class="col-sm-2">
						<h4><strong>PURCHASE</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<a href="">Duino</a>
						<img src="duino.jpg" class="img-responsive">
					</div>
					<div class="col-sm-6">
						<p>hardware and software company, project, and user community that designs and manufactures computer open-source hardware, open-source software, and microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices. </p>
					</div>
					<div class="col-sm-2">
						<p>600.00</p>
					</div>
					<div class="col-sm-2 pagination-centered">
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Errored"><span class="glyphicons glyphicons-shopping-cart"></span> Buy</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<a href="">Duino-TX</a>
						<img src="duinotx.png" class="img-responsive">
					</div>
					<div class="col-sm-6">
						<p>MORE Function added... A hardware and software company, project, and user community that designs and manufactures computer open-source hardware, open-source software, and microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices. </p>
					</div>
					<div class="col-sm-2">
						<p>899.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Errored"><span class="glyphicons glyphicons-shopping-cart"></span> Buy</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<a href="">Duino</a>
						<img src="duino.jpg" class="img-responsive">
					</div>
					<div class="col-sm-6">
						<p>hardware and software company, project, and user community that designs and manufactures computer open-source hardware, open-source software, and microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices. </p>
					</div>
					<div class="col-sm-2">
						<p>600.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Errored"><span class="glyphicons glyphicons-shopping-cart"></span> Buy</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<a href="">Duino-TX</a>
						<img src="duinotx.png" class="img-responsive">
					</div>
					<div class="col-sm-6">
						<p>MORE Function added... A hardware and software company, project, and user community that designs and manufactures computer open-source hardware, open-source software, and microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices. </p>
					</div>
					<div class="col-sm-2">
						<p>899.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Errored"><span class="glyphicons glyphicons-shopping-cart"></span> Buy</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default" style="margin-bottom: 8%;">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-2">
						<a href="">Duino</a>
						<img src="duino.jpg" class="img-responsive">
					</div>
					<div class="col-sm-6">
						<p>hardware and software company, project, and user community that designs and manufactures computer open-source hardware, open-source software, and microcontroller-based kits for building digital devices and interactive objects that can sense and control physical devices. </p>
					</div>
					<div class="col-sm-2">
						<p>600.00</p>
					</div>
					<div class="col-sm-2">
						<a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#Errored"><span class="glyphicons glyphicons-shopping-cart"></span> Buy</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="footer-end">
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
