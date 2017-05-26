<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<title>Voting System</title>
	<style type="text/css">
	#center{
		margin-top: 6%;
		background-color: white;
		width: 50%;
		height: 50%;
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    	text-align: center;

		}
	body{
		background-color: #E6E6E6;
		font-family:gothic , "Century Gothic Regular";
	}
	#header{
		padding-top: 10px;
	}
	input{
		border-style: double;
		border-color: #0000FF;
		border-radius: 5px;
		padding-left: 7px;
		margin: 5px;
		height: 25px;
		width: 200px;
	}
	#button{
		border-style: double;
		border-color: #0000FF;
		color: #ffffff;
		background-color: #0000FF;
		border-radius: 5px;
		margin: 5px;
		height: 30px;
		width: 210px;
	}
	footer{
		margin: 10px;
		font-size: 15px;
	}
	@font-face{
		font-family: gothic;
		src:url(fonts/gothic.ttf);

	}
	#success-alert{
		background-color: #AAFFAA;
		margin: 20px;
		padding-top: 5px;
		padding-bottom: 5px;
		border-radius: 10px;

	}
	#warning{
		background-color: #FF2A2A;
		color: #FFFFFF;
		margin: 20px;
		padding-top: 5px;
		padding-bottom: 5px;
		border-radius: 10px;
	}
		</style>
</head>
<body>
<center>
<div id="center">
	<div id="header"><img src="image/msulogo.png" height="120px" width="120px"><h2>Maseno University</h2>
	<h3>School of Computing and Informatics</h3>
	</div>
	Register yourself as a voter<br>
	<?php
	if(isset($_POST['signin'])){
		$fname =$_POST['fname'];
		$lname=$_POST['lname'];
		$admno=$_POST['admno'];
		$email=$_POST['email'];
		
		//if($username=="maseno" && $password=="maseno"){

		// Create connection
		$conn = new mysqli("localhost","root","","IT");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
 $sql = "SELECT * FROM identity WHERE FirstName='$fname' AND LastName='$lname'AND studentNo='$admno'AND email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div id='warning' >Sorry! You have already been Registered</div>";
} else {
 	$sql = "INSERT INTO identity (FirstName,LastName,studentNo, email, password) VALUES ('$fname', '$lname', '$admno','$email','$admno')";

if ($conn->query($sql) === TRUE) {
   echo "<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=success.php'>";
} 	
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
}
?>
	<form action="" method="post">
		<input type="text" placeholder="First Name" name="fname" required><br>
		<input type="text" placeholder="Last name" name="lname" required><br>
		<input type="text" placeholder="Admission number" name="admno" required maxlength="12" minlength="12"><br>
		<input type="email" placeholder="Email" name="email" required><br>
		<button type="submit" id="button" name="signin">Add me</button>
	</form>
	
	<footer>©2017 Cryosoft Corporation</footer>
</center>
</body>
</html>