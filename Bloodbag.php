<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Bloodbag Inventory
	</title>
	<link rel="stylesheet" href="blood.css">
	
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
    <h1 align="center" style="font-family: sans-serif; size: 70px"> BLOOD BANK MANAGEMENT SYSTEM</h1>
    <div class="topnav">
  		<a href="index.php">Staff Details</a>
  		<a href="Donor.php">Donor Details</a>
  		<a href="Recipient.php">Recipient Details</a>
  		<a class="active" href="Bloodbag.php">Bloodbag Inventory</a>
  		<a href="Track.php">Tracking</a>
  		<a href="log.php" style="float: right; background: #850812; color: white;">Logout</a>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">BLOODBAG INVENTORY</h3>
	<div class="content-table">
	<?php
		$sql="Select * from Bloodbag_details;";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck>0){
			echo "<table border='1'>
				<tr>
				<th>Bloodbag No</th>
				<th>Blood Type</th>
				<th>Haemoglobin Amount (g/dl)</th>
				<th>Blood Amount</th>
				<th>Cost</th>
				<th>Donor ID</th>
				<th>Recipient ID</th>
				</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
	  			echo "<td>" . $row['Bloodbag_No'] . "</td>";
				echo "<td>" . $row['Blood_Type'] . "</td>";
				echo "<td>" . $row['Haemoglobin_Amount'] . "</td>";
				echo "<td>" . $row['Blood_Amt'] . "</td>";
				echo "<td>" . $row['Cost'] . "</td>";
				echo "<td>" . $row['Donor_ID'] . "</td>";
				echo "<td>" . $row['Rec_ID'] . "</td>";
				echo "</tr>";
			}
		}
	?>
	<button class="GFG" 
    onclick="window.location.href = 'bloodbag/insertBloodbag.php';"> 
        Insert
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'bloodbag/updateBloodbag1.php';"> 
        Update
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'bloodbag/deleteBloodbag.php';"> 
        Delete
    </button> 
	<div class="buttons">
	<!--
	<div class="buttons">
	<form method="get" action="bloodbag/insertBloodbag.php">
		<button>Insert</button>
	</form>
	<br>
	<form method="get" action="bloodbag/updateBloodbag1.php">
		<button>Update</button>
	</form>
	<br>
	<form method="get" action="bloodbag/deleteBloodbag.php">        
		<button>Delete</button>
	</form>
	</div>-->
	<br>
</div>
</div>
</div>
</body>
</html>