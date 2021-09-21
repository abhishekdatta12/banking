<?php
	include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Connectivity!
	</title>
</head>
<body>
<?php
	$sql="Select * from alnum;";
	$result = mysqli_query($conn, $sql);
	$resultCheck= mysqli_num_rows($result);
	if($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['alpha'];
		}
	}
?>
</body>
</html>