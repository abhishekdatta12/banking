<?php
	include_once 'dbh.inc.php';

	$Bloodbag_No=$_POST['Bloodbag_No'];
	$Blood_Type=$_POST['Blood_Type'];
	$Haemoglobin_Amount=$_POST['Haemoglobin_Amount'];
	$Blood_Amt=$_POST['Blood_Amt'];
	$Cost=$_POST['Cost'];
	$Donor_ID=$_POST['Donor_ID'];
	$Rec_ID=$_POST['Rec_ID'];
	

	$sql="Insert into bloodbag_details values('$Bloodbag_No', '$Blood_Type', '$Haemoglobin_Amount', '$Blood_Amt', '$Cost', '$Donor_ID', '$Rec_ID');";
	$result = mysqli_query($conn, $sql);

header("Location: ../Bloodbag.php?insert=success");
?>
