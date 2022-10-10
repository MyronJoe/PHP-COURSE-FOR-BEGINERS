<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop-PHP</title>
</head>
<body>
    <!-- Loops in php -->
    
    <?php
        $welcome = 'Welcome To Our Loop Class';
        echo $welcome.'<br>'.'<br>';
        echo '<br>';

        //While

        // while () {

        // };
        

        //Loop with $counter
        $counter = 0;
        while ($counter < 5) {
           print($counter).'<br>';
           $counter++;
        };
        echo '<br>';


        //do-while
        $counter = 0;
        do {
           print($counter).'<br>';
           if ($counter === 5) {
            break;
           };
           $counter++;
        } while ($counter <= 10);
        echo '<br>';


        //for
        $a = 5;
        for ($i=0; $i < $a; $i++) { 
            print($i).'<br>';
        }
        echo '<br>';


        //foreach
        $cars = ["volvo", "Benz", "Toyota", "Honda"];

        foreach ($cars as $item => $car) {
            print($car).'<br>';//car-name
            print($item).'<br>';//index
        }
        echo '<br>';


        //iterate Over Associative Array

        $person = [
            'name' => 'Joe',
            'age' => 20,
            'location' => 'Africa',
            'Hobbies' => ['Coding', 'Reading'],
            // 'address' => 34
        ];

        foreach ($person as $key => $value) {

            if (is_array($value)) {
                print($key.' '.' = '. implode(', ', $value)).'<br>';
            }else{
                print($key.' '.'  = '. $value).'<br>';
            }
            
        }
        

    ?>
</body>
</html>