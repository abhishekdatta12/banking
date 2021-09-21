<?php
	include_once '../includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Recipient Details
	</title>
	<link rel="stylesheet" href="../recipient.css">
	
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
    <h1 align="center" style="font-family: serif; size: 70px"> BLOOD BANK MANAGEMENT SYSTEM</h1>
    <div class="topnav">
  		<a href="../index.php">Staff Details</a>
  		<a href="../Donor.php">Donor Details</a>
  		<a class="active" href="../Recipient.php">Recipient Details</a>
  		<a href="../Bloodbag.php">Bloodbag Inventory</a>
        <a href="../Track.php">Tracking</a>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: serif;">UPDATE RECIPIENT DETAILS</h3>
	<div class="content-table">
	<form action="updateRecipient2.php" method="POST">
		Enter ID of recipient whose details you want to update: <input type="text" name="Rec_ID" placeholder="Rec_ID">
		<br>
		<button type="submit" name="submit">Update</button>
	
	<br>
</div>
</div>
</div>
</body>
</html>