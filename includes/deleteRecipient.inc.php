<?php
	include_once 'dbh.inc.php';

	$Rec_ID=$_POST['Rec_ID'];
	

	$sql="delete from recipient where Rec_ID='$Rec_ID';";
	$result = mysqli_query($conn, $sql);

header("Location: ../Recipient.php?delete=success");
?>