<?php 
$errorMessage[0] = "ERROR: You submitted a form with empty fields";
$errorMessage[1] = "ERROR: You submitted non-numeric data";
$errorMessage[2] = "ERROR: The value is out of range";
$errorMessage[3] = "ERROR: Incorrect User ID";
$errorMessage[4] = "ERROR: Incorrect Password";

$score = array(66,55,77,88,95);

$hoursWorked = 0;
$hourlyWage = 2;

$password = 123;
$correctPassword = 1234;

if(empty($hoursWorked) OR empty($hourlyWage))
print ("<p>$errorMessage[0]</p>");
if($score[0]<0 OR $score[0]>100)
print("<p>$errorMessage[2]</p>");
if($password != $correctPassword)
print("<p>$errorMessage[4]</p>");

