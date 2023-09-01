<?php 
$scores = array(66,55,77,88,95);
 $totalScore = $scores[0] + $scores[1] + $scores[2] + $scores[3] + $scores[4];
 echo $totalScore;

 print("<h1>SCORES</h1>");

 for ($i = 0; $i<5; $i = $i + 1)
 {
    print("<p>$scores[$i]</p>");
 }


