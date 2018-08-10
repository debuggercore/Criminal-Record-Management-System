<?php
		$con = mysql_connect('localhost','root','');
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("crimereportingsystem", $con);
		
		$suspect_id=$_POST['suspect_id'];
		$suspect_name=$_POST['suspect_name'];
		$picture=$_FILES["Picture"]["name"];
		$fingerprint=$_FILES["fingerprint"]["name"];
		$height=$_POST['height']; 
		$eye_colour=$_POST['eye_colour']; 
		$weight=$_POST['weight']; 
		$plead_type=$_POST['plead_type']; 
		$hair_colour=$_POST['hair_colour']; 
		$blood_group=$_POST['blood_group']; 
		$gender=$_POST['gender']; 
		$dob_m=$_POST['dob_month']; 
		$dob_d=$_POST['dob_date']; 
		$dob_y=$_POST['dob_year'];
			$dob=$dob_y . "-" . $dob_m . "-" . $dob_d; 
		$jail_id=$_POST['jail_id']; 
		$admission_d=$_POST['admission_date'];
		$admission_m=$_POST['admission_month'];
		$admission_y=$_POST['admission_year'];
			$admission=$admission_y . "-" . $admission_m . "-" . $admission_d; 
		$release_d=$_POST['release_date'];
		$release_m=$_POST['release_month'];
		$release_y=$_POST['release_year'];
			$release=$release_y . "-" . $release_m . "-" . $release_d; 
		$lawyer_id=$_POST['lawyer_id']; 
		$hire_type=$_POST['hire_type'];
		$address=$_POST['address']; 		
		$victim_id=$_POST['victim_id'];
		$name=$_POST['name'];
		$damage_done=$_POST['damage_done'];
		$relation_type=$_POST['relation_type'];
		$family_name=$_POST['family_name'];
		$contact=$_POST['contact'];
		$punishment_type=$_POST['punishment_type'];
		$offense_id=$_POST['offence_id'];
		$location=$_POST['location'];
		$crime_type=$_POST['crime_type'];
		$crime_m=$_POST['crime_month'];
		$crime_d=$_POST['crime_date'];
		$crime_y=$_POST['crime_year'];
			$crime_date=$crime_y . "-" . $crime_m . "-" . $crime_d;
		
		$sql="INSERT INTO `suspect` (suspect_id, suspect_name, address, height, eye_colour, weight, plead_type, hair_colour, blood_group, gender, dob, jail_id, release_date, admission_date, lawyer_id, hire_type, Picture, fingerprint)
VALUES
('$suspect_id','$suspect_name','$address','$height','$eye_colour','$weight','$plead_type','$hair_colour', '$blood_group', '$gender', '$dob', '$jail_id', '$release', '$admission', '$lawyer_id', '$hire_type', '$picture', '$fingerprint') ";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
 $sql="insert into victim (victim_id, name, damage_done, suspect_id, relation_type) values('$victim_id','$name','$damage_done','$suspect_id','$relation_type')";
if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
} 

$sql="insert into family(victim_id, name, contact) values ('$victim_id','$family_name','$contact')";
if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
} 

$sql="insert into criminal(criminal_id, punishment_type, suspect_id) values('$suspect_id','$punishment_type','$suspect_id')";
if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
} 
$sql="insert into crime(offense_code, location, crime_type, date, suspect_id) values('$offense_id','$location','$crime_type','$crime_date','$suspect_id')";
if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
} 
$sql="insert into undergoes (victim_id, offense_code, suspect_id) values('$victim_id', '$offense_id','$suspect_id')";
if(!mysql_query($sql)){
	die('Error: ' . mysql_error());
} 
echo "1 record added";
mysql_close($con) 
		
		
				
?>