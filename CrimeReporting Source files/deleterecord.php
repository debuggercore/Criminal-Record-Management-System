<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="css/layouts/gallery.css">
		 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		  <link rel="stylesheet" href="css/layouts/gallery-grid.css">
		  <link rel="stylesheet" href="css/layouts/cool.css">
		
	</head>
	
	<body id="deleterecord">
	<!--Create connection--> 
 <?php
		$con = mysql_connect('localhost','root','');
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("crimereportingsystem", $con);
				
?>
	
			
   
	<div id="right">
	<form action="delete.php" class="pure-form pure-form-stacked" align="center" method="POST">
		<fieldset>
			<legend>Search for a criminal to delete</legend>

			<div class="pure-g">
				 <div class="pure-u-1 pure-u-md-1-3">
					<label for="state">Enter Name</label>
					<select id="state" class="pure-input-1-2" name="query">
						<?php
							$c1=mysql_query("select suspect_name from suspect");
							while($col = mysql_fetch_array($c1)){
								echo  "<option >" . $col['suspect_name'] . "</option></br>" ;
								
							}
							mysql_close($con); 
							?> 
						 
					   
					</select>
					
				</div> 
				
					
			</div>

		 

			<button type="submit" class="pure-button pure-button-primary" name="submit" value="submit">Submit</button>
		</fieldset>
</form>
</div>

	</body>
</html>