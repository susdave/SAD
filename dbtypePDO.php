<?php
	$db_host="localhost";
	$db_user="root";
	$db_pw="";
	$db_maindb="lwiesdata";
	
	$GLOBALS['mysqlconnect'] = new mysqli($db_host, $db_user, $db_pw, $db_maindb);
	$_SESSION['fn']='';
	$_SESSION['mn']='';
	$_SESSION['ln']='';
	$_SESSION['un']='';
	$_SESSION['resl']='';
	
	function loginUser($x, $y){
		$result = 0;
		$dbquery = 'SELECT username, password, first_name, middle_name, last_name FROM userdetails';
		foreach($GLOBALS['mysqlconnect']->query($dbquery) as $trow){
			$uidd = $trow['username'];
			$upwd = $trow['password'];
			
			if((strtolower($x)==strtolower($uidd))&&($y==$upwd)){
				$_SESSION['fn']= $trow['first_name'];
				$_SESSION['mn']= $trow['middle_name'];
				$_SESSION['ln']= $trow['last_name'];
				$_SESSION['un']= $trow['username'];
				return ++$result;
			}
			//echo $uidd.' has a password of '.$upwd.'. <br>';
		}
		return $result;
	}
	
	function register($FNAME, $LNAME, $MNAME, $UNAME, $MAIL, $PWD){
		
		$dbquery = "INSERT INTO userdetails (username, password, first_name, middle_name, last_name, email, position_status) 
		VALUES (\"".$UNAME."\", \"".$PWD."\", \"".$FNAME."\", \"".$MNAME."\", \"".$LNAME."\", \"".$MAIL."\", \"Member\")";
		$GLOBALS['mysqlconnect']->query($dbquery);
	}
?>

<script>
	function hidden(){
		document.getElementById("loginerrors").innerHTML = "Found!";
	}
</script>