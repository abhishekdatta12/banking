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
    <h1 align="center" style="font-family: serif; size: 70px"> BLOOD BANK MANAGEMENT SYSTEM</h1>
    <div class="topnav">
  		<a href="../index.php">Staff Details</a>
  		<a class="active" href="../Donor.php">Donor Details</a>
  		<a href="#contact">Recipient Details</a>
  		<a href="#about">Bloodbag Inventory</a>
  		<a href="../Track.php">Tracking</a>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: serif;">INSERT DONOR DETAILS</h3>
	<div class="content-table">
	<form action="../includes/insertDonor.inc.php" method="POST">
		<input type="text" name="DonorID" placeholder="DonorID">
		<br>
		<input type="text" name="Name" placeholder="Name">
		<br>
		<input type="text" name="Age" placeholder="Age">
		<br>
		<input type="text" name="Sex" placeholder="Sex">
		<br>
		<input type="text" name="BloodType" placeholder="BloodType">
		<br>
		<input type="text" name="Date" placeholder="Date">
		<br>
		<input type="text" name="Address" placeholder="Address">
		<br>
		<input type="text" name="PhoneNo" placeholder="PhoneNo">
		<br>
		<input type="text" name="Staff" placeholder="Staff">
		<br>
		<button type="submit" name="submit">Submit</button>
	
	<br>
</div>
</div>
</div>
</body>
</html>