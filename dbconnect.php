<?php
	$db_local="localhost";
	$db_user="adminbes";
	$db_pw="databes";
	$db_maindb="LWIESdata";
	if(!@mysqli_select_db($maincon=mysqli_connect($db_local, $db_user, $db_pw), $db_maindb)){
		die("The database was failed to connect");
	}
	
	checkUserLogin();
	
	function checkUserLogin(){
		$loginquery = "SELECT 'username', 'password' FROM 'userDetails'";
		if($query_run = mysql_query($loginquery)){
			while($tablerow = mysql_fetch_assoc($query_run)){
				$uidd = $tablerow['username'];
				$upwd = $tablerow['password'];
				
				echo $uidd.' has a password of '.$upwd.'.<br>';
			}
		}
	}
?>