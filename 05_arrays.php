<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-PHP</title>
</head>

<body>
    <!-- Array in php -->

    <?php
    $welcome = 'Welcome To Our Array Class';
    echo $welcome . '<br>';

    //Creating Array
    $fruits = ['Orange', 'Banana', 'Apple', 'Mango',];
    $cars = ['Volvo', 'Benz', 'Toyota', 'Honda',];


    //print the whole array
    var_dump($fruits) . '<br>';

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';

    //get element by index
    echo ($fruits[0]) . '<br>';
    echo ($fruits[1]) . '<br>';
    echo ($fruits[3]) . '<br>';

    //set element by index
    $fruits[1] = 'Cashew';
    $fruits[4] = 'Almond';

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';

    //check if array has elemnt at index
    echo isset($fruits[2]) . '<br>'; //true
    echo isset($fruits[5]) . '<br>'; //false
    echo isset($fruits[0]) . '<br>'; //true


    //append element
    $fruits[] = 'Peach';

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';


    //print the lenght of arry 
    echo count($fruits) . '<br>';


    //add element at end of an array
    array_push($fruits, 'Pawpaw');

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';


    //remove element from the end of an array
    echo array_pop($fruits);

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';


    //add element to the beginning of an array
    array_unshift($fruits, 'foo');

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';


    //remove element from the beginning of an array
    echo array_shift($fruits);

    echo '<pre>';
    var_dump($fruits) . '<br>';
    echo '</pre>';


    //split the string into an array
    $str = "Banana Apple Peach";


    echo '<pre>';
    var_dump(explode(" ", $str)) . '<br>';
    echo '</pre>';


    //combine array into string
    echo implode(", ", $fruits) . '<br>';


    //check if element exist in an array
    echo in_array('Apple', $fruits) . '<br>';
    var_dump(in_array('Apple', $fruits)) . '<br>';
    var_dump(in_array('pinapple', $fruits)) . '<br>';


    // search element index in the array
    echo '<pre>';
    var_dump(array_search('pinapple', $fruits)) . '<br>';
    echo '</pre>';
    echo '<pre>';
    var_dump(array_search('Apple', $fruits)) . '<br>';
    echo '</pre>';

    //merge two arrays

    echo '<pre>';
    var_dump(array_merge($cars, $fruits)) . '<br>';
    var_dump([...$fruits, ...$cars]) . '<br>';
    echo '</pre>';


    //sorting array
    $concate = [...$fruits, ...$cars];

    sort($concate);

    echo '<pre>';
    var_dump($concate) . '<br>';
    echo '</pre>';

    //Reverse sorting array
    rsort($concate);

    echo '<pre>';
    var_dump($concate) . '<br>';
    echo '</pre>';


    //Associative array
    $person = [
        'name' => 'Joe',
        'age' => 20,
        'location' => 'Africa',
        'Hobbies' => ['Coding', 'Reading'],
        // 'address' => 34
    ];

    echo '<pre>';
    var_dump($person) . '<br>';
    echo '</pre>';

    //Accessing an associative array

    echo $person['name'] . '<br>';
    echo $person['age'] . '<br>';

    //set element in an associative array
    $person['Sname'] = 'Myron';
    echo '<pre>';
    var_dump($person) . '<br>';
    echo '</pre>';


    //Null Coalescing assignment operator

    // if (!isset($person['address'])) {
    //     $person['address'] = 'Unknown';
    // }

    $person['address'] ??= 'Unknown';

    echo '<pre>';
    var_dump($person) . '<br>';
    echo '</pre>';


    //print the key of the array
    echo '<pre>';
    var_dump(array_keys($person)) . '<br>';
    echo '</pre>';


    //print the values of the array
    echo '<pre>';
    var_dump(array_values($person)) . '<br>';
    echo '</pre>';


    //Sort the array with keys
    ksort($person);
    echo '<pre>';
    var_dump(array_values($person)) . '<br>';
    echo '</pre>';


    //Sort the array with values
    asort($person);
    echo '<pre>';
    var_dump(array_values($person)) . '<br>';
    echo '</pre>';


    //Two dimensional array
    $todos = [
        ['title' => 'Todo title 1', 'Activity1' => 'Coding'],
        ['title' => 'Todo title 2', 'Activity2' => 'Reading']
    ];

    echo '<pre>';
    var_dump(array_values($todos)) . '<br>';
    echo '</pre>';

    echo '<pre>';
    var_dump(array_values($todos[0])) . '<br>';
    echo '</pre>';

    ?>
</body>

</html>