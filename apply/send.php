<?php

/*
PROGRAMMER:
Adebanke Alabi


ORIGNAL DATE:
Thursday, January 19, 2012
for MSPA Registration form
yourmspa.com

RE-USE DATE:
Thursday, May 10, 2012
for outreach.olemiss.edu/cobec

DESCRIPTION: 
Getting all the data from the cobec registration form, cleaning it up and sending it in an email.
Check input stores everything as plain text to stop spammers and hackers from working scripts on you.
Scripts show up as plain text instead of actually being executed.

The "keys" array stores the names of each element (which are the keysin the $_POST array).
"Index" allows us manually parse through the "keys" array.
In the "foreach" loop, we go through each element in the form and clean them up with "check_input."

We concatonate the keys and their corresponding value line by line(hence the "\n") into the string, "message" 


SOURCES: I learned so much!!! It cut down my code size DRAMATICALLY
1. How to iterate through the $POST array quickly
http://php.net/manual/en/control-structures.foreach.php

2. How to get the keys in an array
http://www.w3schools.com/php/func_array_keys.asp

3. String concatonation:
http://php.net/manual/en/language.operators.string.php

4. The "check_input" function
http://myphpform.com/validating-forms.php

*/

function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


$keys =	array_keys($_POST);
$index = 0;
$message = "";

foreach($_POST as $p)
{
	$message .= $keys[$index] . ": " . check_input($p) . "\n\n";
	$index++;
}

//$testSend = "buki.outreach@gmail.com";
/* $send1 = "kshackel@olemiss.edu";
$send2 = "lhpower@olemiss.edu"; */
$send3 = "dasuttles@valdosta.edu";
$subject = "COBEC Winter Conference Applicant";

//mail($testSend, $subject, $message);
/*mail($send1, $subject, $message);
mail($send2, $subject, $message);*/
mail($send3, $subject, $message);
header('Location: received.html');
?>