<!DOCTYPE html>
<html lang="en">

<head> <!-- here we have title, css styles and scripts  -->
	<meta charset="utf-8" />	
	<title>Criminal</title>
	
	
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

       
	<div class="centered">
	<!-- Suspect -->
		<table class="pure-table">
		<h1>Suspect</h1>
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
      
		<?php
				$ans=$_POST['query'];
				
				$c1=mysql_query("select suspect_id from suspect where suspect_name='$ans'");
				
				while($a=mysql_fetch_array($c1)){
				$s=$a['suspect_id'];
				$c2=mysql_query("select * from suspect  where suspect_id='$s'");
		while($row = mysql_fetch_array($c2))
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
			
}
			
		?>
    </tbody>
	</table>
	<table class="pure-table">
	<!--victim-->
	<h1>Victim</h1>
	<thead>
		
		<tr>
           
            <th>Victim_ID</th>
            <th>Name</th>
            <th>Damage Done</th>
			
			<th>Relation Type</th>
			
			
        </tr>
	</thead>
	<tbody>
		<?php
			$ans=$_POST['query'];
				
				$c1=mysql_query("select suspect_id from suspect where suspect_name='$ans'");
			while($a=mysql_fetch_array($c1)){
				$s=$a['suspect_id'];
				
			$c2=mysql_query("select * from victim  where suspect_id='$s'");
			while($row = mysql_fetch_array($c2))
				{
					echo "<tr>";
					echo "<td>" . $row['victim_id'] . "</td>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['damage_done'] . "</td>";
					$a= $row['relation_type'];
					if($a=='')
					echo "<td> Unknown </td>";
					else
					echo "<td>" . $row['relation_type'] . "</td>";
					
					
					echo "</tr>";
				}
				}
				
		?>
	</tbody>
</table> 
	<table class="pure-table">
	<h1>Jail</h1>
	
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
			$ans=$_POST['query'];
				
				$c1=mysql_query("select jail_id from suspect where suspect_name='$ans'");
			while($a=mysql_fetch_array($c1)){
				$s=$a['jail_id'];
				
			$c2=mysql_query("select * from  jail where jail_id='$s'");
			while($row = mysql_fetch_array($c2))
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
				}
				
		?>
	</tbody>
</table> 
	<table class="pure-table">
	<h1>Crime</h1>
	
	<thead>
		<tr>
            <th>Offence Code</th>
            <th>Location</th>
            <th>Crime Type</th>
			<th>Date</th>
			
			
			
        </tr>
	</thead>
	<tbody>
		<?php
			$ans=$_POST['query'];
				
				$c1=mysql_query("select suspect_id from suspect where suspect_name='$ans'");
			while($a=mysql_fetch_array($c1)){
				$s=$a['suspect_id'];
				
			$c2=mysql_query("select * from  crime where suspect_id='$s'");
			while($row = mysql_fetch_array($c2))
				{
					echo "<tr>";
					echo "<td>" . $row['offense_code'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "<td>" . $row['crime_type'] . "</td>";
				echo "<td>" . $row['date'] . "</td>";
						
					
					echo "</tr>";
				}
				}
				
		?>
	</tbody>
</table> 
	</div>
	
	
</body>

</html> 