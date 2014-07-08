<?php
error_reporting(-1);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>
<head>

	<title>Password Generator</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='passstyles.css' type='text/css'>
	<?php require 'passbrain.php'; ?> 

</head>
<body class= "center">
	<form action ='passwordgen.php' method= 'POST'>

	<p>    </p>
<!-- Landing page includes a description of your app and what a xkcd password is (assume an unfamiliar audience).
		put input form here -->	
        An ideal password does not contain more than 5 words <br>
	<input type = 'text' name = 'words' placeholder = '  # of words in password'><br> <br>

	<input type="checkbox" name="number" value="t" class ="check">Should your password include a number?<br>
	<input type="checkbox" name="symbol" value="t" class ="check">Should your password include symbols?<br> 
	<input type="checkbox" name="case" value="t" class = "check">Should your password have an UPPER CASE first letter?<br>
Generate! <input type="submit">

	</form>

                 <p> your password:  </p> <?php echo $pass; ?> <br>	
	

</body>
</html>
