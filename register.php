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
	
	if(!isset($GLOBALS['warning'])){
		$GLOBALS['warning']="All fields are required";
	}
	if(!isset($GLOBALS['fontcode'])){
		$GLOBALS['fontcode']="black";
	}
	if(isset($_POST['tocreate'])){
		if(emptiness()){
			$GLOBALS['warning']="Please fill all the fields";
			$GLOBALS['fontcode']="red";
		}
		else if($_POST['pwds']!=$_POST['pwdss']){
			$GLOBALS['warning']="Your password does not match";
			$GLOBALS['fontcode']="red";
		}
		else{
			register($_POST['fname'], $_POST['lname'], $_POST['mname'], $_POST['uname'], $_POST['mail'], $_POST['pwds']);
			$GLOBALS['warning']="Congratulations, you are now registered!";
			$GLOBALS['fontcode']="green";
		}
	}
	
	
	function emptiness(){
		if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['mname'])||empty($_POST['mail'])||empty($_POST['uname'])||empty($_POST['pwds'])||empty($_POST['pwdss'])){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	?>
	<!--Registration Page-->
	<div class="container" style="margin: 5%">
		<div class="alert alert-info text-center" style="padding-left: 20%; padding-right: 20%;">
			<h1>Registration</h1>
			<hr><p><font color="<?php echo $GLOBALS['fontcode'];?>"><?php echo $GLOBALS['warning'];?></font></p>
			<form action="register.php" method="POST">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-4">
								<input type="text" class="form-control" name="fname" placeholder="First Name">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="lname" placeholder="Last Name">
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="mname" placeholder="Middle Name">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-5">
								<input type="text" class="form-control" name="uname" placeholder="Username">
							</div>
							<div class="col-sm-7">
								<input type="text" class="form-control" name="mail" placeholder="E-mail">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<input type="password" class="form-control" name="pwds" placeholder="Password">
							</div>
							<div class="col-sm-6">
								<input type="password" class="form-control" name="pwdss" placeholder="Re-type Password">
							</div>
						</div>
					</div>
				</div>
			<input type="submit" class="btn btn-primary" name="tocreate" value="Create an account">
			</form>
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