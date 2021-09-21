<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Customer List
	</title>
	<link rel="stylesheet" href="blood.css">
	
</head>
<body>
	<div class="gradient">
		<h3 align="center" style="font-family: sans-serif; size: 70px">The Sparks Foundation - Web Development Task 1</h3>
		<!-- <h4 align="center" style="font-family: sans-serif; size: 70px">Web Development Task 1</h4> -->
    <h1 align="center" style="font-family: sans-serif; size: 70px"> Basic Banking System</h1>
	
	<h4  align="center" style="font-family: sans-serif; size: 30px">By Abhishek Datta</h4>
    <div class="topnav"><!-- 
  		<a href="index.php">Staff Details</a> -->
  		<a class="active" href="Donor.php">Customer List</a>
  		<a href="Recipient.php">Transaction History</a><!-- 
  		<a href="Bloodbag.php">Bloodbag Inventory</a>
  		<a href="Track.php">Tracking</a> -->
  		<div class="Logout"><a href="homepage.html" style="float: right; background: #850812; color: white;">Homepage</a></div>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">CUSTOMER LIST</h3>
	<div class="content-table">
	<?php
		$sql="Select * from customers;";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck>0){
			echo "<table border='1'>
				<tr>
					<th>Name</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Balance</th>
				</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
	  			echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
				echo "<td>" . $row['balance'] . "</td>";
				echo "</tr>";
			}
		}
	?>

	<!-- <button class="GFG" 
    onclick="window.location.href = 'donor/donorinsert.php';"> 
        Insert
    </button>  -->
    <button class="GFG" 
    onclick="window.location.href = 'donor/donorupdate1.php';"> 
        Create Transaction
    </button> <!-- 
    <button class="GFG" 
    onclick="window.location.href = 'donor/donordelete.php';"> 
        Delete
    </button>  -->
	<div class="buttons">

	<!--<form method="get" action="donor/donorinsert.php">
		<button>Insert</button>
	</form>
	<br>
	<form method="get" action="donor/donorupdate1.php">
		<button>Update</button>
	</form>
	<br>
	<form method="get" action="donor/donordelete.php">        
		<button>Delete</button>
	</form>-->
	</div>
	<br>
</div>
</div>
</div>
</body>
</html>