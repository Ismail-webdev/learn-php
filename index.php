<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>
      <?php
     // $greeting = "Hello";
      //echo $greeting." "."Word";  // for contact in php use .
     // echo "$greeting EveryBody"; // if you want to nest and evaluate a variable within a string you have to use double quotes. otherwise u got '$greeting EveryBody'

      $isStudent = 1; // value 0 is false
      var_dump($isStudent, $isStudent === true);

      $scores = [85,(int)"95.7"];
      var_dump($scores, $scores[0] + $scores[1])
      ?>
    </h1>
  </body>
</html>
