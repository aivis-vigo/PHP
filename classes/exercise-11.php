<?php declare(strict_types=1);

class Account
{
    private string $name;
    private float $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    public function getAll(): string
    {
        return $this->name . ", $" . $this->balance();
    }

    public function withdrawal(float $withdrawalAmount): float
    {
        return $this->balance -= $withdrawalAmount;
    }

    public function deposit(float $depositAmount): float
    {
        return $this->balance += $depositAmount;
    }
}

$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->getAll() . PHP_EOL;
echo $bartos_swiss_account->getAll() . PHP_EOL;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance() . PHP_EOL;

echo "Final state" . PHP_EOL;
echo $bartos_account->getAll() . PHP_EOL;
echo $bartos_swiss_account->getAll() . PHP_EOL;

// first account
$account = new Account("Test account", 100);
$account->deposit(20);
echo $account->getAll() . PHP_EOL;

// first money transfer
$mat = new Account("Matt's account", 1000);
$myAccount = new Account("Aivis account", 0);

