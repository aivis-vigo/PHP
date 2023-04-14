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