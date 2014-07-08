<?php



	$bank = array ("there", "is", "a", "house", "in", "New Orleans", "it's", "called", "the", "rising", "sun", "ruin", "millions", "poor", "boy", "god", "I", "know", "one", "over", "kilarney", "many", "years", "ago", "my", "mother", "sang", "song", "tones", "sweet", "and", "low");



// Debugging: Show the contents of the $_POST superglobal
echo "This is a POST<br>";
print_r($_POST);
echo "<br>This is a Bank<br>";
print_r($bank);



	$pick = rand(0,20);

