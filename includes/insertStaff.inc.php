<?php
	include_once 'dbh.inc.php';

	$EmpID=$_POST['EmpID'];
	$Name=$_POST['Name'];
	$EmpDesc=$_POST['EmpDesc'];
	$PhoneNo=$_POST['PhoneNo'];
	$Salary=$_POST['Salary'];
	$Address=$_POST['Address'];
	$Username=$_POST['Username'];
	
	

	$sql="Insert into Staff values('$EmpID', '$Name', '$EmpDesc', '$PhoneNo', '$Salary', '$Address', '$Username');";
	if(!mysqli_query($conn, $sql))
	{
		die('Could not execute MySQL query: '.mysql_error());
	}
	$result = mysqli_query($conn, $sql);

header("Location: ../index.php?insert=success");
?>
