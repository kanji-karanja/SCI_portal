<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<title>Voting System</title>
	<style type="text/css">
	#center{
		margin-left: 4%;
		margin-top: 1%;
		margin-right: 2%;
		background-color: white;
		width: 92%;
		height: auto;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
  #sectionCenter{
    text-align: center;
 float: left;
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
  #userInfo{
    margin-top:20px;
    margin-right:30px; 
    float: right;
    color: #00D4FF;
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
<div class="container-fluid">
  <div class="row">
    <div id="center">
      <div class="col-sm-12">
        <div class="row">
        <div class="col-sm-4">
        <div id="sectionCenter">     
          <div id="header">
              <img src="image/msulogo.png" height="120px" width="120px"><h4>Maseno University</h4>
	             <h5>School of Computing and Informatics</h5>
	         </div>
        </div>
        </div>
        <div class="col-sm-8">
          <div id="userInfo">
            <?php
                echo " ".$_SESSION['First']." ".$_SESSION['Second'];
            ?>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>