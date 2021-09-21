<?php
	include_once 'dbh.inc.php';

	$Rec_ID=$_POST['Rec_ID'];
	$Name=$_POST['Name'];
	$BloodType=$_POST['BloodType'];
	$Age=$_POST['Age'];
	$Sex=$_POST['Sex'];
	$DateOfReq=$_POST['DateOfReq'];
	$DateOfAccept=$_POST['DateOfAccept'];
	$BloodbagNo=$_POST['BloodbagNo'];
	

	$sql="Insert into Recipient values('$Rec_ID', '$Name', '$BloodType', '$Age', '$Sex', '$DateOfReq', '$DateOfAccept', $BloodbagNo);";
	$result = mysqli_query($conn, $sql);

header("Location: ../Recipient.php?insert=success");
?>
