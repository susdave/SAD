	<?php
		include 'dbtypePDO.php';
		$username="";
		$GLOBALS['tab1']="";
		$GLOBALS['tab2']="";
		$GLOBALS['tab3']="";
		$GLOBALS['tab4']="";
		
		if(!isset($_SESSION['welcome'])){
			$_SESSION['welcome']="Guest";
		}
		if($_SESSION['welcome']!='Guest'){}
		else if(isset($_POST['UID'])&&isset($_POST['UPW'])&&!checkEmpt()&&loginUser($_POST['UID'], $_POST['UPW'])){
			$_SESSION['lgcol']="btn btn-success";
			$_SESSION['buttonUN']=$_SESSION['un'];
			$_SESSION['welcome']=$_SESSION['ln'].', '.$_SESSION['fn'].' '.$_SESSION['mn'];
		}
		else{
			$_SESSION['lgcol']="btn btn-info";
			$_SESSION['buttonUN']=" Log in";
			$_SESSION['welcome']='Guest';
		}
		
		if(isset($_POST['logout'])){
			$_SESSION['welcome']='Guest';
			$_SESSION['lgcol']="btn btn-info";
			$_SESSION['buttonUN']=" Log in";
		}
		
		function checkEmpt(){
			if(empty($_POST['UID'])||empty($_POST['UPW'])){
				return true;
			}
			else{
				return false;
			}
		}
		
		function pushActive(){
			$GLOBALS['tab'.$_SESSION['tabtopush']]="active";
			for($x=1;$x<=4;$x++){
				if($x!=$_SESSION['tabtopush']){
					$GLOBALS['tab'.$x]="";
				}
			}
		}
	?>
		
	<!-- Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button nav-btn" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a href="index.php" class="navbar-brand">LEEBEX E-SUPPLIES</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<?php pushActive();?>
					<li class="<?php echo $GLOBALS['tab1']?>"><a href="index.php">Home</a>
					<li class="<?php echo $GLOBALS['tab2']?>"><a href="supplies.php">Supplies</a>
					<li class="<?php echo $GLOBALS['tab3']?>"><a href="about.php">About</a>
					<li class="<?php echo $GLOBALS['tab4']?>"><a href="contact.php">Contact</a>
				</ul>
				<!-- Login -->
				<form class="navbar-form navbar-right" role="log-in">
					<button type="button" class="<?php echo $_SESSION['lgcol'];?>" data-toggle="modal" data-target="#loginAppearance"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['buttonUN'];?></button>
				</form>
				<!--Search Bar-->
				<form class="navbar-form navbar-right" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Find items">
						<span class="input-group-btn">
							<a href="#" class="btn btn-info" data-toggle="modal" data-target="#Errored"><span class="glyphicon glyphicon-search"></span> Search</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>
	
	<?php 
	if($_SESSION['welcome']!='Guest'){
		include 'loginmodals/logoutmodal.php';
	}
	else{
		include 'loginmodals/loginmodal.php';
	}
	?>
	
	<!--Register Content-->
	<div class="modal fade" id="registermodal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Register Me</h4>
				</div>
				<div class="modal-body">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<label for="footr">ID</label>
									<input type="text" class="form-control" id="footr" placeholder="Username">
								</div>
								<div class="col-sm-6">
									<label for="footr">Email address</label>
									<input type="text" class="form-control" id="footr" placeholder="Enter your Email">
								</div>
							</div>
							
							<div class="row" style="margin-top: 10px;">
								<div class="col-sm-6">
									<label for="footr">Password</label>
									<input type="password" class="form-control" id="footr" placeholder="Your password">
								</div>
								<div class="col-sm-6">
									<label for="footr">Retype Password:</label>
									<input type="password" class="form-control" id="footr" placeholder="Retype your password">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-info btn-lg text-center">Create an account</button>
				</div>
			</div>		  
		</div>
	</div>
	
	<!--Error Message-->
	<div class="modal fade text-center" id="Errored" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Under Maintenance</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-10">
							<h3>This function is still <strong>under maintenance</strong><h3>Please try again next time</p>
						</div>
						<div class="col-sm-2">
							<img src="http://www.liquidpixels.com/images/icon-error.png" class="img-responsive" alt="error icon" width="100" height="100">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-center" data-dismiss="modal">OK</button>
				</div>
			</div>		  
		</div>
	</div>