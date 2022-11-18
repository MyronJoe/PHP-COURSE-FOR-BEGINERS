<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-For-Absolute-Beginers</title>
</head>

<body>
    <!-- Having two Php Tags in same Document -->

    <?php
    echo "Hello World";
    echo '<br>';
    echo " We can also use print to output PHP";
    echo '<br>'
    ?>

    <?php
    // print and echo to output PHP
    echo "Hello World";
    echo '<br>';
    print('Helo world from another php tag');
    print('<br>');
    print('<br>');
    print('<button>Click</button>');
    print('<br>');


    //Comments in PHP

    // Single Line Comment

    # Another Single Line Comment

    /**
     * Multiple
     * Line
     * Commment
     */


    // to declear variable
    $name = 'Joeboy';
    $isMarried = true;
    $num1 = 4;
    $num2 = 3;
    $num3 = 5;
    $sum = $num1 + $num1 + $num3 . ' is the sum of num1, num2, num3';


    // to print variable
    print ($sum) . '<br>';
    echo $name . '<br>';
    echo $num1 . '<br>';
    echo $sum . '<br>';
    echo $isMarried . '<br>';
    echo '<br>';


    // to get type of variable
    echo gettype($name) . '<br>';
    echo gettype($num1) . '<br>';
    echo gettype($sum) . '<br>';
    echo gettype($isMarried) . '<br>';


    // to print all the variable and get information
    var_dump($name, $num1, $isMarried) . '<br>';


    // variable checking funtion
    echo '<br>';
    echo is_string($name) . '<br>';
    echo is_int($num1) . '<br>';
    echo is_bool($isMarried) . '<br>';


    //checking iif a variable is declearded or not
    echo '<br>';
    echo isset($name) . '<br>';
    echo isset($person) . '<br>'; // false, so it returns empty = 0


    //Constants: This variables Cant Be Changed
    define('PI', 3.142) . '<br>';
    echo PI . '<br>'; //You can Print the constant variable without $ sign

    //Built-in PHP Constants
    echo SORT_ASC . '<br>';
    echo PHP_INT_MAX . '<br>';
    ?>



</body>

</html>