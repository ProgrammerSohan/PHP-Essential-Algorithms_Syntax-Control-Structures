<?php 
//5 separate variables & store scores in each variable:
/*
$score1 = 90;
$score2 = 87;
$score3 = 74;
$score4 = 80;
$score5 = 95;
echo $score5;
*/

//Here is one way to create an array of five scores in PHP:
/*
$scores[0] = 90;
$scores[1] = 87;
$scores[2] = 74;
$scores[3] = 80;
$scores[4] = 95;

echo $scores[4];
*/

// using array function
/*
$scores = array(90,87,74,80,94);

$scores[2] =85;
$exam1= 50;
$scores[3] = $exam1 * 0.85;
$scores[4] = $scores[2] + 5;
echo $scores[4];
echo "<br/>";
echo $scores[3];
*/
// Working  with array 
/*
$scores = array(90,87,74,80,94);

$revisedScore = $scores[0] + 10;

$averageScore = ($scores[0]+$scores[1]+$scores[2]+$scores[3]+$scores[3]+$scores[4]/5);
if($scores[1]>=60)
print("PASS!");
else
print("FAIL!");
*/


?>



