<?php
	include_once 'dbh.inc.php';

	$Rec_ID=$_POST['Rec_ID'];
	$Name=$_POST['Name'];
	$Blood_Type=$_POST['Blood_Type'];
	$Age=$_POST['Age'];
	$Sex=$_POST['Sex'];
	$Date_Of_Req=$_POST['Date_Of_Req'];
	$Date_Of_Accept=$_POST['Date_Of_Accept'];
	$Bloodbag_No=$_POST['Bloodbag_No'];
	$Emp_ID=$_POST['Emp_ID'];
	
	

	$sql="update Recipient set Name='$Name', Blood_Type='$Blood_Type', Age='$Age', Sex='$Sex', Date_Of_Req='$Date_Of_Req', Date_Of_Accept='$Date_Of_Accept', Bloodbag_No='$Bloodbag_No' where Rec_ID='$Rec_ID';";
	$result = mysqli_query($conn, $sql);

header("Location: ../Recipient.php?update=success");
?>