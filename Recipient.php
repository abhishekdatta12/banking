<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Recipient Details
	</title>
	<link rel="stylesheet" href="recipient.css">
	
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
	<h4  align="center" style="font-family: sans-serif; size: 30px">By Abhishek Datta</h4>
    <div class="topnav"><!-- 
  		<a href="index.php">Staff Details</a> -->
  		<a href="Donor.php">Customers List</a>
  		<a class="active" href="Recipient.php">Transaction History</a><!-- 
  		<a href="Bloodbag.php">Bloodbag Inventory</a>
  		<a href="Track.php">Tracking</a> -->
  		<a href="homepage.html" style="float: right; background: #06801b; color: white;">Homepage</a>
	</div>
    <br>
    <br>
    <br>
    <div class="center">
    <h1 align="center" style="font-family: sans-serif;">TRANSACTION HISTORY</h3>
	<div class="content-table">
	<?php
		$sql="Select * from transactions;";
		$result = mysqli_query($conn, $sql);
		
		$resultCheck= mysqli_num_rows($result);
		if($resultCheck>0){
			echo "<table border='1'>
				<tr>
				<th>ID</th>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
				</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
	  			echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['sender'] . "</td>";
				echo "<td>" . $row['receiver'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				echo "</tr>";
			}
		}
	?><!-- 
	<button class="GFG" 
    onclick="window.location.href = 'recipient/insertRecipient.php';"> 
        Insert
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'recipient/updateRecipient1.php';"> 
        Update
    </button> 
    <button class="GFG" 
    onclick="window.location.href = 'recipient/deleteRecipient.php';"> 
        Delete
    </button>  -->
	<div class="buttons">
	<!--
	<div class="buttons">
	<form method="get" action="recipient/insertRecipient.php">
		<button>Insert</button>
	</form>
	<br>
	<form method="get" action="recipient/updateRecipient1.php">
		<button>Update</button>
	</form>
	<br>
	<form method="get" action="recipient/deleteRecipient.php">        
		<button>Delete</button>
	</form>
	</div>-->
	<br>
</div>
</div>
</div>
</body>
</html>