<?php
	include_once 'dbh.inc.php';
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="Select * from userlogin where Username='$username' and password='$password' limit 1;";
		$result=mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)==1){
			header("Location: ../Donor.php?login=success");
		}
		else{
			#echo "Login failed.";
			header("Location: ../logfail.php?login=fail");
		}
?>
