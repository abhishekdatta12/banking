<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Staff Details
	</title>
	<link rel="stylesheet" href="blood.css">
	
</head>
<body>
	<div class="menu">
        <nav>
            <ul>
                <li><a href="#">Staff Details</a></li>
                <li><a href="#">Donor Details</a></li>
                <li><a href="#">Recipient Details</a></li>
                <li><a href="#">Bloodbag Inventory</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">Staff Details</h1>
	<div class="bod">
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
</div>
</div>
</body>
</html>