<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        h2{
            background: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div>
        <?php
        // dummy codes to practice
        $color = "red";
        $x = 20;
        $y = 40;

        # examples of variables
        $car_year = 1999;
        $car_brand = "Nissan";
        $car_model = "Sunny";

        $year_legal = $car_year + 25;
        $current_year = date(format:'y');

        echo "The best company of car that I prefer is " . $car_brand . " Specifically"  . " " . $car_model . " and I guess that it started in " . $car_year . "<br>"; 
        echo  "it's in " . ($year_legal - $current_year) . "<br>";
        ?>
    </div>
    <div>
        <?php
        $tutorial = 
        "<ol><h3>Tutorial</h3>
            <li>PHP Syntax</li>
            <li>PHP Comments
                <ul>
                    <li>Single line</li> 
                    <li>Multiple line</li>
                </ul>
            </li>
            <li>PHP Variables</li>
            <p>In Progress..........</p>    
        </ol>";
        
        ecHO "This color is $color <br>";
        echo "Hello World! ". $color . "<br>"; 
        Echo 'hello everybody <br>';
        Echo $x * $y;

        // PHP tutorial

        echo "<h2>What did you learn in PHP? </h2>";
        echo $tutorial;
        ?>
    </div>
</body>
</html>