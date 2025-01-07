<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="icon" href="icon.png">
    <style>
        body{
            background: #000;
            color: #fff;
        }
        h2{
            color: #2fcc;
            background-color : #ca45;
        }

        #tutorial{
            border : 3px dashed #fff;
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

        echo "The best company of car that I prefer is " . $car_brand 
        . " Specifically"  . " " . $car_model . " and I guess that it started in " 
        . $car_year . "<br>"; 
        echo  "it's in " . ($year_legal - $current_year) . "<br>" . "<br>" . "<br>" . "<br>";

        /**get the type of the variable */
        $name = "Ismail";
        $age = 22;
        $marital_status = false;
        $family_members = ['dad', 'mom', 'ahmed', 'ibrahim', 'mohammed'];
        $float_num = 20.33;
        $null = NULL;
        
        Echo "# String"; 
        Echo var_dump($name) . "<br>" . "<br>";
        Echo "# Integer";
        Echo var_dump($age) . "<br>" . "<br>";
        Echo "# Boolean";
        Echo var_dump($marital_status) . "<br>" . "<br>";
        Echo "# Array";
        Echo var_dump($family_members) . "<br>" . "<br>";
        Echo "# Float";
        Echo var_dump($float_num) . "<br>" . "<br>";
        Echo "# Null";
        Echo var_dump($null) . "<br>" . "<br>" . "<br>" . "<br>";

          
        ecHO "This color is $color <br>";
        echo "Hello World! ". $color . "<br>"; 
        Echo 'hello everybody <br>';
        Echo $x * $y . "<br>" . "<br>" . "<br>";
        ?>
        
    </div>
    <hr />
    <br />
    <div id = "tutorial">
        <?php
        $tutorial = 
        "<ol><h3>Tutorial</h3>
            <li>PHP Syntax</li> 
            <li>PHP Comments
                <ul>
                    <li>Single line</li> <p> #   or    //   </p>
                    <li>Multiple line</li> <p>  /**           */   </p>
                </ul>
            </li>
            <li>PHP Variables</li>
            <p>In Progress..........</p>    
        </ol>";

        // PHP tutorial
        echo "<h2>What did you learn in PHP? </h2>";
        echo $tutorial;
        ?>
    </div>
</body>
</html>