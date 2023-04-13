<?php declare(strict_types=1);

class SavingAccount
{
    private float $balance;
    private int $interestRate;

    public function __construct($balance, $interestRate)
    {
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdrawal(int $withdrawalAmount): void
    {
        $this->balance -= $withdrawalAmount;
    }

    public function deposit(int $depositAmount): void
    {
        $this->balance += $depositAmount;
    }

    public function addMonthlyInterest(): float
    {
        $monthlyInterestRate = ($this->interestRate / 100) / 12;
        $interestRate = $this->balance * $monthlyInterestRate;
        $this->balance += $interestRate;

        return $this->balance;
    }
}

$customerDeposit = (int) readline("How much money is in the account?: ");
$customerInterestRate = (int) readline("Enter annual interest rate: ");
$accountOpenedFor = (int) readline("How long has the account been opened?: ");

$customerAccount = new SavingAccount($customerDeposit, $customerInterestRate);

$startPeriod = 0;
$currentMonth = 1;

$totalDeposit = 0;
$totalWithdrawal = 0;
$totalInterest = 0;

while ($startPeriod < $accountOpenedFor) {
    $monthDeposit = (int) readline("Enter amount deposited for month: $currentMonth: ");
    $monthWithdrawal = (int) readline("Enter amount withdrawn for $currentMonth: ");

    $totalDeposit += $monthDeposit;
    $totalWithdrawal += $monthWithdrawal;
    $totalInterest += $customerAccount->addMonthlyInterest();

    $customerAccount->deposit($monthDeposit);
    $customerAccount->withdrawal($monthWithdrawal);
    $customerAccount->addMonthlyInterest();

    $startPeriod++;
    $currentMonth++;
}

$endBalance = ($totalInterest - $customerDeposit) + $customerAccount->getBalance();

echo "Total deposited: $" . number_format($totalDeposit, 2) . PHP_EOL;
echo "Total withdrawn: $" . number_format($totalWithdrawal, 2) . PHP_EOL;
echo "Interest earned: $" . number_format($totalInterest - $customerDeposit, 2) . PHP_EOL;
echo "Ending balance: $" . number_format($endBalance, 2);