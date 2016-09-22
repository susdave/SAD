<?php
	$db_host="localhost";
	$db_user="adminbes";
	$db_pw="databes";
	$db_maindb="lwiesdata";
	
	$GLOBALS['maindb'] = new PDO('mysql:host='.$db_host.';dbname='.$db_maindb, $db_user, $db_pw);
	$_SESSION['fn']='';
	$_SESSION['mn']='';
	$_SESSION['ln']='';
	
	function loginUser($x, $y){
		$result = false;
		$dbquery = 'SELECT username, password, first_name, middle_name, last_name FROM userdetails';
		foreach($GLOBALS['maindb']->query($dbquery) as $trow){
			$uidd = $trow['username'];
			$upwd = $trow['password'];
			
			if(($x==$uidd)&&($y==$upwd)){
				$_SESSION['fn']= $trow['first_name'];
				$_SESSION['mn']= $trow['middle_name'];
				$_SESSION['ln']= $trow['last_name'];
				$result=true;
			}
			//echo $uidd.' has a password of '.$upwd.'. <br>';
		}
		return $result;
	}
	
	function register($FNAME, $LNAME, $MNAME, $UNAME, $MAIL, $PWD){
		
		$dbquery = "INSERT INTO userdetails (username, password, first_name, middle_name, last_name, email, position_status) 
		VALUES (\"".$UNAME."\", \"".$PWD."\", \"".$FNAME."\", \"".$MNAME."\", \"".$LNAME."\", \"".$MAIL."\", \"Member\")";
		if(query($dbquery)){
			
		}
	}
?>