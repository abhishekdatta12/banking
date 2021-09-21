<?php
	include_once '../includes/dbh.inc.php';
    $DonorID=$_POST['DonorID'];
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
  		<a href="../Recipient.php">Recipient Details</a>
  		<a href="../Bloodbag.php">Bloodbag Inventory</a>
        <a href="../Track.php">Tracking</a>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: serif;">UPDATE DONOR DETAILS</h3>
	<div class="content-table">

        <?php
        $sql="Select * from Donor where Donor_ID='$DonorID';";
        $result = mysqli_query($conn, $sql);
        
        $resultCheck= mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        ?>
        <form method="POST" action="../includes/updateDonor.inc.php">
            <label>Donor ID: </label><input type="text" id="first_name" name="Donor_ID" value="<?php echo $row["Donor_ID"];?>" readonly>
            <br>
            <label>Name:    </label><input type="text" id="last_name" name="Name" value="<?php echo $row["Name"];?>">
            <br>
            <label>Age: </label><input type="text" id="city" name="Age" value="<?php echo $row["Age"];?>">
            <br>
            Sex: <input type="text" id="first_name" name="Sex" value="<?php echo $row["Sex"];?>">
            <br>
            Type: <input type="text" id="last_name" name="Blood_Type" value="<?php echo $row["Blood_Type"];?>">
            <br>
            Date: <input type="text" id="city" name="Date_of_Donation" value="<?php echo $row["Date_of_Donation"];?>">
            <br>
            Address: <input type="text" id="first_name" name="Address" value="<?php echo $row["Address"];?>">
            <br>
            Phone: <input type="text" id="last_name" name="Phone_No" value="<?php echo $row["Phone_No"];?>">
            <br>
            At Desk: <input type="text" id="city" name="Emp_ID" value="<?php echo $row["Emp_ID"];?>">
            <br>
            <button type="submit" name="submit">Update</button>
        </form>
	<br>
</div>
</div>
</div>
</body>
</html>