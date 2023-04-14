<?php declare(strict_types=1);

$mat = new Account("Matt's account", 1000);
$myAccount = new Account("Aivis account", 0);

$mat = new Account("Matt's account", 1000);
$myAccount = new Account("Aivis account", 0);

$toTransfer = $mat->balance() - $mat->withdrawal(100);
$myAccount = $myAccount->deposit($toTransfer);