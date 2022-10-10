<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional-PHP</title>
</head>
<body>
    <!-- Conditional in php -->
    
    <?php
        $welcome = 'Welcome To Our Conditions Class';
        echo $welcome.'<br>'.'<br>';

        //Conditions

        $age = 20;
        $salary = 600000;

        //Simple if
        echo '<br>';
        if ($age < 25) {
            print('You are still young').'<br>';
        };

        if ($age === 20) {
            print('A Match').'<br>';
        };


        //Without circle braces
        echo '<br>';
        if ($salary === 600000) 
            print('Your salary is same with mine').'<br>';

        if ($salary === 600000) print('Your salary is same with mine').'<br>';


        //simple if-else
        echo '<br>';
        if ($age > 25) {
            print('You are getting old').'<br>';
        }else{
            print('You are still young').'<br>';
        };


        //difference btw == and ===
        //the == checks for same value
        //the === checks for Type and Value
        echo '<br>';
        if ($age == 20) {
            print('Both are same').'<br>';
        }else{
            print('Not same type').'<br>';
        };


        if ($age == '20') {
            print('Both are same').'<br>';
        }else{
            print('Not same type').'<br>';
        };


        if ($age === '20') {
            print('Both are same').'<br>';
        }else{
            print('Not same type').'<br>';
        };


        //if AND
        echo '<br>';
        if ($age == '20' && $salary > 4000) {
            print('All are true').'<br>';
        }else{
            print('One or more is false').'<br>';
        };


        if ($age === '20' && $salary > 4000) {
            print('All are true').'<br>';
        }else{
            print('One or more is false').'<br>';
        };


        //if OR
        echo '<br>';
        if ($age === '20' || $salary > 4000) {
            print('One or more is true').'<br>';
        }else{
            print('All are false').'<br>';
        };
        if ($age === '20' || $salary < 4000) {
            print('One or more is true').'<br>';
        }else{
            print('All are false').'<br>';
        };


        //Ternary if
        echo '<br>';
        echo $age < 25 ? 'Young' : 'Old'.'<br>';
        echo '<br>';
        echo $age == 25 ? 'Young' : 'Old'.'<br>';


        //Short ternary
        echo '<br>';
        $myage = $age ?: 18;
        print($myage).'<br>';


        //Null coalescing operator
        echo '<br>';
        $myname = isset($name) ? $name : 'Joe';
        print($myname).'<br>';



        //Switch
        echo '<br>';
        
            $userRole = 'user';
        switch ($userRole) {
            case 'admin':
                print('admin').'<br>';
                break;
            case 'editor':
                print('editor').'<br>';
                break;
            case 'user':
                print('user').'<br>';
                break;
            default:
                print('Invalid Role').'<br>';
                break;
        }
        

    ?>
</body>
</html>