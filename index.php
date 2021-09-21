<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bank Application</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400;500;600;700&display=swap" rel="stylesheet">

	<style type="text/css">
		*{
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		    font-family: 'Reem Kufi', sans-serif;
		}
		body{
			background: #BBF3FF;
		}
		.top-bar{
			background: #0A5666;
			height: 175px;
			color: white;
			text-align: center;
		}

		.pick{
			text-align: center;
			color: black;
		}

		.box1{
			background-image: url("cust.jpg");
			background-size: cover;
			width: 300px;
			height: 300px;
			text-align: center;
			border-radius: 11px;
			border: solid black 4px;
		}

		.box2{
			background-image: url("trans.jpg");
			background-size: cover;
			width: 300px;
			height: 300px;
			text-align: center;
			border-radius: 11px;
			border: solid black 4px;
		}

		.box3{
			background-image: url("about.jpg");
			background-size: cover;
			width: 300px;
			height: 300px;
			text-align: center;
			border-radius: 11px;
			border: solid black 4px;
		}

		.title{
			font-size: 60;
		}

		.options{
			margin-left: 200px;
			margin-right: 200px;
			display: flex;
  			justify-content: space-between;
		}

		a{
			text-decoration: none;
		}

		a:visited{
			color: black;
		}

		.footer{
			background: #0A5666;
			height: 55px;
			color: white;
			text-align: center;
		}
		/*.trans{
			background-color: red;
			background-size: cover;
		}*/
	</style>
</head>
<body>

	<div class="top-bar">
		<br>
		<h3>The Sparks Foundation</h3>
		<h4>Web Development Task  &nbsp; 1</h4>
		<h1>Basic Banking App</h1>
		<h4>By Abhishek Datta</h4>
	</div>

	<div class="pick"><br><br><h1>Pick an option:<h1></div>

	<br><br>
	<div class="options">
		<div class="box1">
			<div class="list">
				<div class="title"><br><a href="Donor.php"><h2>Customer List</h2></a></div>
			</div>
		</div>
		<div class="box2">
			<div class="trans">
				<div class="title"><br><a href="Recipient.php"><h2>Transaction List</a></h2></div>
			</div>
		</div>
		<div class="box3">
			<div class="about">
				<div class="title"><br><h2>About Us</h2></div>
			</div>
		</div>
	</div>

	<br><br>
	<div class="footer"><br>
		<p>For more info, go to <u>https://www.thesparksfoundationsingapore.org/</u></p>
	</div>
</body>
</html>