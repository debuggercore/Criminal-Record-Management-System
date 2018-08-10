<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="css/layouts/gallery.css">
		 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		  <link rel="stylesheet" href="css/layouts/gallery-grid.css">
		  <link rel="stylesheet" href="css/layouts/cool.css">
		
	</head>
	
	<body id="user">
	<!--Create connection--> 
 <?php
		$con = mysql_connect('localhost','root','');
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("crimereportingsystem", $con);
				
?>
		
			<div id="buttons" >
    <style scoped>

        .button {
		color: black;
		width:200px;
		text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
		border: 2px solid red;
		background: white;
		padding: 20px;
		margin: 10px;
		height: 50px;
		-webkit-box-flex: 1;
		display: block;
		center:10px;
        }


       
		

    </style>
        
    <input class="button pure-button" type="button" name="b" value="Suspect" onclick="window.location.href='suspect.php';"/></br>
    
    <input class="button pure-button" type="button" name="b" value="Jail" onclick="window.location.href='jail.php';"/></br>
    <input class="button pure-button" type="button" name="b" value="Victim" onclick="window.location.href='victim.php';"/></br>
    <input class="button pure-button" type="button" name="b" value="Family" onclick="window.location.href='family.php';"/></br>
	<input class="button pure-button" type="button" name="b" value="Criminal" onclick="window.location.href='criminal.php';"/></br>
	<input class="button pure-button" type="button" name="b" value="Lawyer" onclick="window.location.href='lawyer.php';"/></br>
	<input class="button pure-button" type="button" name="b" value="Crime" onclick="window.location.href='crime.php';"/></br>
	<input class="button pure-button" type="button" name="b" value="Undergoes" onclick="window.location.href='undergoes.php';"/>
	</div>
	<div id="right">
	<form action="criminal_query.php" class="pure-form pure-form-stacked" align="center" method="POST">
		<fieldset>
			<legend>Search for a criminal</legend>

			<div class="pure-g">
				 <div class="pure-u-1 pure-u-md-1-3">
					<label for="state">Enter Name</label>
					<select id="state" class="pure-input-1-2" name="query">
						<?php
							$c1=mysql_query("select suspect_name from suspect");
							while($col = mysql_fetch_array($c1)){
								echo  "<option >" . $col['suspect_name'] . "</option></br>" ;
								
							}
							 
							?> 
						 
					   
					</select>
					
				</div> 
				
				
				

			  

				<!-- <div class="pure-u-1 pure-u-md-1-3">
					<label for="city">City</label>
					<input id="city" class="pure-u-23-24" type="text">
				</div> -->

				
			</div>

		   <!--  <label for="terms" class="pure-checkbox">
				<input id="terms" type="checkbox"> I've read the terms and conditions
			</label> -->

			<button type="submit" class="pure-button pure-button-primary" name="submit" value="submit">Submit</button>
		</fieldset>
</form>
</div>
<div id="right">
<form action="location_query.php" class="pure-form pure-form-stacked" align="center" method="POST">
		<fieldset>
			<legend>Show Criminal Details - Location wise</legend>

			<div class="pure-g">
				 <div class="pure-u-1 pure-u-md-1-3">
					<label for="state">Enter Location Name</label>
					<select id="state" class="pure-input-1-2" name="query">
						<?php
							$c1=mysql_query("select distinct location from crime");
							while($col = mysql_fetch_array($c1)){
								echo  "<option >" . $col['location'] . "</option></br>" ;
								
							}
							mysql_close($con); 
							?> 
						 
					   
					</select>
					
				</div> 
				
				
				

			  

				<!-- <div class="pure-u-1 pure-u-md-1-3">
					<label for="city">City</label>
					<input id="city" class="pure-u-23-24" type="text">
				</div> -->

				
			</div>

		   <!--  <label for="terms" class="pure-checkbox">
				<input id="terms" type="checkbox"> I've read the terms and conditions
			</label> -->

			<button type="submit" class="pure-button pure-button-primary" name="submit" value="submit">Submit</button>
		</fieldset>
</form>
</div>

	</body>
</html>