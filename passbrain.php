<?php



	$bank = array ("there", "is", "a", "house", "new", "orleans", "it's", "called", "the", "rising", "sun", "ruin", "millions", "poor", "boy", "god", "phsyco", "know", "one", "over", "kilarney", "many", "years", "ago", "my", "mother", "sang", "song", "tones", "sweet", "and", "low");
	$symbank = array ("!", "@", "#", "#", "$", "%", "&");
	
// Debugging: Show the contents of the $_POST superglobal
echo "This is a POST<br>";
print_r($_POST);
echo "<br>This is a Bank<br>";
print_r($bank);

	
	$pick = rand(0,31);
	$pass = "";

	for ($i= 0; $i < $_POST['words']; $i++) {
	
	if ($_POST['case'] == "t") { 
		$pass.= ucfirst($bank[$pick]);
		$_POST['case'] = "f"; }
	else {
		$pass.= $bank[$pick];
		$pick = rand(0,31);
		}	
	if ($_POST['symbol'] == "t") { 
		$pass.= $symbank[rand(0,6)]; 
		}
		
	if ($_POST['number'] == "t") { 
		$pass.= rand(0,99); 
		}
	}


