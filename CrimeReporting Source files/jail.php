<!DOCTYPE html>
<html lang="en">

<head> <!-- here we have title, css styles and scripts  -->
	<meta charset="utf-8" />
	<title>Jail</title>
	
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
           
            <th>Jail_ID</th>
            <th>Jailor</th>
            <th>Capacity</th>
			<th>Location</th>
			<th>Contact</th>
			<th>Type</th>
			
        </tr>
    </thead>
			
    

    <tbody>
      
		<?php
				$c1=mysql_query("select * from jail");
		while($row = mysql_fetch_array($c1))
			{
				echo "<tr>";
				echo "<td>" . $row['jail_id'] . "</td>";
				echo "<td>" . $row['jailor'] . "</td>";
				echo "<td>" . $row['capacity'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['contact'] . "</td>";
				echo "<td>" . $row['jail_type'] . "</td>";
				
				echo "</tr>";
			}
			

			mysql_close($con);
		?>
    </tbody>
</table>
	</div>
</body>

</html> 