<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='passstyles.css' type='text/css'>
	<?php require 'passbrain.php'; ?> 

</head>
<body class= "center">
	<form action ='passbrain.php' method= 'POST'>

	<p>    </p>
<!-- Landing page includes a description of your app and what a xkcd password is (assume an unfamiliar audience).
		put input form here -->	
        <input type = 'text' name = 'in1' ><br> How many words do you want in your password?<br>

	<input type="checkbox" name="number" value="false" class ="check">Should your password include a number?<br>
	<input type="checkbox" name="symbol" value="false" class ="check">Should your password include symbols?<br> 
	<input type="checkbox" name="case" value="false" class = "check">Should your passworf have an UPPER CASE first letter?<br>
Generate! <input type="submit"">

</form>

	</form>

	
	

</body>
</html>
