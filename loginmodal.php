<!--Login Content-->
	<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
		<div class="modal fade" id="loginAppearance" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Leebex Login</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<p class="text-center" id="loginerrors"></p>
							<div class="form-group">
								<label for="usr">ID:</label>
								<input type="text" id="userinput" class="form-control" name="UID" placeholder="Username or ID" id="usr" required />
							</div>
							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" id="passwordinput" class="form-control" name="UPW" placeholder="Password" id="pwd" required />
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="submit" onclick="checklogin();" class="btn btn-success btn-center" name="submit">Submit</button>
						<a href="register.php" type="button" class="btn btn-info btn-center" name="register">Create an account</a>
					</div>
				</div>		  
			</div>
		</div>
	</form>

	
	
	
	<script>
		function checklogin(){
			var id=document.getElementById("userinput").value;
			var pw=document.getElementById("passwordinput").value;
			if(<?php echo loginuser("<script>id;</script>","<script>pw;</script>");?>){
				document.getElementById("loginerrors").innerHTML = "Login Success!";
				document.getElementById("loginerrors").style.color = "Green";
			}
			else{
				document.getElementById("loginerrors").innerHTML = "Invalid Account!";
				document.getElementById("loginerrors").style.color = "Red";
			}
			
		}
		$(window).load(function(){
			$('#loginAppearance').modal('show');
			document.getElementById("loginerrors").style.color = "Violet";
		});
	</script>
	
	<!--</form>-->