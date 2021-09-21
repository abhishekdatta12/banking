<?php
	include_once 'dbh.inc.php';

	$Sender=$_POST['Sender'];
	$Receiver=$_POST['Receiver'];
	$Amount=$_POST['Amount'];
	
	

	$sql="update customers set Balance=Balance-'$Amount' where Name='$Sender';";
	$result = mysqli_query($conn, $sql);

	$sql1="update customers set Balance=Balance+'$Amount' where Name='$Receiver';";
	$result1 = mysqli_query($conn, $sql1);

	$sql2="insert into transactions(sender, receiver, amount) values('$Sender', '$Receiver', '$Amount');";
	$result2 = mysqli_query($conn, $sql2);


	// $sql = "update customers set Balance=Balance-'$Amount' where Name='$Sender';
 //        update customers set Balance=Balance+'$Amount' where Name='$Receiver';
 //        insert into history values('$Sender', '$Receiver', '$Amount'); ";

	// $mysqli->multi_query($sql);

	// do {
 //    if ($result = $mysqli->store_result()) {
 //        var_dump($result->fetch_all(MYSQLI_ASSOC));
 //        $result->free();
 //    }
	// } while ($mysqli->next_result());

header("Location: ../Donor.php?update=success");
?>