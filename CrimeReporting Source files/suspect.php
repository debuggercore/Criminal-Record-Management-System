<!DOCTYPE html>
<html lang="en">

<head> <!-- here we have title, css styles and scripts  -->
	<meta charset="utf-8" />
	<title>Suspect</title>
	
	<link rel="stylesheet" href="C:\Users\SUJITHA\Desktop\Html5\Flexible box model.css">
	<link rel="stylesheet" href="css/layouts/gallery-grid.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">  
</head>

<body> <!-- what the user sees -->
<!--Create connection--> 
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
           
            <th>Suspect_ID</th>
            <th>Name</th>
            <th>Address</th>
			<th>Height</th>
			<th>Eye Colour</th>
			<th>Weight</th>
			<th>Plead Type</th>
			<th>Hair Type</th>
			<th>Blood Group</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Jail_ID</th>
			<th>Release Date</th>
			<th>Admission Date</th>
			<th>Lawyer_ID</th>
			<th>Hire Type</th>
			<th>Picture</th>
			<th>Fingerprint</th>
			
        </tr>
    </thead>
			
    

    <tbody>
       <!--  <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
        </tr> -->
		<?php
				$c1=mysql_query("select * from suspect");
		while($row = mysql_fetch_array($c1))
			{
				echo "<tr>";
				echo "<td>" . $row['suspect_id'] . "</td>";
				echo "<td>" . $row['suspect_name'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['height'] . "</td>";
				echo "<td>" . $row['eye_colour'] . "</td>";
				echo "<td>" . $row['weight'] . "</td>";
				echo "<td>" . $row['plead_type'] . "</td>";
				echo "<td>" . $row['hair_colour'] . "</td>";
				echo "<td>" . $row['blood_group'] . "</td>";
				echo "<td>" . $row['gender'] . "</td>";
				echo "<td>" . $row['dob'] . "</td>";
				echo "<td>" . $row['jail_id'] . "</td>";
				echo "<td>" . $row['release_date'] . "</td>";
				echo "<td>" . $row['admission_date'] . "</td>";
				echo "<td>" . $row['lawyer_id'] . "</td>";
				echo "<td>" . $row['hire_type'] . "</td>";
				echo "<td><img src='" . $row['Picture'] . "' width='200' height='150'/></td>";
				echo "<td><img src='" . $row['fingerprint'] . "' width='200' height='150'/></td>";
				 
				 
				echo "</tr>";
			}
			

			mysql_close($con); 
		?>
    </tbody>
</table>
<canvas id="canvas" width="700" height="600">
				
				
			</canvas>
	</div>
</body>

</html> 