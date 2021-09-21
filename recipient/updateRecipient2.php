<?php
	include_once '../includes/dbh.inc.php';
    $Rec_ID=$_POST['Rec_ID'];
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

        <?php
        $sql="Select * from Recipient where Rec_ID='$Rec_ID';";
        $result = mysqli_query($conn, $sql);
        
        $resultCheck= mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        ?>
        <form method="POST" action="../includes/updateRecipient.inc.php">
            <label>Recipient ID: </label><input type="text" id="first_name" name="Rec_ID" value="<?php echo $row["Rec_ID"];?>" readonly>
            <br>
            <label>Name:    </label><input type="text" id="last_name" name="Name" value="<?php echo $row["Name"];?>">
            <br>
            <label>Type </label><input type="text" id="city" name="Blood_Type" value="<?php echo $row["Blood_Type"];?>">
            <br>
            Age: <input type="text" id="last_name" name="Age" value="<?php echo $row["Age"];?>">
            <br>
            Sex: <input type="text" id="city" name="Sex" value="<?php echo $row["Sex"];?>">
            <br>
            Requested on:: <input type="text" id="first_name" name="Date_Of_Req" value="<?php echo $row["Date_Of_Req"];?>">
            <br>
            Accepted on: <input type="text" id="city" name="Date_Of_Accept" value="<?php echo $row["Date_Of_Accept"];?>">
            <br>
            Bloodbag No:<input type="text" id="city" name="Bloodbag_No" value="<?php echo $row["Bloodbag_No"];?>">
            <br>
            <button type="submit" name="submit">Update</button>
        </form>
	<br>
</div>
</div>
</div>
</body>
</html>