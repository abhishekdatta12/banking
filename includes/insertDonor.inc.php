<?php
	include_once 'dbh.inc.php';

	$DonorID=$_POST['DonorID'];
	$Name=$_POST['Name'];
	$Age=$_POST['Age'];
	$Sex=$_POST['Sex'];
	$BloodType=$_POST['BloodType'];
	$Date=$_POST['Date'];
	$Address=$_POST['Address'];
	$PhoneNo=$_POST['PhoneNo'];
	$Staff=$_POST['Staff'];
	

	$sql="Insert into donor values('$DonorID', '$Name', $Age, '$Sex', '$BloodType', '$Date', '$Address', $PhoneNo, '$Staff');";
	$result = mysqli_query($conn, $sql);

header("Location: ../Donor.php?insert=success");
?>
