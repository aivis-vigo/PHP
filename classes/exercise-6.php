<?php declare(strict_types=1);

class EnergyDrinks
{
    private int $peopleSurveyed;
    private float $purchased_energy_drinks;
    private float $prefer_citrus_drinks;

    public function __construct($surveyed, $purchased_energy_drinks, $prefer_citrus_drinks)
    {
        $this->peopleSurveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    public function getPeopleSurveyed(): int
    {
        return $this->peopleSurveyed;
    }

    public function getUserPercentage(): float
    {
        return $this->purchased_energy_drinks;
    }

    public function getCitrusPercentage(): float
    {
        return $this->prefer_citrus_drinks;
    }

    public function calculate_energy_drinkers(): string
    {
        $energyDrinkers = (int) floor($this->getUserPercentage() * $this->getPeopleSurveyed());
        $check = 1;
        if ($energyDrinkers % $check !== 0) {
            throw new LogicException("Invalid input! Expected integer.");
        }

        return "$energyDrinkers of customers in the survey who purchased one or more energy drinks per week.";
    }

    public function calculate_prefer_citrus(): string
    {
        $citrusDrinkers = (int) floor($this->getCitrusPercentage() * $this->calculate_energy_drinkers());
        $check = 1;
        if ($citrusDrinkers % $check !== 0) {
            throw new LogicException(";(");
        }

        return "$citrusDrinkers of customers in the survey who prefer citrus flavored energy drinks.";
    }
}

class DrinkTest
{
    public static function run():string
    {
        $drinkers = new EnergyDrinks(12467, 0.14, 0.64);
        return $drinkers->calculate_energy_drinkers() . PHP_EOL . $drinkers->calculate_prefer_citrus() . PHP_EOL;
    }
}

echo DrinkTest::run();