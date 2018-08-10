<?php

				$con = mysql_connect('localhost','root','');
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("crimereportingsystem", $con);
		 $ans=$_POST['query'];
				$c1=mysql_query("select suspect_id from suspect where suspect_name='$ans'");
				while($a=mysql_fetch_array($c1)){
				
				$id=$a['suspect_id'];
				echo "Deleting suspect with id $id \n";
				$delete=mysql_query("delete from suspect where suspect_id = '$id' ");
				if(!$delete){
					echo "Deleting";
					echo "Could not delete data .mysql_error()";
				}
				else{
				echo "Deleted data successfully\n";
				}
				}
				mysql_close($con);

?>

