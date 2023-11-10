<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First php stuff</title>
	<link rel="stylesheet" type="text/css" href="PHP.css">
</head>
<body>
	<h5></h5>

	<?php 

	$name = "ADAM";
	$subject1 = "Math";
	$subject2 = "Physics";

	echo $name ," likes math <br>";
	echo $subject1 , "<br>";
	echo $subject2 , "<br>";
	// data types

	$isfemale = false; 
	echo strtolower($name) , "<br>";
	$dog = "dog";
	echo strtoupper($dog) , "<br>";
	echo strlen($name) , "<br>";
	echo $name[1] , "<br>";
	$fuck = "My name is adam and i am a girl <br>";
	echo $fuck , "<br>";
	echo str_replace("adam", "reaksmey", $fuck) , "<br>";

	//printing out a substring
	echo substr($fuck , 9); // this will basically print out the starting index character that you set. 
							// In this case, you set it to 9, so the outout will print out the string starting from 9th index ( starting from 0 )
	echo substr($fuck, 9, 3); // the number 2 here states you want to grab only 3 characters starting from the 9th index on, including the space too.
	?>
	<form action="PHP.php" method="get"></form>

</body>
</html>