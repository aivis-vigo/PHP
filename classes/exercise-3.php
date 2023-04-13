<?php declare(strict_types=1);

class FuelGauge
{
    private int $fuelInTank;
    private int $maxFuelCapacity;

    public function __construct(int $fuelInTank, int $maxFuelCapacity)
    {
        $this->fuelInTank = $fuelInTank;
        $this->maxFuelCapacity = $maxFuelCapacity;
    }

    public function getFuelLevel(): int
    {
        return $this->fuelInTank;
    }

    public function getCapacity(): int
    {
        return $this->maxFuelCapacity;
    }
}

class Odometer
{
    private int $currentMileage;

    public function __construct(int $currentMileage)
    {
        $this->currentMileage = $currentMileage;
    }

    public function getMileage(): int
    {
        return $this->currentMileage;
    }
}

$bmwFuel = new FuelGauge(10, 70);
$bmwOdometer = new Odometer(100);

echo "-----BMW E30-----" . PHP_EOL;
echo "Fuel: " . $bmwFuel->getFuelLevel() . "/" . $bmwFuel->getCapacity() . " Liters" . PHP_EOL;
echo "Mileage: " . $bmwOdometer->getMileage() . " km" . PHP_EOL;

$driverChoice = strtolower(readline("Fill/Drive: "));

$currentTankLevel = $bmwFuel->getFuelLevel();
$maxTankCapacity = $bmwFuel->getCapacity();
$currentMileage = $bmwOdometer->getMileage();
$outOfFuel = 0;

function fill(int $currentTankLevel, int $maxTankCapacity): int {
    while ($currentTankLevel < $maxTankCapacity) {
        echo $currentTankLevel + 1 . " L" . PHP_EOL;
        $currentTankLevel++;
    }

    return $currentTankLevel;
}

function drive(int $currentTankLevel, int $currentMileage): string {
    while ($currentTankLevel > 0) {
        echo "Tank: $currentTankLevel L | Mileage: $currentMileage KM" . PHP_EOL;

        if ($currentMileage % 10 == 0) {
            $currentTankLevel--;
        }

        $currentMileage++;

        if ($currentMileage == 999999) {
            $currentMileage = 0;
        }
    }

    return "Out of Fuel!";
}

if ($driverChoice == "fill") {
    echo fill($currentTankLevel, $maxTankCapacity);
    $currentTankLevel = fill($currentTankLevel, $maxTankCapacity);
    echo drive($currentTankLevel, $currentMileage);
} elseif ($driverChoice == "drive") {
    echo drive($currentTankLevel, $currentMileage);
} else {
    echo "Invalid input!";
}