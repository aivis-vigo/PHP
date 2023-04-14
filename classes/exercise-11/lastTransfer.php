<?php declare(strict_types=1);

function transfer(Account $from, Account $to, int $howMuch): Account {
    $from->withdrawal($howMuch);
    $to->deposit($howMuch);

    return $from;
}