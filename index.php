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
<body>

	<p class = 'password'> <?php echo $pass ?> </p>


	<form action ='index.php' method= 'POST'>
	<div class = 'center'>	

		<p class='img'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'><img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'></a>
			<br>
		</p>



        <H1 class = "check">An ideal password does not contain more than 5 words </H1> 
<!-- Landing page includes a description of your app and what a xkcd password is (assume an unfamiliar audience).
		put input form here -->	
	<input type = 'text' class= "check"  name = 'words' placeholder = '  # of words in password'><br> <br>

	<input type="checkbox" name="number" value="t" class ="check">Should your password include a number?<br>
	<input type="checkbox" name="symbol" value="t" class ="check">Should your password include symbols?<br> 
	<input type="checkbox" name="case" value="t" class = "check">Should your password have an UPPER CASE first letter?<br>
Generate! <input type="submit">

	</form>
	<div>
	

</body>
</html>
