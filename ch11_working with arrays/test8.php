<?php 
//summing & averaging the values in an array
$scores = array(66,55,77,88,95);
$sum = 0;
for($i = 0; $i<sizeof($scores); $i = $i +1)
{
    $sum = $sum + $scores[$i];
}
$average = $sum/sizeof($scores);

echo $sum;
echo "<pre/>";
echo $average;


