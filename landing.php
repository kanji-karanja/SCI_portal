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
		margin-top: 10%;
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
	#border{
		margin: 5px;
		height: 150px;
		width: 150px;
		display: inline;
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
		</style>
</head>
<body>
<center>
<div id="center">
	<div id="header">
	<h2>School of Computing and Informatics</h2>
	<?php
    echo "".$_SESSION['First']." ".$_SESSION['Second'];
	?>
	<h3>Vote CLASS REPS</h3>
	</div>
		<div id="border"><img src="image/android.png" height="150px" width="150px"></div>
		<div id="border"><img src="image/android.png" height="150px" width="150px"></div>
		<form action="thanks.php" method="POST">
			<input type="Radio" name="cand" value="cand1" required>#Candidate1  <input type="radio" name="cand" value="cand2">#Candidate2
			<br>
			<br>
			<button type="submit" id="button" >Vote</button>
		</form>

	<footer>©2017 Cryosoft Corporation</footer>
</center>
</body>
</html>