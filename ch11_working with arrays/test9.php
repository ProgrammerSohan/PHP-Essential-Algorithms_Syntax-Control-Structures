<?php 
$scores = array(66,55,77,88,95);
$numPassingScores = 0;

for($i = 0; $i<sizeof($scores); $i = $i +1)
{
    if($scores[$i]>= 60)
    $numPassingScores = $numPassingScores +1;
}

echo $numPassingScores;



