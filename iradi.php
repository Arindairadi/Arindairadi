<?php
// Capture user inputs
$name = "Arinda Iradi"; 
$dateOfBirth = "2002-01-01"; 
$homeAddress = " kabale, Uganda"; 

// Calculate the age
$currentDate = new DateTime();
$dob = new DateTime($dateOfBirth); 
$age = $dob->diff($currentDate)->y; 

// Display the welcome message with age
echo "Welcome home, $name!<br>";
echo "Your current address is: $homeAddress.<br>";
echo "Today, you are $age years old.";
?>
