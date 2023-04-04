<?php declare(strict_types=1);

$keypad = [
    1 => [""], 2 => ["a", "b", "c"], 3 => ["d", "e", "f"],
    4 => ["g", "h", "i"], 5 => ["j", "k", "l"], 6 => ["m", "n", "o"],
    7 => ["p", "q", "r", "s"], 8 => ["t", "u", "v"], 9 => ["w", "x", "y", "z"],
];

$userInput = readline("Text here: ");

$letters = explode(" ", $userInput);
$text = [];

foreach ($letters as $letter) {
    if ($letter[0] == "2") {
        if ($letter == "2") {
            $text[] = $keypad[2][0];
        } elseif ($letter == "22") {
            $text[] = $keypad[2][1];
        }
        elseif ($letter == "222") {
            $text[] = $keypad[2][2];
        }
    } elseif ($letter[0] == "3") {
        if ($letter == "3") {
            $text[] = $keypad[3][0];
        } elseif ($letter == "33") {
            $text[] = $keypad[3][1];
        }
        elseif ($letter == "333") {
            $text[] = $keypad[3][2];
        }
    } elseif ($letter[0] == "4") {
        if ($letter == "4") {
            $text[] = $keypad[4][0];
        } elseif ($letter == "44") {
            $text[] = $keypad[4][1];
        }
        elseif ($letter == "444") {
            $text[] = $keypad[4][2];
        }
    } elseif ($letter[0] == "5") {
        if ($letter == "5") {
            $text[] = $keypad[5][0];
        } elseif ($letter == "55") {
            $text[] = $keypad[5][1];
        }
        elseif ($letter == "555") {
            $text[] = $keypad[5][2];
        }
    } elseif ($letter[0] == "6") {
        if ($letter == "6") {
            $text[] = $keypad[6][0];
        } elseif ($letter == "66") {
            $text[] = $keypad[6][1];
        }
        elseif ($letter == "666") {
            $text[] = $keypad[6][2];
        }
    } elseif ($letter[0] == "7") {
        if ($letter == "7") {
            $text[] = $keypad[7][0];
        } elseif ($letter == "77") {
            $text[] = $keypad[7][1];
        }
        elseif ($letter == "777") {
            $text[] = $keypad[7][2];
        } elseif ($letter == "7777") {
            $text[] = $keypad[7][3];
        }
    } elseif ($letter[0] == "8") {
        if ($letter == "8") {
            $text[] = $keypad[8][0];
        } elseif ($letter == "88") {
            $text[] = $keypad[8][1];
        }
        elseif ($letter == "888") {
            $text[] = $keypad[8][2];
        }
    } elseif ($letter[0] == "9") {
        if ($letter == "9") {
            $text[] = $keypad[9][0];
        } elseif ($letter == "99") {
            $text[] = $keypad[9][1];
        }
        elseif ($letter == "999") {
            $text[] = $keypad[9][2];
        } elseif ($letter == "9999") {
            $text[] = $keypad[9][3];
        }
    }
}

echo implode("", $text);