<?php
	include_once 'dbh.inc.php';

	$Emp_ID=$_POST['Emp_ID'];
	$Name=$_POST['Name'];
	$Emp_Description=$_POST['Emp_Description'];
	$Phone_No=$_POST['Phone_No'];
	$Salary=$_POST['Salary'];
	$Address=$_POST['Address'];
	
	

	$sql="update Staff set Name='$Name', Emp_Description='$Emp_Description', Phone_No='$Phone_No', Salary='$Salary', Address='$Address' where Emp_ID='$Emp_ID';";
	$result = mysqli_query($conn, $sql);

header("Location: ../index.php?update=success");
?>