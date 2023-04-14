<?php declare(strict_types=1);

require_once "Account.php";
require_once "firstAccount.php";
require_once "moneyTransfer.php";
require_once "lastTransfer.php";

echo "-----Bank account-----" . PHP_EOL;
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

echo "-----First account-----" . PHP_EOL;
echo $account->getAll() . PHP_EOL;

echo "-----Money transfer-----" . PHP_EOL;
echo "Matt's account: $$toTransfer" . PHP_EOL;
echo "My account: $$myAccount" . PHP_EOL;

echo "-----Last transfer-----" . PHP_EOL;
$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);
transfer($a, $b, 50);
transfer($b, $c, 25);

echo "A: $" . $a->balance() . " " . "B: $" . $b->balance() . " " . "C: $" . $c->balance() . " " . PHP_EOL;