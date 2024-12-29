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
     // var_dump($isStudent, $isStudent === true);

    //  $scores = [85,(int)"95.7"];
      //var_dump($scores, $scores[0] + $scores[1]);


      $age = 16;

      if ($age > 18) {
       echo "You're above 18"."<br/>";
      }else{
        echo "You're below 18"."<br/>";
      }

      $num = 15;

      if ($num > 0) {
        if ($num % 2 == 0) {
        echo "Positive Even Number"."<br/>";
        }else{
          echo "Positive Odd Number"."<br/>";
        }

      }else{
        echo "Non-positive Number";
      }
      $user = "admin";
      $password = "XXXXXXXX";

      if ($user == "admin" && $password == "XXXXXXXX") {
        echo "Success";
      }
      else{
        echo "Failure";
      }
      ?>
    </h1>
  </body>
</html>
