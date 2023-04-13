<?php declare(strict_types=1);

class BankAccount
{
    private string $username;
    private float $balance;

    public function __construct(string $username, float $balance)
    {
        $this->username = $username;
        $this->balance = $balance;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    function show_user_name_and_balance(): string
    {
        if ($this->getBalance() < 0) {
            return $this->getUsername() . ", -$" . number_format(abs($this->getBalance()), 2);
        } else {
            return $this->getUsername() . ", $" . $this->getBalance();
        }
    }
}

$ben = new BankAccount("Benson", -23.2);
echo $ben->show_user_name_and_balance();