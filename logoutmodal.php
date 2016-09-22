<!--Login Content-->
	<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
	<div class="modal fade" id="loginAppearance" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Logout Confirmation</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to Logout?</p>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-success btn-center" name="logout" value="Yes">
					<button type="button" class="btn btn-success btn-center" name="register" data-dismiss="modal">No</button>
				</div>
			</div>		  
		</div>
	</div>
	</form>
	
	<?php/*
		if(isset($_POST['logout'])){
			$_SESSION['welcome']='Guest';
		}*/
	?>