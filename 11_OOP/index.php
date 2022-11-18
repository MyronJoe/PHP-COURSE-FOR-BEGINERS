<?php
//What is Class and Instance
class person{
    public $name;
    public $sname;
    private $age;
    public static $counter = 0;

    public function __construct($name, $sname)
    {
        $this->name = $name;
        $this->sname = $sname;
        self::$counter++;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function getCounter(){
        return self::$counter;
    }
}

$p = new person('Joe', 'Myron');
$p->setAge(30);
echo 'Age = '. $p->getAge();

echo '<pre>';
    var_dump($p);
echo '</pre>';


$p2 = new person('Kachi', 'Alexis');
$p2->setAge(40);
echo 'Age for p2 = '. $p2->getAge();

echo '<pre>';
    var_dump($p2);
echo '</pre>';

$p3 = new person('Michael', 'Buchi');
$p3->setAge(50);
echo 'Age for p2 = '. $p3->getAge();

echo '<pre>';
    var_dump($p3);
echo '</pre>';

echo 'Instances have been created '. person::$counter.' times';

echo '<br>';

?>