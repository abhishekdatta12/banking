<?php
	include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Donor Details
	</title>
	<link rel="stylesheet" href="../blood.css">
	
</head>
<body>
	<div class="gradient">
<!--	<div class="menu">
        <nav>
            <ul>
                <li><a href="#">Staff Details</a></li>
                <li><a href="#">Donor Details</a></li>
                <li><a href="#">Recipient Details</a></li>
                <li><a href="#">Bloodbag Inventory</a></li>
            </ul>
        </nav>
    </div>-->
    <h3 align="center" style="font-family: sans-serif; size: 70px">The Sparks Foundation - Web Development Task 1</h3>
		<!-- <h4 align="center" style="font-family: sans-serif; size: 70px">Web Development Task 1</h4> -->
    <h1 align="center" style="font-family: sans-serif; size: 70px"> Basic Banking System</h1>
    <div class="topnav">
  		<a class="active" href="../Donor.php">Customers List</a>
  		<a href="../Recipient.php">Transaction History</a><!-- 
  		<a href="../Bloodbag.php">Bloodbag Inventory</a>
        <a href="../Track.php">Tracking</a> -->
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: serif;">Create Transaction</h3>
	<div class="content-table">
	<form action="../includes/updateDonor.inc.php" method="POST">
		Enter name of sender:
		<br>
		<input type="text" name="Sender" placeholder="Sender">
		<br><br>
		Enter name of receiver:
		<br>
		<input type="text" name="Receiver" placeholder="Receiver">
		<br><br>
		Enter the amount:
		<br>
		<input type="text" name="Amount" placeholder="Amount">
		<br><br><br><br>

		<button type="submit" name="submit">Start Transaction</button>
	
	<br>
</div>
</div>
</div>
</body>
</html>