<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCORES REPORT</title>
    
</head>
<body>
    <h1>Multiple Operation on an Array</h1>
    <?php 
    $scores = array(80,55,75,97,88,82,59,60,96,78);
    $sum = 0;
    $numPassingScores = 0;

    print("<h1>SCORES REPORT</h1>");
    print("<table border=\"1\">");
    for($i = 0; $i<sizeof($scores);$i=$i+1)
    {
       $scoreNum = $i+1;
       print("<tr><td>SCORE $scoreNum</td>
            <td>$scores[$i]</td> </tr>");
       $sum = $sum + $scores[$i];
        if($scores[$i]>=60)
        $numPassingScores = $numPassingScores + 1;
           }
     print("</table>");   
     
     $numFailingScores = sizeof($scores) - $numPassingScores;
     $average = $sum / sizeof($scores);
     print("<p>Average Score: $average<br>");    
     print("Number of passing Scores: $numPassingScores<br>");
     print("Number of failing Scores: $numFailingScores</p>");

    
    ?>    
</body>
</html>
