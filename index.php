<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Staff Details
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
  		<a class="active" href="index.php">Staff Details</a>
  		<a href="Donor.php">Donor Details</a>
  		<a href="Recipient.php">Recipient Details</a>
  		<a href="Bloodbag.php">Bloodbag Inventory</a>
  		<a href="Track.php">Tracking</a>
  		<div class="Logout"><a href="log.php" style="float: right; background: #085b85;">Logout</a></div>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">STAFF DETAILS</h3>
	<div class="content-table">
	<?php
		$sql="Select * from Staff;";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck>0){
			echo "<table border='1'>
				<tr>
				<th>EmployeeID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Phone</th>
				<th>Salary</th>
				<th>Address</th>
				</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
	  			echo "<td>" . $row['Emp_ID'] . "</td>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['Emp_Description'] . "</td>";
				echo "<td>" . $row['Phone_No'] . "</td>";
				echo "<td>" . $row['Salary'] . "</td>";
				echo "<td>" . $row['Address'] . "</td>";
				echo "</tr>";
			}
		}
	?>
	<button class="GFG" 
    onclick="window.location.href = 'staff/staffinsert.php';"> 
        Insert
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'staff/staffupdate1.php';"> 
        Update
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'staff/staffdelete.php';"> 
        Delete
    </button> 
	<div class="buttons">
	<!--
	<div class="buttons">
	<form method="get" action="staff/staffinsert.php">
		<button>Insert</button>
	</form>
	<br>
	<form method="get" action="staff/staffupdate1.php">
		<button>Update</button>
	</form>
	<br>
	<form method="get" action="staff/staffdelete.php">        
		<button>Delete</button>
	</form>
	</div>-->
	<br>
</div>
</div>
</div>
</body>
</html>