<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		
		 <link rel="stylesheet" href="css/layouts/gallery.css">
		 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		  <link rel="stylesheet" href="css/layouts/gallery-grid.css">
		  <link rel="stylesheet" href="css/layouts/cool.css">
		
	</head>
	
	<body id="admin">
		
			<div >
    
		<?php
			$username=$_POST['adminID'];
			$password=$_POST['password'];
			
			if( "admin"==="$username" && "1234"==="$password"){
			
				goto url="C:\xampp\htdocs\CrimeReporting\AdminPage.php";
			
			}
			else{
			
				<meta http-equiv="refresh" content ="3"; url ="C:\xampp\htdocs\CrimeReporting\Admin.php">
			
			} 
		?>
</div>
	</body>
</html>