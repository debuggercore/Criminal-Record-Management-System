<!DOCTYPE html>
<html lang="en">

<head> <!-- here we have title, css styles and scripts  -->
	<meta charset="utf-8" />
	<title>Family</title>
	
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
		<table class="pure-table" align="center">
		
				<thead>
        <tr>
           
            <th>Victim_ID</th>
            <th>Name</th>
            
			<th>Contact</th>
			
			
        </tr>
    </thead>
			
    

    <tbody>
      
		<?php
				$c1=mysql_query("select * from family");
		while($row = mysql_fetch_array($c1))
			{
				echo "<tr>";
				echo "<td>" . $row['victim_id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				
				echo "<td>" . $row['contact'] . "</td>";
				
				
				echo "</tr>";
			}
			

			mysql_close($con);
		?>
    </tbody>
</table>
	</div>
</body>

</html> 