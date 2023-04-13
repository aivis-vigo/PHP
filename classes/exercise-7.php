<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct($name, $sex, $mother, $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFather(): string
    {
        if ($this->father == "") {
            return "Unknown";
        } else {
            return $this->father;
        }
    }

    public function getMother(): string
    {
        return $this->mother;
    }

    public function hasSameMotherAs(object $otherDog): bool
    {
        if ($this->getMother() == $otherDog->getMother()) {
            return true;
        } else {
            return false;
        }
    }
}

class TestDog
{
    public static function main()
    {
        $dogs = [
            new Dog("Max", "male", "Lady", "Rocky"),
            new Dog("Rocky", "male", "Molly", "Sam"),
            new Dog("Sparky", "male", "", ""),
            new Dog("Buster", "male", "Lady", "Sparky"),
            new Dog("Sam", "male", "", ""),
            new Dog("Lady", "female", "", ""),
            new Dog("Molly", "female", "", ""),
            new Dog("Coco", "female", "Molly", "Buster")
        ];

        foreach ($dogs as $dog) {
            echo $dog->getName() . "'s father is " . $dog->getFather() . PHP_EOL;
        }

        echo $dogs[7]->hasSameMotherAs($dogs[1]);
    }
}

TestDog::main();