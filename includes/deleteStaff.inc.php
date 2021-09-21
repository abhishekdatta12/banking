<?php
	include_once 'dbh.inc.php';

	$EmpID=$_POST['EmpID'];
	

	$sql="delete from staff where Emp_ID='$EmpID'";
	$result = mysqli_query($conn, $sql);

header("Location: ../index.php?delete=success");
?>