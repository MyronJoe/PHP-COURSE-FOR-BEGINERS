<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings-PHP</title>
</head>

<body>
    <!-- String in php -->

    <?php
    //Creating String
    $welcome = 'Welcome To Our String Class';
    echo $welcome . '<br>';
    $name = 'Joe';
    $location = 'Africa';

    //String Concatenation
    echo '<br>';
    $greeting = 'Good day ' . $name;
    echo $greeting . '<br>';

    $bio = "My Name is  $name and i am from $location";
    echo $bio . '<br>';


    //String funtions
    echo '<br>';
    $string = "  Hello World   ";

    echo strlen($string) . '<br>';
    echo trim($string) . '<br>';
    echo strtoupper($string) . '<br>';
    echo strtolower($string) . '<br>';
    echo str_word_count($string) . '<br>';
    echo strrev($string) . '<br>';
    echo ltrim($string) . '<br>';
    echo ucfirst('hello') . '<br>';
    echo lcfirst('HELLO') . '<br>';
    echo strpos($string, 'World') . '<br>';
    echo str_ireplace('world', 'Joe', $string) . '<br>';


    //Multiline text and line break
    $longText = "
        Hello, My name is Joe,
        i am 20,
        and i love programming
        ";
    echo $longText . '<br>';

    echo nl2br($longText) . '<br>';


    //Multiline text and reserve html Tags
    $longText = "
        Hello, My name is <b>Joe</b>,
        i am <b>20</b>,
        and i love programming
        ";
    echo $longText . '<br>';
    echo nl2br($longText) . '<br>';
    echo htmlentities($longText) . '<br>';
    echo nl2br(htmlentities($longText)) . '<br>';
    ?>
</body>

</html>