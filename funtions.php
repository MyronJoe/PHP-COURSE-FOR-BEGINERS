<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions-PHP</title>
</head>
<body>
    <!-- Functions in php -->
    
    <?php
        $welcome = 'Welcome To Our Functions Class';
        echo $welcome.'<br>'.'<br>';
        echo '<br>';

        //funtion which prints "Hello Joe"

        function hello(){
            print("HELLO JOE").'<br>';
        };
        hello();
        echo '<br>';


        //Functions with Arguments
        function greet($name){
            print("HELLO $name").'<br>';
        };
        greet('Alex');
        greet('Anita');
        greet('Joe');
        echo '<br>';


        //Create sum of Two Functions
        function sum($a, $b){
            return $a + $b;
        };
        echo sum(4, 5).'<br>';
        echo sum(34, 5).'<br>';
        echo sum(8, 51).'<br>';
        echo '<br>';


        // Create funtion To sum all numbers using ...$nums
        function sum_spred(...$nums){
            
            $sum = 0;
            foreach ($nums as $num) {
                $sum += $num;
            }
            return $sum;
        };
        echo sum_spred(2, 3, 4, 6, 7, 8).'<br>';
        echo '<br>';
        //Arrow function

        function sum_spredd(...$nums){
           return array_reduce($nums, fn($carry, $num) => $carry + $num);
        };
        echo sum_spredd(2, 3, 4, 6, 7, 8);
        

    ?>
</body>
</html>