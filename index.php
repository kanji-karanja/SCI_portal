<?php
session_start();
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
		margin-top: 8%;
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
	#sizelink{
		font-size: 14px;
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
	<?php
	if(isset($_POST['signin'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		//if($username=="maseno" && $password=="maseno"){

		// Create connection
		$conn = new mysqli("localhost","root","","IT");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	 $sql = "SELECT * FROM identity WHERE studentNo ='$username' AND password ='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div id='success-alert'><Strong>Success </strong>Please wait as you are signed in</div>";
    while($row = $result->fetch_assoc()) {
    $_SESSION['First'] = $row['FirstName'];
    $_SESSION['Second'] = $row['LastName'];
}
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=landingMain.php'>";
} else {
 echo "<div id='warning'>Sorry! The Login information is incorrect, try again.</div>";
}
}
$conn->close();
}
?>

	<form action="" method="post">
		<input type="text" placeholder="Username" name="username" required><br>
		<input type="password" placeholder="Password" name="password" required><br>
		<button type="submit" id="button" name="signin">Sign In</button>
	</form>
	<div id="sizelink"><br/><a href="register.php">Register me for the first time</a></div>
	<footer>©2017 Cryosoft Corporation</footer>
</center>
</body>
</html>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 