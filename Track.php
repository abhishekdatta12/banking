<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Tracking Details
	</title>
	<link rel="stylesheet" href="donor.css">
	
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
  		<a href="Bloodbag.php">Bloodbag Inventory</a>
  		<a class="active" href="Track.php">Tracking</a>
  		<div class="Logout"><a href="log.php" style="float: right; background: #085b85;">Logout</a></div>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">TRACKING DETAILS</h3>
	<div class="content-table">
	<?php
		$sql="Select * from Tracking;";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck>0){
			echo "<table border='1'>
				<tr>
				<th>Staff Count</th>
				<th>Donor Count</th>
				<th>Recipient Count</th>
				<th>Bloodbags In Stock</th>
				</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
	  			echo "<td>" . $row['Staff_Count'] . "</td>";
				echo "<td>" . $row['Donor_Count'] . "</td>";
				echo "<td>" . $row['Recipient_Count'] . "</td>";
				echo "<td>" . $row['Bloodbag_Count'] . "</td>";
				echo "</tr>";
			}
		}
	?>
	<br>
</div>
</div>
</div>
</body>
</html>