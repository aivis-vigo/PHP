<?php


$person = new stdClass();
$person->name = "Jake";
$person->cash = 500000;
$person->license = ['A', 'B'];

function createWeapon(string $name, int $price, string $license): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->price = $price;
    $weapon->license = $license;

    return $weapon;
}

$weapons = [
    'knife' => createWeapon('Knife', 14999, 'A'),
    'colt' => createWeapon('Colt 1911', 76999, 'B'),
    'm16' => createWeapon('M16', 159999, 'C'),
    'tank' => createWeapon('T-62', 25000000, 'T')
];

$licenses = implode(', ', $person->license);


$customerCash = $person->cash / 100;
echo "Welcome, $person->name | $ Your balance : $customerCash | Licenses : [$licenses]" . PHP_EOL;
echo "----------------------------------------------------------" . PHP_EOL;

echo PHP_EOL;
foreach ($weapons as $key=>$value)
{
    $gunPrice = $value->price / 100;
    echo "$value->name | $gunPrice | [$value->license]" . PHP_EOL;
}

echo PHP_EOL;
$selection = strtolower(readline('Select weapon : '));
echo PHP_EOL;

$selectedWeapon = $weapons[$selection];

if (in_array($selectedWeapon->license, $person->license))
{
    echo "$selectedWeapon->name successfully purchased!" . PHP_EOL;

    $transaction = ($person->cash - $selectedWeapon->price) / 100;
    echo "Your balance now is $ $transaction!";
}

if (!array_key_exists($selection, $weapons))
{
    echo "Weapon not found!" . PHP_EOL;
} elseif (!in_array($selectedWeapon->license, $person->license))
{
    echo "You don't have class [$selectedWeapon->license] license to purchase this weapon!" . PHP_EOL;
}

if ($person->cash < $selectedWeapon)
{
    echo "Not enough cash!";
}