<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="css/layouts/gallery.css">
		 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		  <link rel="stylesheet" href="css/layouts/gallery-grid.css">
		  <link rel="stylesheet" href="css/layouts/cool.css">
		  <script src="AllFunctions.js"></script>
		
	</head>
	
	<body id="admin">
		
			<div >
    
	<form   name="form1" class="pure-form" method="POST" onsubmit="verif(document.form1.adminID,document.form1.password);return false;">
		<fieldset>
			<legend ><font size="100" color="white">Login</font></legend>
			
			<div class="pure-control-group">
            
				<input id="name" type="text" placeholder="Administrator ID" name="adminID">
				<input id="password" type="password" placeholder="Password" name="password">

				<label for="remember">
					<input id="remember" type="checkbox"> Remember me
				</label>

				<input id="submit_button" type="submit" class="pure-button pure-button-primary" name="submit" value="Sign In" ></input>
			</div>

			
			
		</fieldset>
	</form>
</div>
	</body>
</html>