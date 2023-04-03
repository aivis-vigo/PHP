<?php declare(strict_types=1);

function createEmployee(float $basePay, int $workedHours): stdClass
{
    $employee = new stdClass();
    $employee->basePay = $basePay;
    $employee->workedHours = $workedHours;

    return $employee;
}

$employees = [
    "Bob" => createEmployee(7.5, 35),
    "Mike" => createEmployee(8.2, 47),
    "Rick" => createEmployee(10, 73)
];

foreach ($employees as $worker) {
    $otPay = ((($worker->workedHours - 40) * $worker->basePay) * 1.5 );
    $salary = $worker->basePay * $worker->workedHours;

    if ($worker->basePay < 8) {
        echo "Base pay too low! Minimum is $ 8." . PHP_EOL;
    } elseif ($worker->workedHours > 60) {
        echo "You can't work more than 60 hours a week!" . PHP_EOL;
    } else {
        echo "This week earned $ $salary + overtime $ $otPay." . PHP_EOL;
    }
}