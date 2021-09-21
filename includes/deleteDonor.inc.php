<?php
	include_once 'dbh.inc.php';

	$DonorID=$_POST['DonorID'];
	

	$sql="delete from donor where Donor_ID='$DonorID'";
	$result = mysqli_query($conn, $sql);

header("Location: ../Donor.php?delete=success");
?>