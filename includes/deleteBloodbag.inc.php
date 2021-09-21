<?php
	include_once 'dbh.inc.php';

	$Bloodbag_No=$_POST['Bloodbag_No'];
	
	$sql="delete from Bloodbag_details where Bloodbag_No='$Bloodbag_No'";
	$result = mysqli_query($conn, $sql);

header("Location: ../Bloodbag.php?delete=success");
?>