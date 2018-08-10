<!DOCTYPE html>
<html lang="en">

<head> <!-- here we have title, css styles and scripts  -->
	<meta charset="utf-8" />
	<title>Criminal</title>
	
	<link rel="stylesheet" href="C:\Users\SUJITHA\Desktop\Html5\Flexible box model.css">
	<link rel="stylesheet" href="css/layouts/gallery-grid.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">  
</head>

<body> <!-- what the user sees -->
 <?php
		$con = mysql_connect('localhost','root','');
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("crimereportingsystem", $con);
				
?>

       
	<div id="big_wrapper">
		<table class="pure-table">
		
				<thead>
        <tr>
           
            <th>Offence Code</th>
            <th>Location</th>
            <th>Crime Type</th>
			<th>Date</th>
			<th>Suspect_ID</th>
			
			
			
        </tr>
    </thead>
			
    

    <tbody>
      
		<?php
				$c1=mysql_query("select * from crime");
		while($row = mysql_fetch_array($c1))
			{
				echo "<tr>";
				echo "<td>" . $row['offense_code'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['crime_type'] . "</td>";
				echo "<td>" . $row['date'] . "</td>";
				echo "<td>" . $row['suspect_id'] . "</td>";
				
				
				echo "</tr>";
			}
			

			mysql_close($con);
		?>
    </tbody>
</table>
	</div>
</body>

</html> 