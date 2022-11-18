<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates-PHP</title>
</head>

<body>
    <!-- Dates in php -->

    <?php
    $welcome = 'Welcome To Our Dates Class';
    echo $welcome . '<br>' . '<br>';
    echo '<br>';

    //print Current date
    echo date('Y-m-d H:i:s') . '<br>';
    echo '<br>';


    //Print Yesterday
    echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';
    echo '<br>';


    //Print Tomorrow
    echo date('Y-m-d H:i:s', time() + 60 * 60 * 24) . '<br>';
    echo '<br>';


    //print Current date in different format
    echo date('F j Y, H:i:s') . '<br>';
    echo '<br>';


    //Print current timestanp
    echo time() . '<br>';
    echo '<br>';


    //Parse date
    $parsedDate = date_parse('1990-07-07 09:00:00');

    echo '<pre>';
    var_dump($parsedDate);
    echo '</pre>';
    echo '<br>';


    ?>
</body>

</html>