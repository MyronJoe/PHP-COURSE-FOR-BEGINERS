<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMBERS-PHP</title>
</head>
<body>
    <!-- Numbers in php -->
    
    <?php
        //Declaring Numbers
        $a = 5;
        $b = 4;
        $c = 1.2;


        //Arithemetic Operations
        echo $a + $b.'<br>';
        echo $a + $b + $c.'<br>';
        echo $a * $b.'<br>';
        echo $a - $b.'<br>';
        echo $a / $b.'<br>';
        echo $a % $b.'<br>'; 
        echo $a + $b * ($a + $c).'<br>';


        //Assignment with Math Operators
        $a += $b; echo $a.'<br>'; // = 9
        $a -= $b; echo $a.'<br>'; // = 5
        $a *= $b; echo $a.'<br>'; // = 20
        $a /= $b; echo $a.'<br>'; // = 5


        //Increment Oparator
        $b++; //Post Increment
        echo $b.'<br>';

        ++$b; //Pre Increment
        echo $b.'<br>';


        //Decrement Oparetor
        $b--; //Post Decrement
        echo $b.'<br>';
        
        --$b; //Pre Decrement
        echo $b.'<br>';

        //Number Checking funtion
        echo is_float($c).'<br>'; //true
        echo is_int($a).'<br>'; //true
        echo is_numeric($a).'<br>'; //true


        //conversion
        $strNum = '4.43';
        $number = (float)$strNum;
        $number2 = (int)$strNum;
        var_dump($number).'<br>';
        var_dump($number2).'<br>';


        //Number function
        echo '<br>';
        echo abs(-4).'<br>';
        echo pow(5, 2).'<br>';
        echo min(5, 2).'<br>';
        echo max(5, 2).'<br>';
        echo round(5.7).'<br>';
        echo floor(5.7).'<br>';


        //Formatting Nmubers
        $number = 987123654.876543;
        $formatted = number_format($number, 2, '.', ',');
        echo $formatted

    ?>
</body>
</html>