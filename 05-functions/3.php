<?php

class Person {
    public $name;
    public $surname;
    public $age;

    function setData($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
}

$person1 = new Person();
$person1->setData('Jake', 'Bird', 35);

if ($person1->age < 18) {
    echo $person1->name . " hasn't reached age of 18 yet!";
} else {
    echo $person1->name . " has reached age of 18 and currently is " . $person1->age . " years old!";
}