<?php 

$scores = array(90,87,74,80,94);
//extending this array
$scores[5] = 77;
$scores[6] = 88;
//PHP allows to add new elements to the end of an array without specifying the index position..
$scores[] = 80; //it will $scores[7]
$scores[] = 55; // it will $scores[8]

echo "$scores[7]";
echo "<pre>";
echo "$scores[8]";


