<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
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
<div id="center">
	<div id="header">
	</div>
	 <div class="row">
          <div class="large-4 medium-4 columns">
            
             <div id="header"><img src="image/msulogo.png" height="120px" width="120px"><h4>Maseno University</h4>
	<h5>School of Computing and Informatics</h5>
	</div>
          </div>
          <div class="large-8 medium-8 columns">
          	<div class="large-4 medium-4 small-4 columns">
            <?php
    echo " ".$_SESSION['First']." ".$_SESSION['Second'];
	?>
          </div>
          <div class="large-8 medium-8 small-4 columns">
          </div>
        
          </div>
        </div>
		 <div class="row">
		 	
      <div class="large-8 medium-8 columns">
        <h5>Here&rsquo;s your basic grid:</h5>
        <!-- Grid Example -->

        <div class="row">
          <div class="large-12 columns">
            <div class="primary callout">
              <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.callout element so you can see where the columns are - it's not required at all for the grid.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-6 medium-6 columns">
            <div class="primary callout">
              <p>Six columns</p>
            </div>
          </div>
          <div class="large-6 medium-6 columns">
            <div class="primary callout">
              <p>Six columns</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="large-4 medium-4 small-4 columns">
            <div class="primary callout">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="primary callout">
              <p>Four columns</p>
            </div>
          </div>
          <div class="large-4 medium-4 small-4 columns">
            <div class="primary callout">
              <p>Four columns</p>
            </div>
          </div>
        </div>

        <hr />

        <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
          <div class="row">
            <div class="large-12 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-12.columns" />
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns" />
            </div>
            <div class="large-4 medium-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns" />
            </div>
            <div class="large-4 medium-4 columns">
              <div class="row collapse">
                <label>Input Label</label>
                <div class="input-group">
                  <input type="text" placeholder="small-9.columns" class="input-group-field" />
                  <span class="input-group-label">.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Select Box</label>
              <select>
                <option value="husker">Husker</option>
                <option value="starbuck">Starbuck</option>
                <option value="hotdog">Hot Dog</option>
                <option value="apollo">Apollo</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="large-6 medium-6 columns">
              <label>Choose Your Favorite</label>
              <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
              <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
            </div>
            <div class="large-6 medium-6 columns">
              <label>Check these out</label>
              <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
              <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Textarea Label</label>
              <textarea placeholder="small-12.columns"></textarea>
            </div>
          </div>
        </form>
      </div>

      <div class="large-4 medium-4 columns">
        <h5>Try one of these buttons:</h5>
        <p><a href="#" class="button">Simple Button</a><br/>
        <a href="#" class="success button">Success Btn</a><br/>
        <a href="#" class="alert button">Alert Btn</a><br/>
        <a href="#" class="secondary button">Secondary Btn</a></p>
        <div class="callout">
          <h5>So many components, girl!</h5>
          <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
          <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>
</body>
</html>