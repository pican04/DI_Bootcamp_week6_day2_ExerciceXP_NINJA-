<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciseXP_NINJA</title>
    </head>
    <body>

    <h1>Factorial Of A Number Using Recursive</h1>
  <!-- Write a PHP program to find factorial of a number using recursive function.-->   
    <?php
        function factorial($number) {
           
            if ($number < 2) {
                return 1;
            } else {
                
                return ($number * factorial($number-1));
            }
        }
        
        echo "le factoriel du nombre 5 est: " .factorial(5);
    ?> 
    </body>
</html>