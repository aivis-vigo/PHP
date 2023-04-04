<?php declare(strict_types=1);

$day = readline("Enter day: ");
$weekDays = str_split($day);

foreach ($weekDays as $weekDay) {
    switch ($weekDay) {
        case $day == 0:
            echo "Sunday";
            break;
        case $weekDay == 1:
            echo "Monday";
            break;
        case $weekDay == 2:
            echo "Tuesday";
            break;
        case $weekDay == 3:
            echo "Thursday";
            break;
        case $weekDay == 4:
            echo "Wednesday";
            break;
        case $weekDay == 5:
            echo "Friday";
            break;
        case $weekDay == 6:
            echo "Saturday";
            break;
        default:
            echo "Not valid day";
            break;
    }
    echo " ";
}
